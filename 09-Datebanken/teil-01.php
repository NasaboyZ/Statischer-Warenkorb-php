<?php
try{
    $pdo = new PDO('mysql:host = localhost;dbname=php_kurs','root','',[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);


} catch(PDOException $e){

    echo 'Problem mit der Datenbankverbidung...';
}
//$id =(int) $_GET['id']; //sicherheit das wir keine texte in unsere php schicken

$stmt = $pdo -> prepare('SELECT * FROM `users` WHERE `ìd`=:id');

$stmt = $pdo->prepare('SELECT * FROM `users`WHERE `id`= 8');
$stmt -> bindValue(':id',$_GET['id']);
$stmt -> execute(); // exicute ist dafür da damit es von der Datenbank ausgeführt wird.

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //FETCH_ASSOC ist dafür da damit wir nicht nach Nummerische nummer gehen müssen sondern nach title
var_dump($results);

?>

<ul>
  <?php foreach($results as $result):?>
    <li><?php echo $result['title']?></li>
    <li><?php echo $result['text']?></li>
    <?php endforeach;?>
</ul>
