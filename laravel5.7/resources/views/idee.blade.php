@extends('layout')

@section('content')
  <section class="mbr-section form1 cid-rfRVRaDa1Q" id="form1-c">
    <div class="titrepage">
                <h1>Boite à idées</h1>
                <h2>Proposez nous des idées d'évènements</h2>
    </div>
	
	<div id = "formulaire">
   		<p>
		   <label for="titreidee">Titre de votre idée :</label>
       	   <input type="text" name="titreidee" id="titreidee" />
       
       <br />
       		<label for="descriptionidee">Description de votre idée:</label>
       		<textarea name="descriptionidee" id="descriptionidee"></textarea>
		   </p>
		   <p id="soumettre"> <button type="submit" onclick = "soumettreIdee()">Soumettre l'idée!</button> </p>
    </div>

</section>

<section id = "sectionIdee">
    <div class="container-fluid border border-warning rounded mb-0">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula vehicula sapien, in accumsan ipsum gravida a. Integer scelerisque, felis sed ultricies lobortis, justo quam aliquet est, id pretium ante odio eu orci. In sit amet mauris et risus suscipit vehicula vel a justo. Sed velit tellus, faucibus in magna ac, faucibus posuere enim. Mauris nec tortor neque. Mauris non nulla urna. Maecenas ut risus ac odio tincidunt imperdiet pharetra quis nunc. Nunc in laoreet libero. Fusce lobortis dolor sit amet ultricies sodales. Quisque laoreet massa a urna aliquet laoreet. Proin sed aliquet neque, sed ultrices massa. Vivamus aliquam lacinia eros in condimentum. Sed lobortis molestie tellus eu euismod. Fusce dignissim blandit felis, id finibus mi sollicitudin eu. Aenean venenatis nulla quis finibus faucibus. Duis in risus et justo maximus laoreet et ut enim.</p>
        <div class="jaime">    
        <span class="input-group-btn"><button type="submit">J'aime!</button></span>
        </div>
    </div>

</section>


<!-- GET -->
<script>

var getJSON = function(url) {
	return new Promise(function (data,err){
		var xhr = new XMLHttpRequest();
		xhr.open('GET', url, true);
		xhr.responseType = 'json';
		console.log(xhr);
		xhr.onload = function() {
			var status = xhr.status;
			if (status === 200) {
				data(xhr.response);
			} 
			else {
				err(status, xhr.response);
			}
		}
		xhr.send();
	});
};

var like = 0;
var blockIdee = "";
const getIdee= function(data){
    const taille = data.length - 1;
    for (var i = taille; i >= 0; i--) {
        getJSON('http://localhost:3000/aime/' + data[i].id_idee, function (nbLike) {
            like = nbLike[0];
        });
        console.log(like);
        blockIdee = blockIdee + "<div class='container-fluid border border-warning rounded mb-0'> <h3>" + data[i].titre_idee + "</h3> <p>" + data[i].description_idee + "</p> <div class='jaime'> <span class='input-group-btn'><button type='submit' id='" + data[i].id_idee + "' onclick='aimeIdee(this.id)'>J'aime! " + data[i].id_idee + "</button></span></div> </div>";
        document.getElementById("sectionIdee").innerHTML = blockIdee;
        
    }
};


getJSON('http://localhost:3000/idee/').then(getIdee);
</script>

<!-- POST -->
<script>
   
function soumettreIdee(){

    var datapost = {

        "titre_idee":$("#titreidee").val(),
        "description_idee":$("#descriptionidee").val()
    };

   //console.log(datapost);
    console.log(JSON.stringify(datapost));
    $.ajax({
        type: "POST",
        url: "http://localhost:3000/",
        data: JSON.stringify(datapost),
        success: function(){
            location.reload(true);
        },
        dataType: "json",
        contentType : "application/json"
    });
 }
 </script>

<!-- J'aime -->
 <script>
        
    function aimeIdee(id) {
        
        var datapost = {
            "id_idee": id,
            "id_users": 2
        };

        $.ajax({
            type: "POST",
            url: "http://localhost:3000/aime/",
            data: JSON.stringify(datapost),
            success: function(){
                // location.reload(true);
                alert("Vous avez aimé l'idée " + id);
            },
            dataType: "json",
            contentType : "application/json"
        });
    }       
 </script>
@endsection