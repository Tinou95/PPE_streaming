<?php 

try {
    $sqlQuery = 'SELECT * FROM utilisateurs';
    $recipesStatement = $bdd->prepare($sqlQuery);
    $recipesStatement->execute();
    $users = $recipesStatement->fetchAll();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}



foreach ($users as $user) {

    if ($user['id'] === $_SESSION['user']) {
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['id'] = $user['id'];
        echo
        '<ul class="user_info">' .
            '<li>' . '<span>' ."Nom : " . '</span>' .'<span class="nom">'. $user['pseudo'] .'</span>'. '</li>' . 
            '<li>' . '<span>' ."Email : " .'</span>'. $user['email'] . '</li>' .
            '<li>' . '<span>'."ID : " .'</span>'. $user['id'] . '</li>' .
            '</ul>';
    }
   
}

     ?>