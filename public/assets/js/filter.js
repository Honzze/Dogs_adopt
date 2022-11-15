windows.onload = ()=>{
    
    let breeds = document.querySelectorAll('.dogBreed')
    let cards = document.querySelectorAll('.card')
    
    breeds.forEach((breed) => {
        breed.addEventListener('click', () => {
            let breedId = breed.id
            let identifier = breed.dataset.id
            cards.forEach(card => {
                console.log(identifier);
                if (identifier === "1") {
                    console.log("laa");
                    displayHide(card, breedId)
                }
            }) 
    
            console.log('Race cliquée : ', breed.id)
        })
    })
    
    function displayHide(card, ifTrue) {
        if (ifTrue) {
            card.classList.remove('card')
            card.classList.add('d-none')
        } else {
            card.classList.add('card')   
            card.classList.remove('d-none')
        }
    }
}