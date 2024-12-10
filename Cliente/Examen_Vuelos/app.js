let vuelo = [];
let resultadosvuelos = [];

function aniadirVuelo(){/*No se puede poner un numero de plazas menor a 10 ni un importe menor a 10*/

    const codigo = document.getElementById('codigo').value;
    const plazas = document.getElementById('plazas').value;
    const importe = document.getElementById('importe').value;

    if(!codigo || isNaN(plazas) || isNaN(importe)){

        alert('Por favor, rellena todos los campos correctamente');
        return;
    }

    vuelo.push(new Vuelo(codigo, plazas, importe));
    alert('Vuelo añadido correctamente');
    
    limpiarCampos();
    actualizarTabla();
    guardarVuelo();
    
}

function modificarVuelo(){/*No se puede poner un numero de plazas menor a 10 ni un importe menor a 10*/

    const codigo = document.getElementById('codigo').value;
    const plazas = document.getElementById('plazas').value;
    const importe = document.getElementById('importe').value;

    if(!codigo || isNaN(plazas) || isNaN(importe)){
        alert('Por favor, rellena todos los campos correctamente');
        return;
    }

    const vueloEncontrado = vuelo.find(p => p.codigo === codigo);

    if (vueloEncontrado){

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

function actualizarTabla(){/*Necesito que esto se muestre en Lista de Vuelos */
    
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

function calcularVuelo(){/*Al hacer esta funcion se calcula el importe (plazas*importe) */

    const resultadosvuelosDiv = document.getElementById("resultadosvuelos");
    resultadosvuelosDiv.innerHTML = '';
    const vuelosMuyRentables = [];

    vuelo.forEach((vuelo) => {
        const calc = (vuelo.plazas * vuelo.importe);
        let mensaje='';

        if(calc < 10000){
            mensaje = `El vuelo con el codigo ${vuelo.codigo} tiene unos ingresos de ${calc} con lo cual es poco rentable`;
        }else if(calc > 10000 && calc < 20000 ){
            mensaje = `El vuelo con el codigo ${vuelo.codigo} tiene unos ingresos de ${calc} con lo cual es rentable`;
        } else if (calc > 20000) {/*Se creara otra coleccion en memoria con los vuelos que sean muy rentables */
            mensaje = `El vuelo con el codigo ${vuelo.codigo} tiene unos ingresos de ${calc} con lo cual es muy rentable`;
            vuelosMuyRentables.push(new Vuelo(vuelo.codigo, vuelo.plazas, vuelo.importe));
        }
        const v = document.createElement('P');
        v.textContent = mensaje;
        resultadosvuelosDiv.appendChild(v);
    });

}

function limpiarCampos(){
    document.getElementById('codigo').value = '';
    document.getElementById('plazas').value = '';
    document.getElementById('importe').value = '';
}