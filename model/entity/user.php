<?php
// Classe représetant les utilisateurs stockés en base de données
class User {

    protected int $id;
    protected string $firstname;
    protected string $lastname;
    protected string $birth_date;
    protected string $mail;
    protected int $phone;
    protected string $postal_code;
    protected string $city;

    public function __construct($data) {
        if($data){
            //Hydrateur auto, permet de ne pas appeler les setter à la main
            foreach($data as $key=>$value){
                $setter = "set" . ucfirst($key);
                if(method_exists($this,$setter)){
                    $this->$setter($value);
                }
            }
        }    
    }

    public function setId(int $id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }


    public function setFirstname($firstname){
        $this->firstname=$firstname;
    }
    public function getFirstname(){
        return $this->firstname;
    }


    public function setLastname($lastname){
        $this->lastname=$lastname;
    }
    public function getLastname(){
        return $this->lastname;
    }


    public function setBirth_date($birth_date){
        $this->birth_date=$birth_date;
    }
    public function getBirth_date(){
        return $this->birth_date;
    }

    public function setMail($mail){
        $this->mail=$mail;
    }
    public function getMail(){
        return $this->mail;
    }


    public function setPhone($phone){
        $this->phone=$phone;
    }
    public function getPhone(){
        return $this->phone;
    }

    public function setPostal_code($postal_code){
        $this->postal_code=$postal_code;
    }
    public function getPostal_code(){
        return $this->postal_code;
    }


    public function setCity($city){
        $this->city=$city;
    }
    public function getCity(){
        return $this->city;
    }
}
