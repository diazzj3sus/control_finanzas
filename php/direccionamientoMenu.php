<?php
    $id=($_GET['IdUser']);
    if(isset($_POST["RegistrarEntradaBt"])){
        header("location:PagResitroEntra.php?IdUser=$id");
    }elseif(isset($_POST["RegistrarSalidaBt"])){
        header("location:PagResitroSalida.php?IdUser=$id");
    }elseif(isset($_POST["VerEntradasBt"])){
        header("location:RegEntradas.php?IdUser=$id");
    }elseif(isset($_POST["VerSalidasBt"])){
        header("location:RegSalidas.php?IdUser=$id");
    }elseif(isset($_POST["VerBalanceBt"])){
        header("location:PagResitroSalida.php?IdUser=$id");
    }elseif(isset($_POST["salirBt"])){
        header("location:index.php?IdUser=$id");
    }elseif(isset($_POST["menuBt"])){
        header("location:menu.php?IdUser=$id");
        session_destroy();
    }
?>