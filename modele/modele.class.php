<?php

class Modele {
    private $unPDO ; // php data objet

    public function __construct(){
        try{
            $url = "mysql:host=localhost;dbname=scolarite_JV_iris_24";
            $user = "root";
            $mdp ="";
            // instanciation de la classe PDO
            $this->unPDO = new PDO($url,$user,$mdp);
        }
        catch(PDOException $exp){
            echo "Erreur connexion BDD : ".$exp->getMessage();
        }
    }
    /******************* Gestion des classes *****************/
    public function insertClasse ($tab){
        $requete="Insert into classe values(null,:nom,:salle,:diplome);";
        $select = $this->unPDO->prepare ($requete);
        $donnees=array(
            ":nom"=>$tab["nom"],
            ":salle"=>$tab["salle"],
            ":diplome"=>$tab["diplome"]
        );
        $select->execute($donnees);
    }
    public function selectAllClasses() {
        $requete ="select * from classe ;";
        $select = $this->unPDO->prepare ($requete);
        $select->execute();
        return $select->fetchAll();

    }
    public function deleteClasse($idclasse) {
        $requete ="delete from classe where idclasse=:idclasse ;";
        $select = $this->unPDO->prepare ($requete);
        $donnees=array(":idclasse"=>$idclasse);
        $select->execute($donnees);

    }
    public function selectWhereClasse($idclasse){
        $requete="select * from classe where idclasse=:idclasse;";
        $select = $this->unPDO->prepare ($requete);
        $donnees=array(":idclasse"=>$idclasse);
        $select->execute($donnees);
        return $select->fetch(); //un seul résultat

    }
    public function updateClasse($tab){
        $requete="update classe set nom=:nom, salle=:salle, diplome=:diplome where idclasse=:idclasse;";
        $donnees=array(
            ":nom"=>$tab["nom"],
            ":salle"=>$tab["salle"],
            ":diplome"=>$tab["diplome"],
            ":idclasse"=>$tab["idclasse"]
        );
        $select = $this->unPDO->prepare ($requete);
        $select->execute($donnees);

    }

    public function selectLikeClasses($filtre){
        $requete ="select * from classe where nom like :filtre or salle like :filtre or diplome like :filtre ;";
        $select = $this->unPDO->prepare ($requete);
        $donnees=array(":filtre"=>"%".$filtre."%");
        $select->execute($donnees);
        return $select->fetchAll();
    }
 

/******************* Gestion des Professeurs *****************/
    public function insertProfesseur ($tab){
        $requete="Insert into professeur values(null,:nom,:prenom, :email, :diplome);";
        $select = $this->unPDO->prepare ($requete);
        $donnees=array(
            ":nom"=>$tab["nom"],
            ":prenom"=>$tab["prenom"],
            ":email"=>$tab["email"],
            ":diplome"=>$tab["diplome"]
        );
        $select->execute($donnees);
    }
    public function selectAllProfesseurs() {
        $requete ="select * from professeur ;";
        $select = $this->unPDO->prepare ($requete);
        $select->execute();
        return $select->fetchAll();

    }
    public function deleteProfesseur($idprofesseur) {
        $requete ="delete from professeur where idprofesseur=:idprofesseur ;";
        $select = $this->unPDO->prepare ($requete);
        $donnees=array(":idprofesseur"=>$idprofesseur);
        $select->execute($donnees);

    }
    public function selectWhereProfesseur($idprofesseur){
        $requete="select * from professeur where idprofesseur=:idprofesseur;";
        $select = $this->unPDO->prepare ($requete);
        $donnees=array(":idprofesseur"=>$idprofesseur);
        $select->execute($donnees);
        return $select->fetch(); //un seul résultat

    }
    public function updateProfesseur($tab){
        $requete="update professeur set nom=:nom, prenom=:prenom, diplome=:diplome where idprofesseur=:idprofesseur;";
        $donnees=array(
            ":nom"=>$tab["nom"],
            ":prenom"=>$tab["prenom"],
            ":diplome"=>$tab["diplome"],
            ":idprofesseur"=>$tab["idprofesseur"]
        );
        $select = $this->unPDO->prepare ($requete);
        $select->execute($donnees);

    }

    public function selectLikeProfesseurs($filtre){
        $requete ="select * from professeur where nom like :filtre or prenom like :filtre or diplome like :filtre ;";
        $select = $this->unPDO->prepare ($requete);
        $donnees=array(":filtre"=>"%".$filtre."%");
        $select->execute($donnees);
        return $select->fetchAll();
    }
}
?>