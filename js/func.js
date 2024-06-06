

/////////////////////////////////////

/////////////////////////////////////
// Chargement du fichier JSON avec les projets
// function loadProjects() {
//     const selection = document.getElementById('selection');

//     // Parcourir les projets et les ajouter au conteneur
//     projects.forEach(project => {
//         const projectHTML = `
//             <article class="box">
//                 <section class="img"><img src="${project.image}" alt="illustration"></section>
//                 <section class="text">
//                     <h2>${project.title}</h2>
//                     <p>${project.description}</p>
//                     <p>${project.features}</p>
//                     <p class="read-more modal-trigger">Plus de détails<span class="arrow"></span></p>
                    
//                     <!-- Fenêtre modal en js -->
//                     <article class="modal-container" id="${project.modalId}">
//                         <div class="overlay modal-trigger"></div>
//                         <div class="modal" role="dialog">
//                             <i class="close-modal modal-trigger fa-solid fa-circle-xmark"></i>
//                             <section><img src="${project.modalImage}" alt="illustration"></section>
//                             <h2>${project.title}</h2>
//                             <article>${project.modalFurtherDescription}</article>
//                             <p>ref : <a href="${project.modalLink}">${project.modalLink}</a></p>
//                         </div>
//                     </article>
//                     <!-- /////////////////// -->

//                 </section>
//             </article>
//         `;
//         selection.innerHTML += projectHTML;
//     });
// }

// Affichage des modifications lors de l'intersection avec les éléments
function focusElement() {
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
}

// Affichage du nom avec effet d'écriture
function displayFullName() {
    const textContainer = document.getElementById('nom');
    const textToDisplay = 'Nilaina Michael Razafindrambola';

    let index = 0;

    const displayNextCharacter = () => {
        if (index < textToDisplay.length) {
            const char = textToDisplay.charAt(index);
            textContainer.textContent += char;
            index++;

            if (char === ' ') {
                setTimeout(displayNextCharacter, 200); // Delai de 200ms si le caractère est un espace
            } else {
                setTimeout(displayNextCharacter, 100); // Delai de 100ms entre chaque caractere (ajustable selon vos besoins)
            }
        }
    };
    displayNextCharacter(); // Appel initial de la fonction
}


//Animation des projets
function projectAnime(){
    const ul = document.querySelector('.project ul');
    const slides = document.querySelectorAll('.project ul li');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    const indicatorsContainer = document.querySelector('.indicators');
    let index = 0;
    const totalSlides = slides.length;

    // Crée les points d'indication
    slides.forEach((slide, i) => {
        const indicator = document.createElement('div');
        if (i === 0) {
            indicator.classList.add('active');
        }
        indicator.addEventListener('click', () => {
            index = i;
            updateSlides();
        });
        indicatorsContainer.appendChild(indicator);
    });
    const indicators = document.querySelectorAll('.indicators div');

    function showSlide(i) {
        ul.style.transform = `translateX(-${i * 150}%)`;
    }

    function updateSlides() {
        showSlide(index);
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });
    }

    function nextSlide() {
        index = (index + 1) % totalSlides;
        updateSlides();
    }

    function prevSlide() {
        index = (index - 1 + totalSlides) % totalSlides;
        updateSlides();
    }

    nextButton.addEventListener('click', () => {
        nextSlide();
    });
    prevButton.addEventListener('click', () => {
        prevSlide();
    });
}

// Affichage sticky de l'element intro
function setupStickyIntro() {
    window.addEventListener('scroll', function() {
        const introElement = document.querySelector('.project .intro');
        const introRect = introElement.getBoundingClientRect();
        
        if (introRect.top === 0 && window.getComputedStyle(introElement).position === 'sticky') {
            introElement.classList.add('intro-top');
        } else {
            introElement.classList.remove('intro-top');
        }
    });
}
function focusRow() {
    const rows = document.querySelectorAll('.row');

    const options = {
        threshold: 0.3 // Déclencher lorsque 30% de l'élément est visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                rows.forEach(row => {
                    if (entry.target === row) {
                        row.classList.add('focus-row');
                    }
                });
            } else {
                rows.forEach(row => {
                    if (entry.target === row) {
                        row.classList.remove('focus-row');
                    }
                });
            }
        });
    }, options);

    rows.forEach(row => {
        observer.observe(row); // Observer chaque élément individuellement
    });
}



// Fonction principale pour initialiser toutes les fonctionnalités
function initialize() {
    // loadProjects(); // Chargement des projets
    focusElement(); // Observateur d'intersection
    displayFullName(); // Affichage du nom
    projectAnime(); //Anime les projets
    setupStickyIntro(); //
    focusRow();
}

// Exécution de la fonction initialize après le chargement complet du DOM
document.addEventListener("DOMContentLoaded", initialize);
