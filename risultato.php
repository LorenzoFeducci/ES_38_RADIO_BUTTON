<?php
    include('connessione.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idRecensione = $_POST["recensione"];
        $azione = $_POST["modifica"];

        if($azione == "aggiorna"){
            $voto = $_POST["voto"];
            $sql1 = "UPDATE recensioni SET Voto = $voto WHERE IDRecensione = $idRecensione";

            if($conn->query($sql1)){
                if($conn->affected_rows > 0){
                    echo "<p>Aggiornamento andato a buon fine</p>";
                }else{
                    echo "<p>Non è stato aggiornato nulla</p>";
                }
            }else{
                echo "<p>Errore aggiornamento</p>";
            }
        }else{
            $sql2 = "DELETE FROM recensioni WHERE IDRecensione = $idRecensione";

            if($conn->query($sql2)){
                if($conn->affected_rows > 0){
                    echo "<p>Eliminazione andata a buon fine</p>";
                }else{
                    echo "<p>Non è stato eliminato nulla</p>";
                }
            }else{
                echo "<p>Errore eliminazione</p>";
            }
        }
    ?>

    <br>

    <a href="inserisci.html">Ritorna alla HOME</a>;
</body>
</html>