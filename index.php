<?php require __DIR__ . "/database.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Dischi</title>
    </head>

    <body>
       <div class="container">

            <header>
                <div class="box-header">
                    <img src="img/spotify-logo.png" alt="logo spotify">
                </div>
            </header>

            <div class="box-main">

                <div class="box-cards">

                    <?php foreach($database as $album) { ?>
                    <div class="card">
                        <img src="<?php echo $album["poster"]; ?>">
                        <h3><?php echo $album["title"]; ?></h3>
                        <span class="author"><?php echo $album["author"]; ?></span><br>
                        <span class="year"><?php echo $album["year"]; ?></span>
                    </div>
                    <?php } ?>

                </div>
                
            </div>
       </div> 
    </body>
</html>
