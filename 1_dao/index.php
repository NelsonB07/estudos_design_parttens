<?php 


    include_once("db.php");

?>

<h1>Insira um carro</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca do carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>
    <br>
    <div>
        <label for="km">Quilometragem:</label>
        <input type="text" name="km" placeholder="Insira a quilometragem">
    </div>
    <br>
    <div>
        <label for="color">Cor do carro:</label>
        <input type="text" name="color" placeholder="Insira a cor">
    </div>
    <br>
    <input type="submit" value="Salvar">
</form>