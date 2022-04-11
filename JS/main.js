const div = document.querySelector("#info");

fetch("https://pokeapi.co/api/v2/berry/")
    .then((response) => {
        return response.json();
    })
    .then((berrys) => {
        console.log(berrys)
        berrys.results.forEach((berry) => {
            div.innerHTML += "<div>"+ berry["name"] +"</div>"
        })
    })
    .catch((e) => console.log(e));