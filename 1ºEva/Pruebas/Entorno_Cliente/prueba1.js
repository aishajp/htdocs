function testUnidad2(){
    
    let cadena = "abc";
    let cadena2= String("abc");
    let cadena3 = new String("abc");

    // console.log(typeof "abc");
    
    document.write(typeof cadena);
    document.write("<br>");
    document.write(typeof cadena2);
    document.write("<br>");
    document.write(typeof cadena3);
    document.write("<br>");
    document.write(typeof cadena3.valueOf());
    document.write("<br>");

    let longitud = 10;
    longitud = "10";
    document.write(typeof longitud);

    if(cadena == "abc"){
        var x = 10;
        let y = 20;
    }
    
    document.write("<br>");
    document.write(x);
    document.write("<br>");
    document.write(y);

    let animal= "Aguila";
    let numpatas = 2;
    document.write(animal + " tiene " + numpatas + " patas");
    
    //let animal2 = new Animal("Perro", 4);
    document.write(numpatas+numpatas+animal);
    
}