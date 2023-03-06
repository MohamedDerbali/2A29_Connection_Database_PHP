<?php 
class user{
    private int $id;
    private string $nom;
    private string $prenom;
    private int $age;
    public function __construct($nom = "", $prenom= "", $age= 0){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getAge(){
        return $this->age;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setAge($age){
        $this->age = $age;
    }
}

?>