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
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <?php include 'header.php' ?>

        <!--test camera-->
        <video id="video"></video>
        <button id="startbutton">Prendre une photo</button>
        <canvas id="canvas"></canvas>
        <img onclick="test();" src="http://placekitten.com/g/320/261" id="photo" alt="photo">
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
    </div>
</body>