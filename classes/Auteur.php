<?php

class Auteur{
    private string $prenom;
    private string $nom;
    private array $livres;

    public function __construct(string $prenom, string $nom){
    $this->prenom=$prenom;
    $this->nom=$nom;
    $this->livres=[];

    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
         $this->prenom=$prenom;
    }


    public function getNom(){
       return $this->nom;
    }

    public function setNom($nom){
        $this->nom=$nom;
    }

    public function getLivres(){
        return $this->livres;
    }

    public function setLivres($livres){
        $this->livres=$livres;
    }

    public function addLivre(Livre $livre){
        $this->livres[]=$livre;
        // OU array_push($this->livres,$livre);
    }

    public function afficherBibliographie(){
        $result="<h1>Livres de $this</h1>";

        foreach($this->livres as $livre){
            $result.=$livre."<br>";
        }
        $result.="</ul>";
        return $result;

    }

    public function __toString(){
        return $this->prenom." ".$this->nom;
    }

}

