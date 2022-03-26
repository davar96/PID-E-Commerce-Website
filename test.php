<?php
if (isset($_POST['nom']) && $_POST['prenom'] && isset($_POST['age'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];

    $response = "Vous êtes " . $nom . " " . $prenom . " et vous avez " . $age . " ans.";
    // do user authentication as per your requirements
    // ...
    // ...
    // based on successful authentication
    echo json_encode($reponse);
} else {
    echo json_encode(array('success' => 0));
}