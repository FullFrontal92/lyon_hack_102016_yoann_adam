<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'head.php' ?>
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
                            <?php include '../src/bddphoto.php';
                                showUser(getConnection());
                            ?>
                        </ul>
                    </li>
                </ul>
                <div class="col-xs-4 name">
                    <?php echo $_GET['user'].':  '.$_GET['vote'].' votes restants'; ?>
                </div>
                <div class="col-xs-4 name">
                    <?php
                        showWinner(getConnection());
                    ?>
                </div>
            </div>
            <div class="margi-left-right row">
                <?php
                    showSocks(getConnection());
                ?>
            </div>
        </div>
    </header>
</body>