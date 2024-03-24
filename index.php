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
        <?php include 'php/header.php' ?>

        <main class="container">
            <section class="content">

                <article class="row presentation">
                    <section class="left-side">
                        <img src="img/signature.svg" alt="siganture">
                    </section>

                    <section class="right-side">
                        <h1 class="welcome"><i class="quote fa-solid fa-quote-left"></i> Bonjour et bienvenue <i class="quote fa-solid fa-quote-right"></i></h1>
                        <h1 class="portfolio">Portfolio de </br>Nilaina Razafindrambola</h1>
                    </section>
                </article>

                <article class="row profil">
                    <div class="sub-row intro"><p>Les petites chose a savoire sur </br><span id="nom"></span></p></div>
                    <div class="sub-row detail">
                        <section class="text">
                            <ul>
                                <li><p>Serie scientifique Spé. Mathématique - Licence Informatique - Developpement en systèmes embarqués.</p></li>
                                <li><p>Actuellement en formation à l'université de Strasbourg, je développe une expertise solide en programmation et en conception à travers divers projets et travaux dirigés. Mon objectif professionnel et personnel se concentre sur le développement de systèmes embarqués et d'IoT, tout en restant conscient des possibilités et des défis liés à l'intégration du cloud computing par exemple dans ces domaines.Donc, je ne me limite pas à mes connaissances ou compétences, mais je vais bien au-delà du possible pour améliorer, pour innover et pour créer.</p></li>
                            </ul>
                        </section>
                        <section class="img">
                            </span><img src="/img/profile.jpg" alt="profil"></span>
                        </section>
                    <div>
                </article>

                <article class="row project" id="project">
                    <div class="sub-row intro">
                        <p><a href="/index.php"><i class="fa-displ fa-solid fa-house"></i></a></p>
                        <p><a href="#project"> Portfolio <span class="descrip">: Tout mes projets</span></a></p>
                        <p><a href="/php/form.php"><i class="fa-displ fa-solid fa-magnifying-glass"></i></a></p>
                    </div>
                    <section class="sub-row selection" id="selection">
                        <article class="box">
                            <section class="img"><img src="/img/to_do.png" alt="illustration"></section>
                            <section class="text">
                                <h2>Gestionnaire de tâches (To-Do List)</h2>
                                <p>
                                    <ul>
                                        <li>Description : Une application web permettant de gérer une liste de tâches à faire.</li>
                                        <li>Fonctionnalités : Ajouter, supprimer et marquer des tâches comme terminées.</li>
                                        <li>Exemple de code : Utilisation de HTML pour la structure, CSS pour le style et JavaScript pour la logique de gestion des tâches.</li>
                                    </ul>
                                </p>
                                <p class="read-more modal-trigger">Plus de detailles<span class="arrow"></span></p>
                                <!-- Fenetre modal en js -->
                                <article class="modal-container" id="project1">
                                    <div class="overlay modal-trigger"></div>
                                    <div class="modal" role="dialog">
                                        <i class="close-modal modal-trigger fa-solid fa-circle-xmark"></i>
                                        <section><img src="/img/to_do.png" alt="illustration"></section>
                                        <h2>Gestionnaire de tâches (To-Do List)</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.
                                        </p>
                                    </div>
                                </article>
                                <!-- /////////////////// -->
                            </section>
                        </article>

                        <article class="box">
                            <section class="img"><img src="/img/blog.png" alt="illustration"></section>
                            <section class="text">
                                <h2>Blog Personnel</h2>
                                <p>
                                    <ul>
                                        <li>Description : Un site web où l'utilisateur peut publier des articles, les commenter et les partager.</li>
                                        <li>Fonctionnalités : Système d'authentification, CRUD (Création, Lecture, Mise à jour, Suppression) des articles, système de commentaires.</li>
                                        <li>Exemple de code : Utilisation de PHP et MySQL pour la gestion des données, HTML/CSS/JavaScript pour l'interface utilisateur.</li>
                                    </ul>
                                </p>
                                <p class="read-more modal-trigger">Plus de detailles<span class="arrow"></span></p>
                                <!-- Fenetre modal en js -->
                                <article class="modal-container" id="project2">
                                    <div class="overlay modal-trigger"></div>
                                    <div class="modal" role="dialog">
                                        <i class="close-modal modal-trigger fa-solid fa-circle-xmark"></i>
                                        <section><img src="/img/blog.png" alt="illustration"></section>
                                        <h2>Blog Personnel</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.
                                        </p>
                                    </div>
                                </article>
                                <!-- /////////////////// -->
                            </section>
                        </article>

                        <article class="box">
                            <section class="img"><img src="/img/calc.png" alt="illustration"></section>
                            <section class="text">
                                <h2>Calculatrice en ligne</h2>
                                <p>
                                    <ul>
                                        <li>Description : Une application web pour effectuer des opérations mathématiques de base.</li>
                                        <li>Fonctionnalités : Addition, soustraction, multiplication, division, gestion des décimales.</li>
                                        <li>Exemple de code : Utilisation de HTML pour les boutons et l'affichage, JavaScript pour la logique de calcul.</li>
                                    </ul>
                                </p>
                                <p class="read-more modal-trigger">Plus de detailles<span class="arrow"></span></p>
                                <!-- Fenetre modal en js -->
                                <article class="modal-container" id="project3">
                                    <div class="overlay modal-trigger"></div>
                                    <div class="modal" role="dialog">
                                        <i class="close-modal modal-trigger fa-solid fa-circle-xmark"></i>
                                        <section><img src="/img/calc.png" alt="illustration"></section>
                                        <h2>Calculatrice en ligne</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.
                                        </p>
                                    </div>
                                </article>
                                <!-- /////////////////// -->
                            </section>
                        </article>

                        <article class="box">
                            <section class="img"><img src="/img/galerie.png" alt="illustration"></section>
                            <section class="text">
                                <h2>Galerie d'images</h2>
                                <p>
                                    <ul>
                                        <li>Description : Une galerie d'images en ligne où les utilisateurs peuvent visualiser et télécharger des images.</li>
                                        <li>Fonctionnalités : Affichage des images, possibilité de zoomer, téléchargement des images.</li>
                                        <li>Exemple de code : Utilisation de HTML/CSS pour la mise en page, JavaScript pour la fonctionnalité de zoom et de téléchargement.</li>
                                    </ul>
                                </p>
                                <p class="read-more modal-trigger">Plus de detailles<span class="arrow"></span></p>
                                <!-- Fenetre modal en js -->
                                <article class="modal-container" id="project4">
                                    <div class="overlay modal-trigger"></div>
                                    <div class="modal" role="dialog">
                                        <i class="close-modal modal-trigger fa-solid fa-circle-xmark"></i>
                                        <section><img src="/img/galerie.png" alt="illustration"></section>
                                        <h2>Galerie d'images</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.
                                        </p>
                                    </div>
                                </article>
                                <!-- /////////////////// -->
                            </section>
                        </article>

                        <article class="box">
                            <section class="img"><img src="/img/mot.png" alt="illustration"></section>
                            <section class="text">
                                <h2>Jeu de mots cachés</h2>
                                <p>
                                    <ul>
                                        <li>Description : Un jeu de mots cachés où les joueurs doivent trouver des mots dans une grille de lettres.</li>
                                        <li>Fonctionnalités : Génération aléatoire de la grille, vérification des mots trouvés, système de points.</li>
                                        <li>Exemple de code : Utilisation de JavaScript pour générer la grille et vérifier les réponses des joueurs.</li>
                                    </ul>
                                </p>
                                <p class="read-more modal-trigger">Plus de detailles<span class="arrow"></span></p>
                                <!-- Fenetre modal en js -->
                                <article class="modal-container" id="project5">
                                    <div class="overlay modal-trigger"></div>
                                    <div class="modal" role="dialog">
                                        <i class="close-modal modal-trigger fa-solid fa-circle-xmark"></i>
                                        <section><img src="/img/mot.png" alt="illustration"></section>
                                        <h2>Jeu de mots cachés</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.
                                        </p>
                                    </div>
                                </article>
                                <!-- /////////////////// -->
                            </section>
                        </article>

                        <article class="box">
                            <section class="img"><img src="/img/meteo.png" alt="illustration"></section>
                            <section class="text">
                                <h2>Application de météo</h2>
                                <p>
                                    <ul>
                                        <li>Description : Une application web qui fournit des informations météorologiques en temps réel.</li>
                                        <li>Fonctionnalités : Affichage de la température, de l'humidité, des prévisions météo, localisation automatique.</li>
                                        <li>Exemple de code : Utilisation d'une API météo pour récupérer les données, HTML/CSS/JavaScript pour l'interface utilisateur et l'affichage des informations.</li>
                                    </ul>
                                </p>
                                <p class="read-more modal-trigger">Plus de detailles<span class="arrow"></span></p>
                                <!-- Fenetre modal en js -->
                                <article class="modal-container" id="project6">
                                    <div class="overlay modal-trigger"></div>
                                    <div class="modal" role="dialog">
                                        <i class="close-modal modal-trigger fa-solid fa-circle-xmark"></i>
                                        <section><img src="/img/meteo.png" alt="illustration"></section>
                                        <h2>Application de météo</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac tortor vitae velit malesuada efficitur id sed neque. Donec quis tellus a arcu volutpat vehicula. Quisque auctor risus at turpis vehicula faucibus. Proin sit amet ligula eget arcu viverra posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida arcu at leo condimentum ullamcorper. Nunc dictum mi in dolor consequat, sed faucibus augue convallis. Suspendisse sit amet lacinia risus. Sed nec aliquet lectus. Vivamus auctor nisi a enim sodales, at ullamcorper tortor volutpat.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non ipsum nec mauris convallis suscipit. In fermentum, dolor et efficitur luctus, risus felis dignissim metus, vel posuere lectus eros nec odio. Donec lacinia quam ut arcu ullamcorper, eget efficitur lorem malesuada. Nulla facilisi. Nam ac placerat risus, non malesuada nisi. Integer scelerisque ipsum et felis hendrerit gravida. Proin convallis tempus nisi id laoreet. Duis ultricies libero vel libero commodo, vel sollicitudin tortor blandit. Vivamus et elit a nisl interdum gravida. Mauris et ante a quam rhoncus fermentum. Sed vitae sagittis ipsum. Donec aliquam ultricies magna, sed rutrum lorem elementum nec.
                                            Maecenas tempus, lacus in maximus volutpat, sapien ex vehicula dolor, nec convallis dui odio ac enim. Aliquam convallis scelerisque nisl sit amet eleifend. Pellentesque in nisl nisi. Proin ultrices dolor sed ligula congue, quis tempor nisi tristique. Nam posuere sem non leo gravida, sed fringilla lorem faucibus. Morbi eget quam ut felis tempor rhoncus. Aliquam pulvinar felis ut leo eleifend, quis accumsan justo aliquam. Morbi in libero pretium, scelerisque magna sit amet, suscipit nisi. Sed in placerat ex. Ut hendrerit est sed tincidunt laoreet. Curabitur consequat lacinia felis, sit amet tempor felis venenatis et. Vivamus ut justo condimentum, bibendum ipsum sed, pellentesque felis. Quisque tempor dolor id sapien vehicula, sed gravida purus tincidunt. Vivamus sagittis ipsum in magna convallis, non fringilla orci lobortis. Curabitur sed fringilla eros.
                                        </p>
                                    </div>
                                </article>
                                <!-- /////////////////// -->
                            </section>
                        </article>
                    </section>
                    <div class="sub-row more">
                        <a href="/php/contact.php"><h2>Plus d'information ?</h2></a>
                    </div>
                </article>
            </section>
        </main>

        <?php include 'php/footer.php' ?>

    </body>
