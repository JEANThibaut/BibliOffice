<?php
// Classe représetant les livres stockés en base de données
class Book {

    protected ?int $id;
    protected string $title;
    protected string $writter;
    protected string $release_date;
    protected string $category;
    protected string $book_description;
    protected string $editor;
    protected string $loaning_status;
    protected ?string $loaning_date;
    protected ?int $customer_id;



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

    public function setId(?int $id){
         $this->id=$id;
    }
    public function getId(){
        return htmlspecialchars($this->id);
    }


    public function setTitle(string $title){
        $this->title=$title;
    }
    public function getTitle(){
        return htmlspecialchars($this->title);
    }


    public function setWritter(string $writter){
        $this->writter=$writter;
    }
    public function getWritter(){
        return htmlspecialchars($this->writter);
    }


    public function setRelease_date(string $release_date){
        $this->release_date=$release_date;
    }
    public function getRelease_date(){
        return htmlspecialchars($this->release_date);
    }


    
    public function setCategory(string $category){
        $this->category=$category;
    }
    public function getCategory(){
        return htmlspecialchars($this->category);
    }



    public function setBook_description(string $book_description){
        $this->book_description=$book_description;
    }
    public function getBook_description(){
        return htmlspecialchars($this->book_description);
    }


    public function setEditor(string $editor){
        $this->editor=$editor;
    }
    public function getEditor(){
        return htmlspecialchars($this->editor);
    }


    public function setLoaning_status(string $loaning_status){
        $this->loaning_status=$loaning_status;
    }
    public function getLoaning_status(){
        return htmlspecialchars($this->loaning_status);
    }


    public function setLoaning_date(?string $loaning_date){
        $this->loaning_date=$loaning_date;
    }
    public function getLoaning_date(){
        return htmlspecialchars($this->loaning_date);
    }


    public function setCustomer_id(?int $customer_id){
        $this->customer_id=$customer_id;
    }

    public function getCustomer_id(){
        return htmlspecialchars($this->customer_id);
    }
}













