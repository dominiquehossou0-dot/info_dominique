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

    echo "Nom : " .htmlspecialchars($nom) . "<br>";
    echo "Prénom : " .htmlspecialchars($prenom) . "<br>";
    echo "Profession : " .htmlspecialchars($profession) . <br>";
    echo "Email : " .htmlspecialchars($email) . "<br>";
    echo "Date : " .htmlspecialchars($date) . "<br>";
    echo "Adresse : " .htmlspecialchars($adresse) . "<br>";
    echo "Pays : " .htmlspecialchars($pays) . "<br>";
    echo "Sexe : " .htmlspecialchars($sexe) . "<br>";

    echo "Langues :";
    if (!empty($langues)) {
        foreach ($langues as $langue)
        {
            echo $langue . " ";
        }
    } else {
        echo "Aucune langue sélectionnée";
    }
} else {
    echo "  Accès non autorisé";
}
?>