<?php
$arquivo = $_FILES["$arquivo"];
$destino = "/uploads" . $arquivo["name"];

if(move_uploaded_file($arquivo["tmp_name"], $destino)){
    echo "Arquivo enviado com sucesso!!<br>"
    echo "Arquivo:" . $arquivo["name"] . "<br>";
    echo "<a> href='index.php'<a>" Voltar
}else {
 echo "Erro ao enviar arquivo";
}