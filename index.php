<?php include'include/var.php'; ?>
<?php include'include/quotes.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $app_name;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css?<?= rand(); ?>">
</head>
<body>
    <h1><?= $app_name;?></h1>
    <div class='quotes-container'>
    &ldquo;
    <?= $quote['quote'];?>
    <br>
    <strong>&hyphen; <?= $quote['author'];?></strong>
    &rdquo;
    </div>
    <footer>
     Design With &hearts; by <a href='//instagram.com/sedenucharles' rel='follow' class='link'><?= $dev_name;?></a> 
     <br>
     You can <a href='tel:<?= $dev_phone; ?>' class='link'>call Me</a> or <a href='mailto:<?= $dev_email; ?>' class='link'>Email Me</a>

    </footer>
</body>
</html>
