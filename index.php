<?php include'include/var.php'; ?>
<?php include'include/quotes.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $appName;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css?<?php echo rand(); ?>">
</head>
<body>
    <h1><?php echo $appName;?></h1>
    <div class='quotes-container'>
    &ldquo;
    <?php echo $quote['quote'];?>
    <br>
    <strong>&hyphen; <?php echo $quote['author'];?></strong>
    &rdquo;
    </div>
    <footer>
     Design With &hearts; by <a href='//instagram.com/sedenucharles' rel='follow' class='link'><?php echo $developer;?></a> 
     <br>
     You can <a href='tel:<?php echo $developer_phone; ?>' class='link'>call Me</a> or <a href='mailto:<?php echo $developer_email; ?>' class='link'>Email Me</a>

    </footer>
</body>
</html>