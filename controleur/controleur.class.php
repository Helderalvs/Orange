<?php

    require_once ("modele/modele.class.php");
        class Controleur {
            private $unModele;
        
        public function __construct (){
            // instanciation de la classe Modele
            $this->unModele = new Modele();
        }
        /************* Gestion des classes ***************/
        public function insertClasse($tab){
            //plus tard : controle des données avant insertion
            $this->unModele->insertclasse($tab);
        }
        public function selectAllClasses(){
            //plus tard : controle des données avant insertion
            return $this->unModele->selectAllClasses();
        }
        public function selectLikeClasses($filtre){
            //plus tard : controle des données avant insertion
            return $this->unModele->selectLikeClasses($filtre);
        }
        public function deleteClasse($idclasse){
            $this->unModele->deleteClasse($idclasse);
        }
        public function selectWhereClasse ($idclasse){
            return $this->unModele->selectWhereClasse($idclasse);
        }
        public function updateClasse ($tab){
            $this->unModele->updateClasse($tab);
        }

        /************* Gestion des Professeurs ***************/
        public function insertProfesseur($tab){
            //plus tard : controle des données avant insertion
            $this->unModele->insertProfesseur($tab);
        }
        public function selectAllProfesseurs(){
            //plus tard : controle des données avant insertion
            return $this->unModele->selectAllProfesseurs();
        }
        public function selectLikeProfesseurs($filtre){
            //plus tard : controle des données avant insertion
            return $this->unModele->selectLikeProfesseurs($filtre);
        }
        public function deleteProfesseur($idProfesseur){
            $this->unModele->deleteProfesseur($idProfesseur);
        }
        public function selectWhereProfesseur ($idProfesseur){
            return $this->unModele->selectWhereProfesseur($idProfesseur);
        }
        public function updateProfesseur($tab){
            $this->unModele->updateProfesseur($tab);
        }

        
        /**************** Securite des données **************/
        public function testVide($tab){
            $vide = false;
            foreach($tab as $valeur){
                if ($valeur == ""){
                    $vide = true;
                    break;
                }
            }
            return $vide;
        }
    }
?>
    