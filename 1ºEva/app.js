let personas = [];

function añadirPersona() {
    const nombre = document.getElementById('nombre').value;
    const peso = parseFloat(document.getElementById('peso').value);
    const altura = parseFloat(document.getElementById('altura').value);

    if (!nombre || isNaN(peso) || isNaN(altura)) {
        alert('Por favor, rellena todos los campos correctamente.');
        return;
    }

    personas.push(new Persona(nombre, peso, altura));
    alert('Persona añadida correctamente.');
    limpiarCampos();
}

function modificarPersona() {
    const nombre = document.getElementById('nombre').value;
    const peso = parseFloat(document.getElementById('peso').value);
    const altura = parseFloat(document.getElementById('altura').value);

    if (!nombre || isNaN(peso) || isNaN(altura)) {
        alert('Por favor, rellena todos los campos correctamente.');
        return;
    }

    const persona = personas.find(p => p.nombre === nombre);
    if (persona) {
        persona.peso = peso;
        persona.altura = altura;
        alert('Datos de la persona modificados correctamente.');
    } else {
        alert('No se encontró una persona con ese nombre.');
    }
    limpiarCampos();
}

function calcularIMC() {
    const resultadosDiv = document.getElementById('resultados');
    resultadosDiv.innerHTML = '';
    const personasFueraDeRango = [];

    personas.forEach(persona => {
        const imc = (persona.peso / (persona.altura ** 2)).toFixed(2);
        let mensaje = '';

        if (imc < 18.49) {
            mensaje = `${persona.nombre} tiene un IMC de ${imc} y está demasiado delgada.`;
            personasFueraDeRango.push(new CalculoIMC(persona.nombre, imc));
        } else if (imc > 24.99) {
            mensaje = `${persona.nombre} tiene un IMC de ${imc} y está demasiado obesa.`;
            personasFueraDeRango.push(new CalculoIMC(persona.nombre, imc));
        } else {
            mensaje = `${persona.nombre} tiene un IMC de ${imc} y está en un peso normal.`;
        }

        const p = document.createElement('p');
        p.textContent = mensaje;
        resultadosDiv.appendChild(p);
    });

    if (personasFueraDeRango.length > 0) {
        console.log('Personas fuera de peso normal:', personasFueraDeRango);
    }
}

function limpiarCampos() {
    document.getElementById('nombre').value = '';
    document.getElementById('peso').value = '';
    document.getElementById('altura').value = '';
}