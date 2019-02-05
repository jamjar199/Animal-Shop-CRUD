<?php require('partials/header.php'); ?>

<h1>View All</h1>

<div class="col-12 action-bar">
    <form method="get" action="/insert">
        <button class="btn btn-primary" type="submit">Insert animal</button>
    </form>
</div>

<?php foreach($data as $animal){ ?>

    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 item-holder">
        <div class="item">
            <div class="item-pic">
                <img src="http://placekitten.com/250/200" class="img-fluid">
            </div>
            <div class="item-text-holder">
                <p class="item-text item-age">Age: <?= $animal['age']; ?></p>
                <p class="item-text item-species">Species: <?= $animal['species']; ?></p>
                <p class="item-text item-price">Price: <?= $animal['price']; ?></p>
                <div class="btn-holder">
                    <form method="get" action="/get">
                        <button class="animal-btn animal-select btn btn-primary" type="submit" name="id" value="<?= $animal['id']; ?>">Select</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php } ?>


<?php require('partials/footer.php'); ?>