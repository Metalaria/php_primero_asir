</form>
<div align="center">
<?php 
/*
* ------------------------
* | ALGUNAS ACLARACIONES |
* ------------------------
*
* ¿Que es una clase?
* -------------------
La mayoriaa de lenguajes de programacion modernos estan orientados a objetos. 
El concepto de orientacion a objetos es una tecnica que acerca la programacion a la forma de pensar humana. 
Podemos pensar en cualquier aspecto de la vida real como un sistema basado en objetos: 
un coche, un boligrafo, un libro, una silla, o incluso una persona. Todos estos pueden ser objetos con una serie de caracteristicas 
y una serie de capacidades. Por ejemplo, un coche tiene un numero de puertas determinado, un color, un tamaÃ±o... 
y es capaz de realizar tareas como arrancar, acelerar, frenar... Lo mismo sucede con una persona: 
tiene una estatura, un peso, un color de ojos y muchisimas caracteristicas que la hacen unica frente a las demas.

Yo las uso por costumbre, si bien en php no son obligatorias, pero si en un futuro queremos hacer un objeto del tipo "matrizCaracol" 
necesitamos envolver todo en una clase
*
*/
 $numero=$_POST["txtNumero"];
class matrizCaracol{ 
     
    private $matriz;  // el modificador private indica que las variables solo se puede acceder a ellas desde esta misma clase
    private $tamanyo; 
     
    public function matrizCaracol($numero){  // este es constructor de un objeto del tipo "matrizCaracol"  que recibe como parametro un numero
        $this->tamanyo = $numero; // el modificador this hace referencia a esta variable, en caso de existir ambiguedad en la declaracion esto 
        $this->matriz  = array($numero); // arregla ese problema al especificar que esta variable con la que vamos a trabajar
        for ($i = 0 ; $i < $numero ; $i++) // aqui se crea una matriz del tamanno especificado por la variable "numero"
            $this->matriz[$i] = array($numero); 
        $this->fillMatrizCaracol(); // aqui­ se llama al metodo para rellenar la matriz
    } 
     
    public function fillMatrizCaracol(){ 
        $contador = 1; 
        $fila     = 0; 
        $columna  = 0; 
        $fin      = pow($this->tamanyo,2)+1; // la variable fin controla el bucle para que rellene la matriz correctamente
        while ($contador < $fin){  
            for ($x = $columna ; $x < ($this->tamanyo - $columna) ; $x++){ // aqui se rellenan las columnas, 
                $this->matriz[$fila][$x] = $contador; // para hacer el espiral tenemos que restar a a la posicion de la columna el valor de la fila
                $contador++; 
            } 
            if ($contador == $fin) break; // si el contador es igual a la variable fin fuerzo el fin del bucle
            $x--; 
            for ($y = ($fila+1) ; $y < ($this->tamanyo - $fila) ; $y++){ // aqui se rellenan las filas,
                $this->matriz[$y][$x] = $contador; // para hacer el espiral tenemos que restar a a la posicion de la fila el valor de la columna
                $contador++; 
            } 
            if ($contador == $fin) break; // si el contador es igual a la variable fin fuerzo el fin del bucle
            $y--; 
            $x--; 
            for ($x = (($this->tamanyo - $columna)-1) ; $x > $columna ; $x--){ // aqui­ se hace lo misma del pricipio
                $this->matriz[$y][$x-1] = $contador;  // pero la columna se rellena empezando por abajo
                $contador++; 
            } 
            if ($contador == $fin) break; // si el contador es igual a la variable fin fuerzo el fin del bucle
            for ($y = (($this->tamanyo - $fila)-2) ; $y > $fila ; $y--){ // aqui se hace lo misma del pricipio
                $this->matriz[$y][$x] = $contador;  // pero la columna se rellena empezando por abajo
                $contador++; 
            } 
            if ($contador == $fin) break; // si el contador es igual a la variable fin fuerzo el fin del bucle
            $fila++; // aumento en uno el valor de la posiciÃ³n de la fila para pasar a la siguiente
            $columna++; // umento en uno el valor de la posiciÃ³n de la fila para pasar a la siguiente
        } 
    } 
     
    public function showMatrizCaracol(){     // Este metodo lo unico que hace es recorrer toda la matriz mostrando
       echo "<table>" ; // el valor de cada posicion
       for ($x = 0 ; $x < $this->tamanyo ; $x++){ // este for es para las filas
          echo "<tr>"; 
          for ($y = 0 ; $y < $this->tamanyo ; $y++){ // este for es para las columnas
            echo "<td align='center'>".$this->matriz[$y][$x]."<td>"; // muestra el valor de la posicon, definida por las coordenadas "x" e "y"
         } 
         echo "</tr>"; 
       } 
       echo "</table>"; 
    } 
     
} 
 

$miMatrizCaracol = new matrizCaracol($numero); // creamos un objeto del tipo "matrizCaracol", para crear un objeto
// lo hacemos con el parametro "new" seguido del nombre del metodo constructor y le pasamos el parametro que se nos pide
$miMatrizCaracol->showMatrizCaracol(); // aqui usamos el metodo para mostrar la matriz que hemos creado 
?> 
</div>
</body>
</html>
