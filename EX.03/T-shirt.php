<?php
$nom_produit = 't-shirt simple';
$couleur ='blanc';
$prix ='10.50';
$quantité ='10';
?>

<h3>
<?php 
$nom_produit= "t-shirt simple";
echo'le nom du produit est ';
echo$nom_produit;
?>

<?php
$quantité = '10';
echo'il reste';
echo$quantité;
echo'produit en stock';
?>
<?php
$couleur ='blanc';
echo 'le produit';
echo$nom_produit;
echo'la couleur est';
echo$couleur;
?>
</h3>
<php_EOL>
<h4>
<?php
$prix='10.50'
echo'Acheter 3 produits couterait';
echo$prix+$prix+$prix;
?>
