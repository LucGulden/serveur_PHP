<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Article;
use App\Categorie;
use App\Contient;
use App\Achete;
use App\Correspond;
use Illuminate\Support\Facades\DB;


class BoutiqueController extends Controller
{
    public function topvente()
    {
        //Récupère les 3 articles les plus vendus
        $topvente = Article::get()
        ->sortByDesc('nbr_ventes_article')
        ->take(3);
        
        //Récupère tous les articles
        $articles = Article::get();

        //Récupère toutes les catégories
        $categories = Categorie::get();

        return view('boutique', [
            'topventes' => $topvente,
            'articles' => $articles,
            'categories'=>$categories,
        ]);
    
    }

    public function sort(){
        //Récupère les 3 articles les plus vendus
        $topvente = Article::get()
        ->sortByDesc('nbr_ventes_article')
        ->take(3);
        
        //Récupère toutes les catégories
        $categories = Categorie::get();

        //Lorsque l'on choisi de trier les articles
        if(isset($_POST['sort']))
        {
            //Récupère tous les articles
            $articles = DB::connection('mysql')->table('articles')
            ->join('correspond','correspond.id_article','articles.id_article')
            ->join('categorie','categorie.id_categorie','correspond.id_categorie')
            ->get();

            //Si aucune catégorie n'est choisie
            if($_POST['category_sort']==null){
            //trier par ordre croissant    
            if($_POST['price_sort']=="Croissant"){
                $articles = Article::OrderBy('prix_article', 'asc')->get();
                }
            //trier par ordre decroissant
            else if ($_POST['price_sort']=="Decroissant"){
                $articles = Article::OrderBy('prix_article', 'desc')->get();
                }
            //Aucun tri effectué car aucune option choisie 
            else if ($_POST['price_sort']==""){    
                $articles = Article::get();

            }
            }

            //Si une catégorie est choisie
            else if($_POST['category_sort']==!null){
            //On récupère la catégorie
            foreach($categories as $categorie){
                if($_POST['category_sort']==$categorie->nom_categorie){
                    $categoriechoisie=$categorie->id_categorie;
                    
                    //trier uniquement par catégorie
                    $articles = DB::connection('mysql')->table('articles')
                    ->join('correspond','correspond.id_article','articles.id_article')
                    ->join('categorie','categorie.id_categorie','correspond.id_categorie')
                    ->where('correspond.id_categorie', '=', $categoriechoisie)
                    ->get();

                    //trier par catégorie et par ordre croissant
                    if($_POST['price_sort']=="Croissant"){
                        $articles = DB::connection('mysql')->table('articles')
                        ->join('correspond','correspond.id_article','articles.id_article')
                        ->join('categorie','categorie.id_categorie','correspond.id_categorie')
                        ->where('correspond.id_categorie', '=', $categoriechoisie)
                        ->OrderBy('prix_article', 'asc')
                        ->get();
                    }
                    //trier par catégorie et par ordre décroissant
                    else if ($_POST['price_sort']=="Decroissant"){
                        $articles = DB::connection('mysql')->table('articles')
                        ->join('correspond','correspond.id_article','articles.id_article')
                        ->join('categorie','categorie.id_categorie','correspond.id_categorie')
                        ->where('correspond.id_categorie', '=', $categoriechoisie)
                        ->OrderBy('prix_article', 'desc')
                        ->get();                        
                    }
                }
            }
            }
            return view('boutique', [
                'topventes' => $topvente,
                'articles' => $articles,
                'categories'=>$categories,
            ]);
        }
    }

    public function addbasket(){
        if(isset($_POST['add_basket']))
        {
            //On récupère l'article choisi, la quantité voulue, l'id de l'utilisateur connecté, ainsi que son panier
            $id_article=$_POST['id_article'];
            $quantite=$_POST['number'];
            $id_user = Session::get('id');
            $commandes = DB::connection('mysql')->table('users')
            ->join('achete','achete.id_users','users.id_users')
            ->join('commande','commande.id_commande','achete.id_commande')
            ->where('users.id_users',$id_user)
            ->where('commande.achevement_commande',0)
            ->get();

            //On vérifie que l'article n'est pas déjà dans le panier
            foreach($commandes as $commande)
            {
                $existants=Contient::where('id_article', '=', $id_article)
                ->where('id_commande', '=', $commande->id_commande)
                ->get();
                $count=0;
                
                foreach($existants as $existant)
                {
                    $count++;
                }
            //S'il ne l'est pas, on l'ajoute
                if($count==0)
                {
                    $contient=new Contient;
                    $contient->id_article=$id_article;
                    $contient->id_commande=$commande->id_commande;
                    $contient->quantite=$quantite;
                    $contient->save();
                }
            }
        }
        return redirect('boutique');
    }

    public function deletearticle(){
        if(isset($_POST['supprimer']))
        {
            //On récupère l'id de la boutique, et on supprime tous les enregistrements contenant cet id dans la bdd
            $id_article=$_POST['id_article'];
            Correspond::where(['id_article'=>$id_article])->delete();
            Contient::where(['id_article'=>$id_article])->delete();
            Article::where(['id_article'=>$id_article])->delete();
        }
        return redirect('boutique');
    }

    public function addcategory(){
        if(isset($_POST['add_category']))
        {
            //On créé une catégorie
            $categorie=$_POST['newcategory'];
            Categorie::create(['nom_categorie'=>$categorie]);
        }
        return redirect('boutique');
    }

    public function createarticle(){
        if(isset($_POST['add_article']))
        {
            //On récupère les infos de l'article
            $nom_article=$_POST['nom_article'];
            $description_article=$_POST['description_article'];
            $prix_article=$_POST['prix_article'];
            $image_article=$_POST['image_article'];
            $categorie_article=$_POST['categorie_article'];

            //On créé l'article
            Article::create(['nom_article'=>$nom_article, 'description_article'=>$description_article, 'prix_article'=>$prix_article, 'image_article'=>$image_article, 'nbr_ventes_article'=>0, 'stock_article'=>0]);
            
            $newArticleID=0;

            $articleIDs=DB::table('articles')
            ->OrderBy('id_article','asc')
            ->get();

            $categorieIDs=Categorie::where('nom_categorie', '=', $categorie_article)->get();

            //On récupère l'id de l'article créé
            foreach($articleIDs as $articleID){
            $newArticleID=$articleID->id_article;
            }

            //On y associe la bonne catégorie
            foreach($categorieIDs as $categorieID)
            {
                Correspond::create(['id_article'=>$newArticleID, 'id_categorie'=>$categorieID->id_categorie]);
            }
        }
        return redirect('boutique');
    }

}