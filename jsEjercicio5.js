var btn =document.getElementById("btn");
function ObtenerArregloAleatorio() {
     const filas = document.getElementById("filas").value;
      const columnas = document.getElementById("columnas").value;
     let suma=0;
    document.write(" <table border='1'>  ");

    for (i = 1; i <= filas; i++) {
     document.write(" <tr>  ");
      for (j = 1; j <= columnas; j++) {
      var aleatorio = Math.floor((Math.random() * (100-1)+1));
         suma=aleatorio+suma;
      document.write("<td>" + aleatorio + "</td>");
     }
     document.write(" </tr>  ");
     }
  document.write(" </table>  ");
   document.write("<td> las suma es :" + suma+ "</td>");

    }
    btn.addEventListener("click",ObtenerArregloAleatorio,true);