<!doctype html>
<html lang=en>
    <head>
        <meta charset=utf-8>
        <link rel="stylesheet" href="/projet/css/styles_CV.css">
        <link rel="icon" type="image" sizes="30*30" href="/assets/icon.png">
        <script src="https://kit.fontawesome.com/c2a950b2e9.js" crossorigin="anonymous"></script>
        <title>Portfolio - CV</title>
    </head>
    <body>
        <?php include '../header.php' ?>

        <main class="container">
            <section class="content">

                <article class="row regular download">
                    <section><a href="../assets/CV.pdf" download="CV_Nilaina_razafindrambola.pdf"><button type="submit" class="download-btn">Download</button></a></section>
                </article>

                <article class="row CV">
                    <embed src="../assets/CV.pdf" type="application/pdf">
                </article>

            </section>
        </main>

        <?php include '../footer.php' ?>

    </body>
</html>
    
