<?php

 abstract class AbstractBook
 {

    /**
     * @var int
     */
     protected $countPages;

     /**
      * @var string
      */
     protected $isbn;

     /**
      * @var string
      */
     protected $title;

     //Une classe abstraite ne peut pas être représenter par quelque chose de concret :)

     public function getCountPages()
     {
         return $this->countPages;
     }
    
     public function getIsbn()
     {
         return $this->isbn;
     }
    
     public function getTitle()
     {
         return $this->title;
     }
    
     public function setCountPages($countPages)
     {
         $this->countPages = $countPages;
     }
    
     public function setIsbn($isbn)
     {
         $this->isbn = $isbn;
     }
    
     public function setTitle($title)
     {
         $this->title = $title;
     }
     public function __construct()
     {
         $this-> setCountPages(100);
         $this-> setIsbn('');
         $this-> setTitle('');
     }
 }
