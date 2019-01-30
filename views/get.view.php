<?php require('partials/header.php'); ?>

<h1>Animal Shop</h1>

<div style="border-style: solid">
    <p>Species: <?= $animal['species']; ?></p>
    <p>Age: <?= $animal['age']; ?></p>
    <p>Price: <?= $animal['price']; ?></p>

    <form method="get" action="/edit">
        <button type="submit" name="id" value="<?= $animal['id']; ?>">Edit</button>
    </form>
    <form method="post" action="/delete">
        <button type="submit" name="id" value="<?= $animal['id']; ?>">Delete</button>
    </form>
    <?php if($animal['status'] == 1){ ?>
        <form method="post" action="/deactivate">
            <button type="submit" name="id" value="<?= $animal['id']; ?>">Deactivate</button>
        </form>
    <?php }else{ ?>
        <form method="post" action="/activate">
            <button type="submit" name="id" value="<?= $animal['id']; ?>">Activate</button>
        </form>
    <?php } ?>

</div>

<?php require('partials/footer.php'); ?>