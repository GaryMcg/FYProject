<!DOCTYPE html>
<html lang="en">
<head>
    <title>FYProject</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link href="stylesheet/styles.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>Weather Station</h1>
</div>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
        <a href="chart.php" target="_blank">charts</a>
        <a href="DataBase.php" target="_blank">DataBase</a>
        <a href="default.asp" target="_blank">MetErian</a>
        <a href="default.asp" target="_blank">here put something</a>
    </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Tab 1</h3>
            <?php
            echo "Hello World\n";
            echo "Today is " . date("Y/m/d") . "<br>";
            echo "Today is " . date("Y.m.d") . "<br>";
            echo "Today is " . date("Y-m-d") . "<br>";
            echo "Today is " . date("l");
            echo "The time is " . date("h:i:sa");
            ?>
        </div>
        <div class="col-sm-4">
            <h3>Tab 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
            <h3>Tab 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
    </div>
</div>

</body>
</html>
