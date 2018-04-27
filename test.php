<!DOCTYPE html>
<html>
    <head>
        <title>Livre</title>
        <link rel="stylesheet" type="text/css" href="test.css">
    </head>
    <body>
    	
       
<?php

      $book1 = array(
        'price' => 27,
        'name' => 'Harry Potter',
        'note' => 3,
        'prime' => true
      );

      $book2 = array(
        'price' => 15,
        'name' => 'Titanic',
        'note' => 4,
        'prime' => false
      );

     $book3 = array(
        'price' => 10,
        'name' => 'Les hauts de hurlevents',
        'note' => 5,
        'prime' => true

      );

     $book4 = array(
        'price' => 13,
        'name' => 'Divergente',
        'note' => 2,
        'prime' => false

      );

     $book5 = array(
        'price' => 9.99,
        'name' => 'Peter pan',
        'note' => 3,
        'prime' => true

      );

     $book6 = array(
        'price' => 25,
        'name' => 'Robin des bois',
        'note' => 3,
        'prime' => true

      );

     $book7 = array(
        'price' => 27,
        'name' => 'Le livre de la jungle',
        'note' => 3,
        'prime' => false

      );

     $book8 = array(
        'price' => 22,
        'name' => 'Moby dick',
        'note' => 1,
        'prime' => false

      );

     $book9 = array(
        'price' => 13,
        'name' => 'La vie des chats',
        'note' => 4,
        'prime' => true

      );

     $book10 = array(
        'price' => 30,
        'name' => 'J\'aimerai',
        'note' => 5,
        'prime' => false

      );

      $books = array($book1, $book2, $book3, $book4, $book5, $book6, $book7, $book8, $book9, $book10);

      foreach ($books as $livre) {
      	echo "<div class = 'livres'>";
      	echo "<ul>";
      	echo "<li>" ."".$livre['name']. '</li>';
      	echo "<li>" ."".$livre['price']. '</li>';
      	echo "<li>" ."".$livre['note']. '</li>';
      	;

		if ($livre['prime'] == true) {
          
          echo '<li>Prime </li>'; 

        }
        else {
          echo '<li>Pas prime </li>';
        }
        echo "</ul>";
          echo "</div>";
      }
      
      

     

    ?>

    </body>
</html>



