<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $profession = $_POST['profession'] ?? '';
    $email = $_POST['email'] ?? '';
    $date = $_POST['date'] ?? '';
    $adresse = $_POST['adresse'] ?? '';
    $pays = $_POST['pays'] ?? '';
    $sexe = $_POST['sexe'] ?? '';
    $langues = $_POST['langues'] ?? '';

    echo "<h2>Données reçues :</h2>";

    echo "Nom : $nom <br>";
    echo "Prénom : $prenom <br>";
    echo "Profession : $profession <br>";
    echo "Email : $email <br>";
    echo "Date : $date <br>";
    echo "Adresse : $adresse <br>";
    echo "Pays : $pays <br>";
    echo "Sexe : $sexe <br>";

    echo "Langues :";
    if (!empty($_POST['langues'])) {
        foreach ($_POST['langues'] as $langue)
        {
            echo $langue . " ";
        }
    } else {
        echo "Aucune langue sélectionnée";
    }
} else {
    echo " X Accès non autorisé";
}
?>