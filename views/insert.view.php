<?php require('partials/header.php'); ?>

    <p class="response"><?=$responseText;?></p>

    <h1>Insert</h1>

    <form method="post" action="/insert">
        <p>Age: </p> <input type="text" name="age">
        <p>Species: </p> <input type="text" name="species">
        <p>Price: </p> <input type="text" name="price">
        <br>
        <input type="submit" value="Submit">
    </form>

<?php require('partials/footer.php'); ?>