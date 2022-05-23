<?php
class Article{
    // Attributs
    private $id_art;
    private $nom_art;
    private $content_art;
    // Constructor
    public function __construct($nom,$content){
        $this->nom_art = $nom;
        $this->content_art =$content;
    }
    // Getters
    public function getIdArt():int{
        return $this->id_art;
    }
    public function getNomArt():string{
        return $this->nom_art;
    }
    public function getContentArt():string{
        return $this->content_art;
    }
    // Setters
    public function setIdArt($id):void{
        $this->id_art = $id;
    }
    public function setNomArt($nom):void{
        $this->nom_art = $nom;
    }
    public function setContentArt($content):void{
        $this->content_art = $content;
    }

// Methodes
public function showAllArticle($bdd):array{
            try{
                $req = $bdd->prepare('SELECT * FROM article');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
}
?>