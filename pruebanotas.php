<?php
echo "Nombre:";
echo ($_POST['nombre']);
echo "<br><br>Apellidos:";
echo ($_POST['apellidos']);
echo "<br><br>Curso:";
echo ($_POST['curso']);
echo "<br><br>Ciclo:";
echo ($_POST['ciclo']);
echo "<br><br>Calificación PROG:";
echo ($_POST['prog']);
echo "<br><br>Calificación ED:";
echo ($_POST['ed']);
echo "<br><br>Calificación LLMM:";
echo ($_POST['llmm']);
echo "<br><br>Calificación BBDD:";
echo ($_POST['bbdd']);

$notamedia=($_POST['prog']+$_POST['ed']+$_POST['bbdd']+$_POST['llmm'])/4;
echo "<br><br>La nota media es: " .$notamedia;

$notamax=max($_POST['prog'],$_POST['ed'],$_POST['bbdd'],$_POST['llmm']);
echo "<br><br>La nota máxima es: " .$notamax;

$notamin=min($_POST['prog'],$_POST['ed'],$_POST['bbdd'],$_POST['llmm']);
echo "<br><br>La nota mínima es: " .$notamin;
 ?>
