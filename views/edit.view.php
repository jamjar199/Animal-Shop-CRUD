<?php require('partials/header.php'); ?>

<h1>Edit Animal</h1>

<div class="col-12 animal-form edit-form">
    <form method="post" action="/edit">
        <p class="form-text">Age: </p> <input type="text" name="age" value="<?=$animal['age'];?>">
        <p class="form-text">Species: </p> <input type="text" name="species" value="<?=$animal['species'];?>">
        <p class="form-text">Price: </p> <input type="text" name="price" value="<?=$animal['price'];?>">
        <br>
        <input hidden value="<?=$animal['id'];?>" name="id">
        <input class="animal-btn btn btn-primary" type="submit" value="Submit">
    </form>
</div>

<?php require('partials/footer.php'); ?>






