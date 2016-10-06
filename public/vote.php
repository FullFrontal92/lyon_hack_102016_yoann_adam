<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Concours WCS</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylesheet.css"/>
    <script type="text/javascript" src="js/hack.js"></script>
</head>
<body>
    <header>
        <?php include 'header.php' ?>
        <div class="container-fluid">
            <div class="margi-left-right row">
                <ul class="margin-top nav navbar-nav col-xs-4">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            Names
                            <span class="caret"></span>
                        </a>
                        <ul class="max-height dropdown-menu" role="menu">
                            <?php include '../src/bdd.php';
                                showMyDb(getConnection());
                            ?>
                        </ul>
                    </li>
                </ul>
                <div id="nameSelected" class="col-xs-8 name">Jean Clement</div>
            </div>
            <div class="margi-left-right row">
                <img class="col-xs-6 col-md-2 margin-top" src="images/socks.jpg">
                <img class="col-xs-6 col-md-2 margin-top" src="images/socks.jpg">
                <img class="col-xs-6 col-md-2 margin-top" src="images/socks.jpg">
                <img class="col-xs-6 col-md-2 margin-top" src="images/socks.jpg">
                <img class="col-xs-6 col-md-2 margin-top" src="images/socks.jpg">
                <img class="col-xs-6 col-md-2 margin-top" src="images/socks.jpg">
                <img class="col-xs-6 col-md-2 margin-top" src="images/socks.jpg">
                <img class="col-xs-6 col-md-2 margin-top" src="images/socks.jpg">
                <img class="col-xs-6 col-md-2 margin-top" src="images/socks.jpg">
                <img class="col-xs-6 col-md-2 margin-top" src="images/socks.jpg">
            </div>
        </div>
    </header>
</body>