function PalabraMasRepetida(Stng)
{
    alert("entre");
  var palabras = Stng.split(" ");
  var palabrasB = palabras;
    
    
    palabras.push(Stng.split(" "));
     palabrasB.push(Stng.split(" "));
    
    var cantidad = palabras.length;
    var resultado = "";
    var contadorMasRepetidas = 0;
    
    alert(cantidad);
    document.write(palabras);
    
    for(var i = 0; i<cantidad; i++ )
    {
        alert("quihuob");
        alert(i);

        var contador = 0;
        
        var palabra =palabras[i];
        
        for(var j=0; j<cantidad;j++)
        {
            if(palabra == palabrasB[j])
            {
                contador++;
                palabras[j] = "";
            }
        }
        if((contador>1)&& (contador>contadorMasRepetidas))
        {
            resultado=palabra;
            contadorMasRepetidas = contador;
            document.write(palabras[i]);
        }
        else if((contador>1) && (contador == contadorMasRepetidas)){
            resultado += " "+palabra;
        }
        
    }
    if (resultado == "")
        resultado = "no hay palabras repetidas";
    
    document.write(resultado);
}


document.write(PalabraMasRepetida());