</html>
<!-- A inclure dans in fichier a part -->
<script>
    /// Affichage des modifications dans les cas d'affichage de la section en question
    const presentation = document.querySelector('.presentation');
    const profil = document.querySelector('.profil');

    const options = {
        threshold: 0.5 // Déclencher lorsque 50% de l'élément est visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target === presentation) {
                    presentation.classList.add('modified-presentation');
                } else if (entry.target === profil) {
                    profil.classList.add('modified-profil');
                }
            } else {
                if (entry.target === presentation) {
                    presentation.classList.remove('modified-presentation');
                }
            }
        });
    }, options);

    observer.observe(presentation);
    observer.observe(profil);


    /// Affichage de Nom
    const textContainer = document.getElementById('nom');
    const textToDisplay = 'Nilaina Michael Razafindrambola';

    let index = 0;

    function displayNextCharacter() {
        if (index < textToDisplay.length) {
            const char = textToDisplay.charAt(index);
            textContainer.textContent += char;
            index++;

            if(char === ' '){
                setTimeout(displayNextCharacter, 200); // Delai de 200ms si le caractère est un espace
            } else {
                setTimeout(displayNextCharacter, 100); // Delai de 100ms entre chaque caractere (ajustable selon vos besoins)
            }
        }
    }
    displayNextCharacter();

    /// Affichage des detailles du projet
    // Sélectionnez tous les boutons "Plus de détails" qui doivent ouvrir le modal
    const modalTriggers = document.querySelectorAll(".read-more.modal-trigger");

    // Ajoutez un écouteur d'événements click à chaque bouton
    modalTriggers.forEach(trigger => {
        trigger.addEventListener("click", () => {
            // Selectionnez le modal correspondant à ce bouton
            const modalId = trigger.closest('.box').querySelector('.modal-container').getAttribute('id');
            const modal = document.getElementById(modalId);

            modal.classList.add("active");
            event.preventDefault();
        });
    });

    // Selectionnez tous les boutons de fermeture de modal
    const closeButtons = document.querySelectorAll(".close-modal");

    closeButtons.forEach(button => {
        button.addEventListener("click", () => {
            const modal = button.closest('.modal-container');
            modal.classList.remove("active");
        });
    });

    /// Affichage sticky
    window.addEventListener('scroll', function() {
        const introElement = document.querySelector('.project .intro');
        const introRect = introElement.getBoundingClientRect();
        
        if (introRect.top === 0 && window.getComputedStyle(introElement).position === 'sticky') {
            introElement.classList.add('intro-top');
        } else {
            introElement.classList.remove('intro-top');
        }
    });




    

  </script>
