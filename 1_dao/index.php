<?php 


    include_once("db.php");
    include_once("dao/CarDAO.php");

    $carDAO = new CarDAO($conn);

    $cars = $carDAO->findAll();

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
<ul>
    <?php foreach($cars as $car): ?>
        <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
    <?php endforeach; ?>
</ul>