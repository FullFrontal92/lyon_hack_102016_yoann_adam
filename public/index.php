<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'head.php' ?>
</head>
<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="../src/upload.php">
                User: <input type="text" name="User" value="">
                Urlp: <input type="text" name="Urlp" value="">
                Votecontest: <input type="text" name="Votecontest" value="">
                Voteleft: <input type="text" name="Voteleft" value="">
                Tovote: <input type="text" name="Tovote" value="">
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="row">
        </div>
    </div>
</body>