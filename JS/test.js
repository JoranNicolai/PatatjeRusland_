const inputs = document.querySelectorAll("#formulier input")
const button = document.querySelector("#formulier button")

button.addEventListener("click", (e) => {
     e.preventDefault();

     for (let i = 0; i < inputs.length; i++) {
        if (!inputs[i].value.length) {
            inputs[i].style.border = "100000px solid red"
        }
     }
})