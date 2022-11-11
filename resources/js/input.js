// Grab DOM element
const inputList = document.querySelectorAll("input[type='number']");



inputList.forEach((input) => {

    input.addEventListener('change', (e) => {
        e.value = 133423
    })
})
