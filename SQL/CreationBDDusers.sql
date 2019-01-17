#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Centre
#------------------------------------------------------------

CREATE TABLE Centre(
        id_centre   Int  Auto_increment  NOT NULL ,
        lieu_centre Varchar (50) NOT NULL
	,CONSTRAINT Centre_PK PRIMARY KEY (id_centre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Droits
#------------------------------------------------------------

CREATE TABLE Droits(
        id_role  Int  Auto_increment  NOT NULL ,
        nom_role Varchar (50) NOT NULL
	,CONSTRAINT Droits_PK PRIMARY KEY (id_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        id_users     Int  Auto_increment  NOT NULL ,
        nom_users    Varchar (50) NOT NULL ,
        prenom_users Varchar (50) NOT NULL ,
        id_login     Int NOT NULL ,
        id_role      Int NOT NULL ,
        id_centre    Int NOT NULL
	,CONSTRAINT Users_PK PRIMARY KEY (id_users)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Identifiants
#------------------------------------------------------------

CREATE TABLE Identifiants(
        id_login   Int  Auto_increment  NOT NULL ,
        mail_users Varchar (50) NOT NULL ,
        mdp_users  Char (40) NOT NULL ,
        id_users   Int NOT NULL
	,CONSTRAINT Identifiants_PK PRIMARY KEY (id_login)
)ENGINE=InnoDB;




ALTER TABLE Users
	ADD CONSTRAINT Users_Identifiants0_FK
	FOREIGN KEY (id_login)
	REFERENCES Identifiants(id_login);

ALTER TABLE Users
	ADD CONSTRAINT Users_Droits1_FK
	FOREIGN KEY (id_role)
	REFERENCES Droits(id_role);

ALTER TABLE Users
	ADD CONSTRAINT Users_Centre2_FK
	FOREIGN KEY (id_centre)
	REFERENCES Centre(id_centre);

ALTER TABLE Users 
	ADD CONSTRAINT Users_Identifiants0_AK 
	UNIQUE (id_login);

ALTER TABLE Identifiants
	ADD CONSTRAINT Identifiants_Users0_FK
	FOREIGN KEY (id_users)
	REFERENCES Users(id_users);

ALTER TABLE Identifiants 
	ADD CONSTRAINT Identifiants_Users0_AK 
	UNIQUE (id_users);
