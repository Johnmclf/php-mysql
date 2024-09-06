<?php
// Déclaration du tableau des recettes
// $recipes = [
// ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
// ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
// ];
?>

<?php
$recipes = [
['title' => 'Cassoulet','recipe' => 'des flageoets','author' => 'mickael.andrieu@exemple.com',
'is_enabled' => true,],
['title' => 'Couscous','recipe' => '','author' => 'mickael.andrieu@exemple.com',
'is_enabled' => false,],
['title' => 'Escalope milanaise','recipe' => 'prenez une belle escalope','author' => 'mathieu.nebra@exemple.com',
'is_enabled' => true,]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Affichage des recettes</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Affichage des recettes</h1>
<div>
<?php for ($lines = 0; $lines <= 1; $lines++): ?> 
<?php
foreach($recipes as $recipe) {
    if($recipe['is_enabled']==true){
        echo '<h2>'.$recipe['title'] . '</h2> Etape 1 : ' . $recipe['recipe'] . '<br>' . $recipe['author'] . '<br>';
    }
}?>
<?php endfor; ?>
</div>
</body>
</html>