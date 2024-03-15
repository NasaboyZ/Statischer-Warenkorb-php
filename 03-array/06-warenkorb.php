<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 $shoppingCart = [ 'Apfel','Orange','Bannane', 'Yougurt','Brot'];

//  var_dump($shoppingCart);

 // Schritt 1 Finde Heraus ob das Array überhaupt iergendwelche Elemente enthält
 /* Wenn ja :
 a) gib eine <ul> Liste in Html as
 b) generiere ein <li>element für jedes Element des warenkobs

 wenn nicht: 
 a) gebe einen absatz p element aus, wo der nutzer darauf hingewisen wird, das der warenkorb leer ist.
 */

 var_dump(empty($shoppingCart)); // ich habe mit der var_dump und emty methode heraus gefunden das der shopping cart nicht leer ist.

  ?>
    <?php if (! empty($shoppingCart)): ?>

        <ul>
            <?php foreach($shoppingCart AS $item):?>
                <li><?php echo $item ?></li>
                <?php endforeach; ?> 
        </ul>
    <?php else:  ?>
        <p> Der Warenkorb ist leer. </p>

    <?php endif; ?>

    
</body>
</html>