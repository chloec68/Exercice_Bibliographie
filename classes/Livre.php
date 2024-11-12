<?php

class Livre{
    private string $titre;
    private int $nombrePages;
    private string $parution;
    private float $prix;
    private Auteur $auteur; 
   
    public function __construct(string $titre,string $nombrePages,string $parution,string $prix ,Auteur $auteur){
        $this->titre=$titre;
        $this->nombrePages=$nombrePages;
        $this->parution=$parution;
        $this->prix=$prix;
        $this->auteur=$auteur;
        $this->auteur->addLivre($this);
    }
    
    public function getTitre():string{
        return $this->titre;
    }

    public function setTitre($titre):string{
        $this->titre =$titre;
    }

    public function getnombrePages():string{
        return $this->nombrePages;
    }

    public function setNombrePages($nombrePages):string{
        $this->nombrePages = $nombrePages;
    }

    public function getParution():string{
        return $this->parution;
        }
    
    public function setParution($parution):string{
        $this->parution=$parution;
    }
    
    public function getPrix():string{
        return $this->prix;
    }

    public function setPrix($prix):string{
        $this->prix=$prix;
    }

    public function getAuteur():Auteur{
        return $this->auteur;
    }

    public function setAuteur($auteur){
        $this->auteur=$auteur;
        return $this;
    }

    public function __toString():string{
        return $this->titre." (".$this->parution.") : ".$this->nombrePages." pages / ".$this->prix." euros";
    }
}





