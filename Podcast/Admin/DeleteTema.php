<?php
    include_once ('../funcao.php');
    $conn = obterConexao();

    $id = $_POST['id'];

    $servico = mysqli_query($conn, "DELETE FROM tema WHERE id = '" . $id . "';");

    header("Location: ListTemas.php");

?>