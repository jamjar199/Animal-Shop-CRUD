<?php require('partials/header.php'); ?>

<h1>View Animal</h1>

<div class="col-12 item-holder">
    <div class="item item-single">
        <div class="item-pic">
            <img src="http://placekitten.com/250/200" class="img-fluid">
        </div>
        <div class="item-text-holder">
            <p class="item-text item-age">Age: <?= $animal['age']; ?></p>
            <p class="item-text item-species">Species: <?= $animal['species']; ?></p>
            <p class="item-text item-price">Price: <?= $animal['price']; ?></p>
            <div class="btn-holder">
                <form method="get" action="/edit">
                    <button class="animal-btn animal-edit btn btn-primary" type="submit" name="id" value="<?= $animal['id']; ?>">Edit</button>
                </form>
                <form method="post" action="/delete">
                    <button class="animal-btn animal-delete btn btn-danger" type="submit" name="id" value="<?= $animal['id']; ?>">Delete</button>
                </form>
                <?php if($animal['status'] == 1){ ?>
                    <form method="post" action="/deactivate">
                        <button class="animal-btn animal-deactivate btn btn-warning" type="submit" name="id" value="<?= $animal['id']; ?>">Deactivate</button>
                    </form>
                <?php }else{ ?>
                    <form method="post" action="/activate">
                        <button class="animal-btn animal-activate btn btn-success" type="submit" name="id" value="<?= $animal['id']; ?>">Activate</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php require('partials/footer.php'); ?>


