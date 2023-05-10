<?php
class evenement{
    private  $id_evenemment = null;
    private  $nom_evenemment = null ;
    private   DateTime $date_debut;
    private   DateTime $date_fin;
    private  $prix = null ; 
    private  $description= null ;
    private  $localisation  = null;

    public function __construct($id_evenemment=NULL,$nom_evenemment,$date_debut,$date_fin,$prix , $description,$localisation)
    {
        $this->id_evenemment= $id_evenemment ; 
        $this->nom_evenemment= $nom_evenemment ; 
        $this->date_debut= $date_debut ;
        $this->date_fin= $date_fin ;
        $this->prix = $prix;
        $this->description= $description ;
        $this->localisation= $localisation ;
        
    }
    public function getid_evenemment(){
        return $this->id_evenemment ;
    }
    
    public function getnom_evenemment(){
        return $this->nom_evenemment ;
    }
    public function setnom_evenemment($nom_evenemment){
        $this->nom_evenemment= $nom_evenemment;
        return $this;
    }
    public function getdate_debut(){
        return $this->date_debut ;
    }
    public function setdate_debut($date_debut){
        $this->date_debut= $date_debut ;
        return $this ;
    }
     public function getdate_fin(){
        return $this->date_fin ;
     }
    public function setdate_fin($date_fin){
        $this->date_fin= $date_fin ;
        return $this ;
     }

     public function getprix (){
        return $this->prix  ; 
     }
    public function setprix ($prix){
        $this->prix = $prix  ;
        return $this ; 
     }

    public function getdescription(){
        return $this->description ; 
     }
    public function setdescription($description){
        $this->description= $description ;
        return $this ; 
     }
    
     public function getlocalisation(){
        return $this->localisation ; 
     }
    public function setlocalisation($localisation){
        $this->localisation= $localisation ;
        return $this ; 
     }    
}
?>