<?php
include 'classes/AbstractBook.php';
include 'classes/Book.php';
include 'classes/ComicBook.php';

$comicBook = new ComicBook();
$book = new Book();


$comicBook->setCountPages(152);
$comicBook->setIsbn('9791026817710');
$comicBook->setTitle('La chute de Tír na Nóg');

$book->setCountPages(464);
$book->setIsbn('9782940426379');
$book->setTitle('Caliban et la sorcière');

echo $book->getTitle().'(' .$book->getIsbn(). ') :' .$book->getCountPages(). '<br/>' ;
echo $comicBook->getTitle().'(' .$comicBook->getIsbn(). ') :' .$comicBook->getCountPages(). '<br/>' ;
