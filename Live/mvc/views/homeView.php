<?php include './config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
</head>
<body>
    <?php require_once "./mvc/views/pages/header.php" ?>
    <div class="between row">
        <?php require_once "./mvc/views/pages/sidebar.php" ?>
        <?php 
            
            if(isset($data["page"]))
            {
                $page = $data["page"];
                unset($data["page"]);
            }
            else
            {   
                $page = "";
            }
            if(file_exists("./mvc/views/pages/".$page.".php"))
            {
                require_once "./mvc/views/pages/".$page.".php";
            }
            else
            {
                require_once "./mvc/views/pages/productCategory.php" ;
            }
        ?>
    </div>
    <?php require_once "./mvc/views/pages/footer.php" ?>
</body>
</html>