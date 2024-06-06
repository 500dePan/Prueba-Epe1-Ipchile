<?php

include("con_db.php");

if (isset($_POST['Register'])){
    if(strlen($_POST['NombreTB']) >= 1 && 
    strlen($_POST['Correo']) >= 1 &&
    strlen($_POST['MensajeTB']) >= 1){
        $NombreTB=trim($_POST['NombreTB']);
        $Correo=trim($_POST['Correo']);
        $MensajeTB=trim($_POST['MensajeTB']);
        $consulta="INSERT INTO users(NombreTB,Correo,MensajeTB) VALUES ('$NombreTB','$Correo','$MensajeTB')";
        $resultado = mysqli_query($conex,$consulta);
        /*if($resultado){
            ?>
            <h3 class="bueno"> paso de pana mi rey </h3>
            <?php
        }else{
            ?>
            <h3 class="malo"> no paso naa la wa </h3>
            <?php

        }
    } else {
        ?>
            <h3 class="malo"> llene la wea po mi rey </h3>
            <?php*/
    }
}

?>