<?php
class organisation{
    private  $id_organisation = null;
    private  $organisateur = null ;
    private  $id_evenemmet = null ; 

    public function __construct($id_organisation,$organisateur,$id_evenemmet)
    {
        $this->id_organisation= $id_organisation ; 
        $this->organisateur= $organisateur ; 
        $this->id_evenemmet= $id_evenemmet ;
        
    }
    public function getid_organisation(){
        return $this->id_organisation ;
    }
    
    public function getorganisateur(){
        return $this->organisateur ;
    }
    public function setorganisateur($organisateur){
        $this->organisateur= $organisateur;
        return $this;
    }
    public function getid_evenemmet(){
        return $this->id_evenemmet ;
    }
    public function setid_evenemmet($id_evenemmet){
        $this->id_evenemmet= $id_evenemmet ;
        return $this ;
    }
     
}
?>