<?php
    session_start();
    $_SESSION["answer"] = $_POST["Q"];
    //$answer = $_POST['Q'];
?>
<!DOCTYPE html>
<html lang="es">
    <title>
        Prueba
    </title>
    <body>
        <form method="post" action="pruebas3.php">            
            <!--Pregunta 1-->            
            <p>Me gustan las revistas de mecánica</p>
            <input type="radio" value="true" name="Q[0]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[0]">
            <label>falso</label>

            
            <!--Pregunta 2-->
            <br><p>Tengo buen apetito</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>