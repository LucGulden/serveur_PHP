#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: centre
#------------------------------------------------------------

CREATE TABLE centre(
        id_centre   Int  Auto_increment  NOT NULL ,
        lieu_centre Varchar (50) NOT NULL
	,CONSTRAINT centre_PK PRIMARY KEY (id_centre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: role
#------------------------------------------------------------

CREATE TABLE role(
        id_role  Int  Auto_increment  NOT NULL ,
        nom_role Varchar (50) NOT NULL
	,CONSTRAINT role_PK PRIMARY KEY (id_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id_users     Int  Auto_increment  NOT NULL ,
        nom_users    Varchar (50) NOT NULL ,
        prenom_users Varchar (50) NOT NULL ,
        mail_user    Varchar (50) NOT NULL ,
        mdp_user     Varchar (50) NOT NULL ,
        id_role      Int NOT NULL ,
        id_centre    Int NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id_users)

	,CONSTRAINT users_role_FK FOREIGN KEY (id_role) REFERENCES role(id_role)
	,CONSTRAINT users_centre0_FK FOREIGN KEY (id_centre) REFERENCES centre(id_centre)
)ENGINE=InnoDB;
