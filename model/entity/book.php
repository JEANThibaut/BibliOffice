<?php
// Classe représetant les livres stockés en base de données
class Book {

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


    public function setBirth_date($birth_date){
        $this->$birth_date;
    }
    public function getBirth_date(){
        return $this->birth_date;
    }


    












}
