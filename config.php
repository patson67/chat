
<!DOCTYPE html>
<html lang="fr">
    <head>
    <head>
        <meta charset="UTF-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
        <!-- <link href='https://fonts.googleapis.com/css?family=Faster+One' rel='stylesheet' type='text/css'> -->
        <!-- <link rel="stylesheet" type="text/css" href="<?= CSS_PATH ?>bootstrap.min.css" /> -->
        <link rel="stylesheet" type="text/css" href="public/style.css" />
        <!-- <link rel="stylesheet/less" type="text/css" href="<?= CSS_PATH ?>style.less" /> -->
        <!--<script src="<?= JS_PATH ?>jquery-2.2.3.min.js"></script>
        <script src="<?= JS_PATH ?>bootstrap.min.js"></script>
        <script src="<?= JS_PATH ?>main.js"></script>
        <!--<script src="<?= JS_PATH ?>less.min.js"></script> -->
        <title>Musikdream</title>
    </head>
    </head>
    <body>
        <div class="container">

            <?php require("apps/header.php"); ?>

            <div class="">   
            <?php 
                require("apps/chat.php"); 
                require("apps/footer.php");
            ?>         
            </div>

        </div>
    </body>
</html>