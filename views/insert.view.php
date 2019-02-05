<?php require('partials/header.php'); ?>

    <h1>Add Animal</h1>
<div class="col-12 animal-form insert-form">
    <form method="post" action="/insert">
        <p class="form-text">Age: </p> <input type="text" name="age">
        <p class="form-text">Species: </p> <input type="text" name="species">
        <p class="form-text">Price: </p> <input type="text" name="price">
        <br>
        <input class="animal-btn btn btn-primary" type="submit" value="Submit">
    </form>
</div>

<?php require('partials/footer.php'); ?>







