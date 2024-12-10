let vuelo = [];
let resultadosvuelos = [];

function aniadirVuelo(){

    const codigo = document.getElementById('codigo').value;
    const plazas = document.getElementById('plazas').value;
    const importe = document.getElementById('importe').value;

    if(!codigo || isNaN(plazas) || isNaN(importe)){

        alert('Por favor, rellena todos los campos correctamente');
        return;
    }

    vuelo.push(new Vuelo(codigo, plazas, importe));
    alert('Vuelo añadido correctamente');
    actualizarTabla();
    guardarVuelo();
    limpiarCampos();
}

function modificarVuelo(){

    const codigo = document.getElementById('codigo').value;
    const plazas = document.getElementById('plazas').value;
    const importe = document.getElementById('importe').value;

    if(!codigo || isNaN(plazas) || isNaN(importe)){
        alert('Por favor, rellena todos los campos correctamente');
        return;
    }

    const vuelo = vuelo.find(p => p.codigo === codigo);
    if (vuelo){

        vuelo.plazas = plazas;
        vuelo.importe = importe;
        alert('Vuelo modificado correctamente');
    }else{
        alert('No se ha encontrado el vuelo con el código -> '+ codigo);
    }
    limpiarCampos();
}

function guardarVuelo(){
    localStorage.setItem('vuelos', JSON.stringify(vuelo));
}

function cargarVuelos(){
    if(localStorage.getItem("vuelos")){
    vuelo = JSON.parse(localStorage.getItem('vuelos'));
    actualizarTabla();
}
}

function actualizarTabla(){
    
    const tdoby = document.getElementById("vuelos").querySelector("tbody");
    tdoby.innerHTML = '';
    vuelo.forEach((v) => {
        const tr = document.createElement("tr");
        tr.innerHTML=` 
            <td>${v.codigo}</td> 
            <td>${v.plazas}</td> 
            <td>${v.importe}</td>
            `
            tbody.appendChild(tr);
    });
}

function calcularVuelo(){

}

function limpiarCampos(){
    document.getElementById('codigo').value = '';
    document.getElementById('plazas').value = '';
    document.getElementById('importe').value = '';
}