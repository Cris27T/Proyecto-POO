function generarComercios(){
    for(let i=0; i<3; i++){
    document.getElementById("comercios").innerHTML += 
        `<div class="card">
        <img class="img-comercio" src="img/comidas.jpg"></img>
    </div>`
    }
}

generarComercios();