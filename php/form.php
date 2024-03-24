<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $search = $_GET["search"];
} else if($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["search"];
    $paradigme = $_POST["paradigme"];
    $annee = $_POST["annee"];
} else {
    echo "Erreur : No data";
}
?>


<!doctype html>
<html lang=en>
    <head>
        <meta charset=utf-8>
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="icon" type="image" sizes="30*30" href="/img/icon.png">
        <script src="https://kit.fontawesome.com/c2a950b2e9.js" crossorigin="anonymous"></script>
        <title>Welcome</title>
    </head>
    <body>
        <?php include 'header.php' ?>

        <main class="container">
            <section class="content">
                <section class="row search-row">
                    <fieldset class="filter">
                        <legend>Filtrage de Recherche</legend>
                        <form action="form.php" method="POST" id="filter">
                            <div>
                                <label for="paradigme">Paradigme :</label>
                                <select name="paradigme" id="paradigme">
                                    <option value="tout">Tout</option>
                                    <option value="imperatif">Imperatif</option>
                                    <option value="declaratif">Declaratif</option>
                                    <option value="orienteObjet">Oriente objet</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>
                            <div>
                                <label for="annee">A partir de quelle annee :</label>
                                <input type="number" id="annee" name="annee" min="2020" max="2024" required>
                            </div>
                            <div>
                                <label for="search">Recherche :</label>
                                <input type="text" name="search" id="search" placeholder="projet web...">
                            </div>
                            <button type="submit">Filtrer</button>
                        </form>
                    </fieldset>
                </section>
                <section class="row result">
                    <h2>SQL QUERY for 
                        <?php
                            echo "\"". $search . "\"";
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                echo " + " . $paradigme . " + ";
                                echo $annee;
                            }
                        ?>
                    <h2>
                    <p><span class="fa-solid fa-poo"> Sorry ! No such information</p>
                </section>
            </section>
        </main>

        <?php include 'footer.php' ?>

    </body>
</html>
    
