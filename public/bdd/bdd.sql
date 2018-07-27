#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        user_id         Int  Auto_increment  NOT NULL ,
        user_nom        Varchar (255) NOT NULL ,
        user_prenom     Varchar (255) NOT NULL ,
        user_email      Varchar (255) NOT NULL ,
        user_motdepasse Varchar (255) NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (user_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: adresses
#------------------------------------------------------------

CREATE TABLE adresses(
        adresse_id      Int  Auto_increment  NOT NULL ,
        adresse_nom     Varchar (255) NOT NULL ,
        adresse_contenu Varchar (255) NOT NULL ,
        adresse_cp      Int NOT NULL ,
        adresse_ville   Varchar (255) NOT NULL ,
        adress_pays     Varchar (255) NOT NULL ,
        user_id         Int NOT NULL
	,CONSTRAINT adresses_PK PRIMARY KEY (adresse_id)

	,CONSTRAINT adresses_users_FK FOREIGN KEY (user_id) REFERENCES users(user_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: articles
#------------------------------------------------------------

CREATE TABLE articles(
        article_id    Int  Auto_increment  NOT NULL ,
        article_info  Varchar (255) NOT NULL ,
        article_photo Varchar (255) NOT NULL ,
        article_puht  Float NOT NULL
	,CONSTRAINT articles_PK PRIMARY KEY (article_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        categorie_id  Int  Auto_increment  NOT NULL ,
        categorie_nom Varchar (255) NOT NULL
	,CONSTRAINT categories_PK PRIMARY KEY (categorie_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: nuance
#------------------------------------------------------------

CREATE TABLE nuance(
        nuance_id  Int  Auto_increment  NOT NULL ,
        nuance_nom Varchar (255) NOT NULL
	,CONSTRAINT nuance_PK PRIMARY KEY (nuance_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tailles
#------------------------------------------------------------

CREATE TABLE tailles(
        taille_id          Int  Auto_increment  NOT NULL ,
        taille_largeur     Int NOT NULL ,
        taille_hauteur     Int NOT NULL ,
        taille_resolution  Int NOT NULL ,
        taille_orientation Varchar (255) NOT NULL ,
        taille_poids       Varchar (255) NOT NULL
	,CONSTRAINT tailles_PK PRIMARY KEY (taille_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: favoris
#------------------------------------------------------------

CREATE TABLE favoris(
        favoris_id Int  Auto_increment  NOT NULL ,
        user_id    Int NOT NULL ,
        article_id Int NOT NULL
	,CONSTRAINT favoris_PK PRIMARY KEY (favoris_id)

	,CONSTRAINT favoris_users_FK FOREIGN KEY (user_id) REFERENCES users(user_id)
	,CONSTRAINT favoris_articles0_FK FOREIGN KEY (article_id) REFERENCES articles(article_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commentaires
#------------------------------------------------------------

CREATE TABLE commentaires(
        commentaire_id      Int  Auto_increment  NOT NULL ,
        commentaire_contenu Varchar (255) NOT NULL
	,CONSTRAINT commentaires_PK PRIMARY KEY (commentaire_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: paniers
#------------------------------------------------------------

CREATE TABLE paniers(
        panier_id   Int  Auto_increment  NOT NULL ,
        panier_date Date NOT NULL ,
        user_id     Int NOT NULL
	,CONSTRAINT paniers_PK PRIMARY KEY (panier_id)

	,CONSTRAINT paniers_users_FK FOREIGN KEY (user_id) REFERENCES users(user_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: paniers_articles
#------------------------------------------------------------

CREATE TABLE paniers_articles(
        panier_article_id        Int  Auto_increment  NOT NULL ,
        pannier_article_quantite Int NOT NULL ,
        pannier_article_puht     Float NOT NULL ,
        panier_id                Int NOT NULL ,
        article_id               Int NOT NULL
	,CONSTRAINT paniers_articles_PK PRIMARY KEY (panier_article_id)

	,CONSTRAINT paniers_articles_paniers_FK FOREIGN KEY (panier_id) REFERENCES paniers(panier_id)
	,CONSTRAINT paniers_articles_articles0_FK FOREIGN KEY (article_id) REFERENCES articles(article_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commandes
#------------------------------------------------------------

CREATE TABLE commandes(
        commande_id   Int  Auto_increment  NOT NULL ,
        commande_date Date NOT NULL ,
        commande_info Varchar (255) NOT NULL ,
        panier_id     Int NOT NULL
	,CONSTRAINT commandes_PK PRIMARY KEY (commande_id)

	,CONSTRAINT commandes_paniers_FK FOREIGN KEY (panier_id) REFERENCES paniers(panier_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: factures
#------------------------------------------------------------

CREATE TABLE factures(
        facture_id        Int  Auto_increment  NOT NULL ,
        facture_date      Date NOT NULL ,
        facture_paiement  Bool NOT NULL ,
        facture_montantht Float NOT NULL ,
        commande_id       Int NOT NULL
	,CONSTRAINT factures_PK PRIMARY KEY (facture_id)

	,CONSTRAINT factures_commandes_FK FOREIGN KEY (commande_id) REFERENCES commandes(commande_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: nuancer
#------------------------------------------------------------

CREATE TABLE nuancer(
        article_id Int NOT NULL ,
        nuance_id  Int NOT NULL
	,CONSTRAINT nuancer_PK PRIMARY KEY (article_id,nuance_id)

	,CONSTRAINT nuancer_articles_FK FOREIGN KEY (article_id) REFERENCES articles(article_id)
	,CONSTRAINT nuancer_nuance0_FK FOREIGN KEY (nuance_id) REFERENCES nuance(nuance_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Classer
#------------------------------------------------------------

CREATE TABLE Classer(
        categorie_id Int NOT NULL ,
        article_id   Int NOT NULL
	,CONSTRAINT Classer_PK PRIMARY KEY (categorie_id,article_id)

	,CONSTRAINT Classer_categories_FK FOREIGN KEY (categorie_id) REFERENCES categories(categorie_id)
	,CONSTRAINT Classer_articles0_FK FOREIGN KEY (article_id) REFERENCES articles(article_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: dimensionner
#------------------------------------------------------------

CREATE TABLE dimensionner(
        article_id Int NOT NULL ,
        taille_id  Int NOT NULL
	,CONSTRAINT dimensionner_PK PRIMARY KEY (article_id,taille_id)
	,CONSTRAINT dimensionner_articles_FK FOREIGN KEY (article_id) REFERENCES articles(article_id)
	,CONSTRAINT dimensionner_tailles0_FK FOREIGN KEY (taille_id) REFERENCES tailles(taille_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commenter
#------------------------------------------------------------

CREATE TABLE commenter(
        article_id     Int NOT NULL ,
        commentaire_id Int NOT NULL ,
        user_id        Int NOT NULL
	,CONSTRAINT commenter_PK PRIMARY KEY (article_id,commentaire_id,user_id)

	,CONSTRAINT commenter_articles_FK FOREIGN KEY (article_id) REFERENCES articles(article_id)
	,CONSTRAINT commenter_commentaires0_FK FOREIGN KEY (commentaire_id) REFERENCES commentaires(commentaire_id)
	,CONSTRAINT commenter_users1_FK FOREIGN KEY (user_id) REFERENCES users(user_id)
)ENGINE=InnoDB;
