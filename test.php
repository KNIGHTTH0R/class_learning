<?php

require_once 'autoload.php';

//Create an instance from the child class
$user1 = new Users();
  
// Set the value of the class’ property.
// For this aim, we use a method that we created in the parent
$user1 -> setName('Sugih');
$user1 -> setFullName('Sugih Liawan');
$user1 -> setEmail('sugihlia@gmail.com');
$user1 -> setBirthday('31-05-1982');
$user1 -> setPets('cat');
  
//Use another method that the child class inherited from the parent class
echo $user1 -> hello();

echo '<br/>-------------------------------<br/>';

$admin1 = new Admins();

$admin1 -> setName('Cornelius');
$admin1 -> setFullName('Cornelius Wang Zhi');
$admin1 -> setEmail('thorrevenge3105@gmail.com');
$admin1 -> setPassword(md5('cornelius3105'));

echo $admin1 -> helloAdmin();

$article1 = new Article();

$article1 -> setTitle('Title untuk Artikel');
$article1 -> setSlug('title-untuk-artikel');
$article1 -> setContent('This is Content for the Articles');
$article1 -> setDesc('This is Decs for Content');
$article1 -> setImage('http://localhost/images/edukasi/berlian.png');

echo '<br/>-------------------------------<br/>';

echo $article1 -> readArticle();

$image1 = new Images();

$image1 -> setTitle('Event Kokas');
$image1 -> setSlug('event-kokas');
$image1 -> setDesc('This image for Event Kokas');
$image1 -> setImage('http://localhost/images/events/event_kokas.png');

echo '<br/>-------------------------------<br/>';

echo $image1 -> imageGallery();
?>
