#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        id_users     Int NOT NULL ,
        nom_users    Varchar (50) NOT NULL ,
        prenom_users Varchar (50) NOT NULL ,
        mail_users   Varchar (50) NOT NULL ,
        mdp_users    Varchar (50) NOT NULL
	,CONSTRAINT Users_PK PRIMARY KEY (id_users)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: photos_event
#------------------------------------------------------------

CREATE TABLE photos_event(
        id_photos     Int  Auto_increment  NOT NULL ,
        chemin_photos Varchar (100) NOT NULL ,
        id_users      Int NOT NULL
	,CONSTRAINT photos_event_PK PRIMARY KEY (id_photos)

	,CONSTRAINT photos_event_Users_FK FOREIGN KEY (id_users) REFERENCES Users(id_users)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: comment_photos
#------------------------------------------------------------

CREATE TABLE comment_photos(
        id_comm   Int  Auto_increment  NOT NULL ,
        comment   Text NOT NULL ,
        id_photos Int NOT NULL ,
        id_users  Int NOT NULL
	,CONSTRAINT comment_photos_PK PRIMARY KEY (id_comm)

	,CONSTRAINT comment_photos_photos_event_FK FOREIGN KEY (id_photos) REFERENCES photos_event(id_photos)
	,CONSTRAINT comment_photos_Users0_FK FOREIGN KEY (id_users) REFERENCES Users(id_users)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: idee
#------------------------------------------------------------

CREATE TABLE idee(
        id_idee          Int  Auto_increment  NOT NULL ,
        titre_idee       Varchar (50) NOT NULL ,
        description_idee Text NOT NULL ,
        id_users         Int NOT NULL
	,CONSTRAINT idee_PK PRIMARY KEY (id_idee)

	,CONSTRAINT idee_Users_FK FOREIGN KEY (id_users) REFERENCES Users(id_users)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: articles
#------------------------------------------------------------

CREATE TABLE articles(
        id_article          Int  Auto_increment  NOT NULL ,
        nom_article         Varchar (50) NOT NULL ,
        prix_article        Float NOT NULL ,
        description_article Text NOT NULL ,
        nbr_ventes_article  Int NOT NULL ,
        stock_article       Int NOT NULL ,
        image_article       Varchar (255) NOT NULL
	,CONSTRAINT articles_PK PRIMARY KEY (id_article)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commande
#------------------------------------------------------------

CREATE TABLE commande(
        id_commande         Int  Auto_increment  NOT NULL ,
        achevement_commande Bool NOT NULL
	,CONSTRAINT commande_PK PRIMARY KEY (id_commande)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
        id_categorie  Int  Auto_increment  NOT NULL ,
        nom_categorie Varchar (50) NOT NULL
	,CONSTRAINT categorie_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: recurrence
#------------------------------------------------------------

CREATE TABLE recurrence(
        id_recurrence    Int  Auto_increment  NOT NULL ,
        event_recurrence Varchar (50) NOT NULL
	,CONSTRAINT recurrence_PK PRIMARY KEY (id_recurrence)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: events
#------------------------------------------------------------

CREATE TABLE events(
        id_events              Int  Auto_increment  NOT NULL ,
        nom_events             Varchar (50) NOT NULL ,
        description_events     Text NOT NULL ,
        image_events           Varchar (100) NOT NULL ,
        nbrparticipants_events Int NOT NULL ,
        prix_events            Float NOT NULL ,
        date_events            Date NOT NULL ,
        id_recurrence          Int
	,CONSTRAINT events_PK PRIMARY KEY (id_events)

	,CONSTRAINT events_recurrence_FK FOREIGN KEY (id_recurrence) REFERENCES recurrence(id_recurrence)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participe
#------------------------------------------------------------

CREATE TABLE participe(
        id_users  Int NOT NULL ,
        id_events Int NOT NULL
	,CONSTRAINT participe_PK PRIMARY KEY (id_users,id_events)

	,CONSTRAINT participe_Users_FK FOREIGN KEY (id_users) REFERENCES Users(id_users)
	,CONSTRAINT participe_events0_FK FOREIGN KEY (id_events) REFERENCES events(id_events)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: représente
#------------------------------------------------------------

CREATE TABLE represente(
        id_photos Int NOT NULL ,
        id_events Int NOT NULL
	,CONSTRAINT represente_PK PRIMARY KEY (id_photos,id_events)

	,CONSTRAINT represente_photos_event_FK FOREIGN KEY (id_photos) REFERENCES photos_event(id_photos)
	,CONSTRAINT represente_events0_FK FOREIGN KEY (id_events) REFERENCES events(id_events)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: interagit
#------------------------------------------------------------

CREATE TABLE interagit(
        id_photos Int NOT NULL ,
        id_users  Int NOT NULL
	,CONSTRAINT interagit_PK PRIMARY KEY (id_photos,id_users)

	,CONSTRAINT interagit_photos_event_FK FOREIGN KEY (id_photos) REFERENCES photos_event(id_photos)
	,CONSTRAINT interagit_Users0_FK FOREIGN KEY (id_users) REFERENCES Users(id_users)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: inspire
#------------------------------------------------------------

CREATE TABLE inspire(
        id_events Int NOT NULL ,
        id_idee   Int NOT NULL
	,CONSTRAINT inspire_PK PRIMARY KEY (id_events,id_idee)

	,CONSTRAINT inspire_events_FK FOREIGN KEY (id_events) REFERENCES events(id_events)
	,CONSTRAINT inspire_idee0_FK FOREIGN KEY (id_idee) REFERENCES idee(id_idee)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: achete
#------------------------------------------------------------

CREATE TABLE achete(
        id_commande Int NOT NULL ,
        id_users    Int NOT NULL
	,CONSTRAINT achete_PK PRIMARY KEY (id_commande,id_users)

	,CONSTRAINT achete_commande_FK FOREIGN KEY (id_commande) REFERENCES commande(id_commande)
	,CONSTRAINT achete_Users0_FK FOREIGN KEY (id_users) REFERENCES Users(id_users)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contient
#------------------------------------------------------------

CREATE TABLE contient(
        id_article  Int NOT NULL ,
        id_commande Int NOT NULL ,
        quantite    Int NOT NULL
	,CONSTRAINT contient_PK PRIMARY KEY (id_article,id_commande)

	,CONSTRAINT contient_articles_FK FOREIGN KEY (id_article) REFERENCES articles(id_article)
	,CONSTRAINT contient_commande0_FK FOREIGN KEY (id_commande) REFERENCES commande(id_commande)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: correspond
#------------------------------------------------------------

CREATE TABLE correspond(
        id_categorie Int NOT NULL ,
        id_article   Int NOT NULL
	,CONSTRAINT correspond_PK PRIMARY KEY (id_categorie,id_article)

	,CONSTRAINT correspond_categorie_FK FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie)
	,CONSTRAINT correspond_articles0_FK FOREIGN KEY (id_article) REFERENCES articles(id_article)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aime
#------------------------------------------------------------

CREATE TABLE aime(
        id_idee  Int NOT NULL ,
        id_users Int NOT NULL
	,CONSTRAINT aime_PK PRIMARY KEY (id_idee,id_users)

	,CONSTRAINT aime_idee_FK FOREIGN KEY (id_idee) REFERENCES idee(id_idee)
	,CONSTRAINT aime_Users0_FK FOREIGN KEY (id_users) REFERENCES Users(id_users)
)ENGINE=InnoDB;

