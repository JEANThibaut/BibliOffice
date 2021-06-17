<?php
// Classe représetant les utilisateurs stockés en base de données
class Customer {

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
        return htmlspecialchars($this->id);
    }


    public function setFirstname(string $firstname){
        $this->firstname=$firstname;
    }
    public function getFirstname(){
        return htmlspecialchars($this->firstname);
    }


    public function setLastname(string $lastname){
        $this->lastname=$lastname;
    }
    public function getLastname(){
        return htmlspecialchars($this->lastname);
    }


    public function setBirth_date(string $birth_date){
        $this->birth_date=$birth_date;
    }
    public function getBirth_date(){
        return htmlspecialchars($this->birth_date);
    }

    public function setMail(string $mail){
        $this->mail=$mail;
    }
    public function getMail(){
        return htmlspecialchars($this->mail);
    }


    public function setPhone(int $phone){
        $this->phone=$phone;
    }
    public function getPhone(){
        return htmlspecialchars($this->phone);
    }

    public function setPostal_code(string $postal_code){
        $this->postal_code=$postal_code;
    }
    public function getPostal_code(){
        return htmlspecialchars($this->postal_code);
    }


    public function setCity(string $city){
        $this->city=$city;
    }
    public function getCity(){
        return htmlspecialchars($this->city);
    }
}

?>