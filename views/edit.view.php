<?php require('partials/header.php'); ?>

    <p class="response"><?=$responseText;?></p>

    <h1>Edit</h1>

    <form method="post" action="/edit">
        <p>Age: </p> <input type="text" name="age" value="<?=$animal['age'];?>">
        <p>Species: </p> <input type="text" name="species" value="<?=$animal['species'];?>">
        <p>Price: </p> <input type="text" name="price" value="<?=$animal['price'];?>">
        <br>
        <input hidden value="<?=$animal['id'];?>" name="id">
        <input type="submit" value="Submit">
    </form>

<?php require('partials/footer.php'); ?>