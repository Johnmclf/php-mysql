<?php

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'des flageolets',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

?>

<?php
function isValidRecipe(array $recipe) : bool {
if (array_key_exists('is_enabled', $recipe)) {
$isEnabled = $recipe['is_enabled'];
} else {
$isEnabled = false;
}
return $isEnabled;
}
?>

<?php
function getRecipes(array $recipes) : array {
    $validRecipes = [];
    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }
    return $validRecipes;
}
// construire l'affichage HTML des recettes
foreach(getRecipes($recipes) as $recipe) {
// echo $recipe['title'] ..
}
?>

<?php
function displayAuthor(string $authorEmail, array $users) : string
{for ($i = 0; $i < count($users); $i++) {
$author = $users[$i];
if ($authorEmail === $author['email']) {
return $author['full_name'] . '(' . $author['age'] . ' ans)';}}}
?>

<!DOCTYPE html>
<html>
<head>
<title>Affichage des recettes</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Affichage des recettes de cuisine</h1>
<div>
<?php 
for ($lines = 0; $lines <= 1; $lines++): 
?> 
<?php

foreach($recipes as $recipe) {
    // if($recipe['is_enabled']==true){
    //     echo '<h2>'.$recipe['title'] . '</h2> Etape 1 : ' . $recipe['recipe'] . '<br>' . $recipe['author'] . '<br>';
    // }
    if(isValidRecipe($recipe) == true) {
        echo '<h2>' . $recipe['title'] . '</h2>';
        $authorEmail = $recipe['author'];
        foreach($users as $user) {
            if($user['email'] == $authorEmail) {
                echo displayAuthor($authorEmail, $users);
                
            }
        }
    }
}
?>
<?php endfor; ?>
</div>
</body>
</html>