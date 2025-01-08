function testUnidad2() {
    let valor;
    do{
        valor= prompt("Ingrese un número entre 0 y 999: ");
        valor = parseInt(valor);
        document.write("El valor"+valor+"tiene" );

        if(valor <10)
            document.write(" un dígito");

        else{
            if(valor < 100)
                document.write(" dos dígitos");
            else if(valor <= 999)
                document.write(" tres dígitos");
            else
            document.write("El numero no esta en el rango elegido.El programa terminara.");

            }
            document.write("<br />");
        }
    }