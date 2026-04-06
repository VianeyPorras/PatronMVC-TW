<?php
//---- Utilizamos arreglos Para Nombres y Apellidos -----//

//===Arreglos para 100 nombres===//
$nombres_aleatorios = ["Juan","Judith", "Veronica","Jacqueline", "Oscar","Diana","Kore","Dalay","Manuel","Melany",
"Jorge","Isabella","Ricardo","Daniela","Adrian","Gabriela","Eduardo","Monica","Rafael","Angela",
"Hector","Patricia","Francisco","Mariana","Javier","Lorena","Sergio","Karen","Felipe","Claudia",
"Roberto","Martha","Christian","Jessica","Victor","Cynthia","Fernando","Paula","Mario","Sara",
"Antonio","Carolina","Raul","Elena","Arturo","Bianca","Julian","Camila","Hugo","Dulce",
"Alfonso","Rosa","Mauricio","Andrea","Esteban","Karla","Gustavo","Isai","Joaquin","Natalia",
"Ignacio","Marisol","Pablo","Gabriel","Martin","Edgar","Fabian","David","Luis","Adriana",
"Tonia","Lucia","Carlos","Maria","Angel","Isabel","Santiago","Paola","Miguel","Fabiola",
"Emilio","Carla","Victoria","Laura","Alberto","Fernanda","Jose","Alondra","Josefina","Sofia",
"Gisella","Daniel","Joaquín","Camilo","Brenda","Valeria","Oswaldo","Nadia","Fermin","Clemente" ];

//== Arreglos para 100 apellidos ==//
$apellidos_aleatorios = ["Flores", "Garcia", "Gomez", "Lopez", "Torres","Peña","Gutierrez","Mendoza","Valencia","Hernandez",
"Morales","Castillo","Ortega","Cruz","Ramos","Herrera","Silva","Alvarez","Pineda","Medina",
"Dominguez","Soto","Cabrera","Reyes","Navarro","Castro","Delgado","Leon","Salazar","Cortes",
"Vazquez","Mora","Figueroa","Chavez","Quintero","Estrada","Juarez","Padilla","Benitez","Molina",
"Garza","Cano","Montes","Arias","Barrera","Valdez","Campos","Orozco","Camacho","Mejia",
"Rincon","Pacheco","Tapia","Carmona","Vargas","Serrano","Vega","Miranda","Palacios","Acosta",
"Roldan","Hernandes","Villanueva","Farias","Aguilar","Cisneros","Bravo","Esquivel","Loera","Salinas",
"Carrillo","Duran","Paredes","Olivares","Cordero","Gatica","Sandoval","Cifuentes","Zamora","Cardenas",
"Montoya","Cervantes","Maya","Vidal","Mendez","Urbina","Sanchez","Requena","Soler","Rivas",
"Tellez","Gallegos","Porras","Romero","Gonzalez","Rivera","Ramirez","Guzman","Velasques","Dorantes" ];

$nombre = $nombres_aleatorios[array_rand($nombres_aleatorios)];
$apellido1 = $apellidos_aleatorios[array_rand($apellidos_aleatorios)];

//== Arreglo para guardar los 1000 nombres completos ==//
$lista_nombres = [];

while(count($lista_nombres) <1000){
    //==Agregamos primero nombres ==//
    $nombre = $nombres_aleatorios[array_rand($nombres_aleatorios)];
    $nombre2 = $nombres_aleatorios[array_rand($nombres_aleatorios)];

    //==Agregamos los apellidos ==//
    $apellido1 = $apellidos_aleatorios[array_rand($apellidos_aleatorios)];
    
    do{
        $apellido2 = $apellidos_aleatorios[array_rand($apellidos_aleatorios)];
        
        }while($apellido2 == $apellido1);

        //== Concatenamos nombres completos ==//
        $nombre_completo = $nombre . " " . $nombre2 . " " . $apellido1 . " " . $apellido2;

        //== Para evitar nombres repetitivos ==//
        if(!in_array($nombre_completo,$lista_nombres)){
            $lista_nombres[] = $nombre_completo;
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Nombre</title>
</head>
<body>
    <h1>Generador de Nombres y Apellidos</h1>

    <h2>Total: <?php echo count($lista_nombres); ?> nombres</h2>
    <table border="1">
    <tr>
        <th>#</th>
        <th>Nombre completo</th>
    </tr>
    <?php
    $contador = 1;
    foreach($lista_nombres as $persona){
        echo "<tr>";
        echo "<td>$contador</td>";
        echo "<td>$persona</td>";
        echo "</tr>";
        $contador++;
    }
    ?>
</table>
        </body>
        </html>