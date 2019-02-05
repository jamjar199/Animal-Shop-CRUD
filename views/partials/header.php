<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap 4 CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/views/css/style.css">
    <title>Welcome</title>
</head>
<body>

    <!-- Nav Bar -->
    <?php require('top-nav.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 header">
                <div class="col-12 title">
                    <h1><i class="fas fa-paw"></i> Animal Shop <i class="fas fa-paw"></i> </h1>
                </div>
                <div class="col-12 nav">
                    <div class="col-3 nav-item"><a class="nav-link" href="/">Home</a></div>
                    <div class="col-3 nav-item"><a class="nav-link" href="/insert">Add</a></div>
                    <div class="col-3 nav-item">Account</div>
                    <div class="col-3 nav-item">Help</div>
                </div>
            </div>
        </div>
        <div class="col-11 content">
            <div class="row">
                <?php if(!empty($responseText)){ ?>
                    <div class="col-12 message-box">
                        <div class="alert alert-primary" role="alert">
                            <div class="col-10"><p style="text-align: left"><?= $responseText; ?></p></div>
                            <div class="col-1"><p style="text-align: right"><i class="fas fa-times"></i></p></div>
                        </div>
                    </div>
                <?php } ?>
