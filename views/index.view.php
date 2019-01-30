<?php require('partials/header.php'); ?>

<h1>Animal Shop</h1>
<?= $responseText ?>
<form method="get" action="/insert">
    <button type="submit">Insert animal</button>
</form>

<div id="app">
    {{ message }}
</div>

<?php foreach($data as $animal){ ?>
    <div style="border-style: solid">
        <p>Species: <?= $animal['species']; ?></p>
        <p>Age: <?= $animal['age']; ?></p>
        <p>Price: <?= $animal['price']; ?></p>
        <form method="get" action="/get">
            <button type="submit" name="id" value="<?= $animal['id']; ?>">Select</button>
        </form>
    </div>
<?php } ?>


<?php require('partials/footer.php'); ?>