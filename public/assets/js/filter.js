//On récupère tous nos li sur lesquelles 
let breeds = document.querySelectorAll('.dogBreed')
//On récupère toutes nos cards
let cards = document.querySelectorAll('.displayCard')

//On boucle sur chaque li
breeds.forEach((breed) => {
    //on met un event 'click' sur chaque li
    breed.addEventListener('click', () => {
        //on crée une variable pour stocker la valeur de l'id(html) de chaque li
        let breedId = breed.id
        console.log('Race cliquée : ', breed.id)
        //on boucle sur chaque card 
        cards.forEach(card => {
            //on récupère chaque card pour récupérer la valeur de la race dans la card
            let h4dogBreed = card.querySelector('.h4DogBreed')
            console.log('LOL : ', h4dogBreed);
            console.log('identifier :', breedId, 'Race card :', h4dogBreed.dataset.id);
            //On compare pour chaque card l'id du li et le data-id de la card
            if (breedId !== h4dogBreed.dataset.id) {
                console.log("Race correspond : suppression classe card");
                //Si l'id du li et le data-id de la card ne correspondent pas, on 
                //supprime la classe card et on ajoute une classe d-none pour la cacher
                card.classList.replace('container', 'd-none')
            }else{
                console.log('La race ne correspond pas');
                card.classList.replace('d-none', 'container')
            }
        }) 

    })
})