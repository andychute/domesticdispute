<?php
    function register_name($name) {
        $_SESSION['name'] = $name;
    }

    if ($_REQUEST['action']) {
        switch ($_REQUEST['action']) {
            case 'buzz':
                
        }
    }
?>
<html>
    <head>
        <title>Domestic Dispute</title>
    </head>
    <body>
    <form method="post" action="index.php">
    <?php if ($_SESSION['name']) : ?>
        <input type="button" id="bing" name="bing" value="Buzz" />
    <?php else : ?>
        <input type="text" name="name" placeholder="Enter your name" />
        <input type="submit" value="Submit" />
    <?php endif; ?>
    </form>
    </body>
</html>