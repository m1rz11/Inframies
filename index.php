<!DOCTYPE html>
<html lang="sk-SK">
<head>
	<link rel="shortcut icon" href="favicon.ico"/>
    <title>InframiesTD</title>
    <meta charset="utf-8">

    <script src="//cdn.jsdelivr.net/npm/phaser@3.24.1/dist/phaser.min.js"></script>
    <script src="scripts/game.js"></script>

    <style>
        body{
            font-family: Arial,sans-serif;
            background-color: #140A46;
            margin:0;
            text-align:center;
            color: #FFF;
        }
        #main-game{
            margin:auto;
        }
        @font-face {
            font-family: font1;
            src: url('assets/fonts/hachicro.ttf');
        }
        @font-face {
            font-family: font2;
            src: url('assets/fonts/SourceSansPro-Bold.ttf');
        }
    </style>
</head>
<body>
    <!-- game -->
    <div id="main-game">
    </div>

    <!-- php only -->
    <div id="hsForm">
    </div>

    <br>
    <button style='text-decoration:none; color:black; padding: 5px;'>
    <a style='text-decoration:none; color:black; padding: 5px;' href="highScoreMain.php" target="_blank">HALL OF FAME</a>
    </button>
    <button style='text-decoration:none; color:black; padding: 5px;'>
        <a style='text-decoration:none; color:black; padding: 5px;' href="classic.html">Play 1.0.5</a>
    </button>
    <br>
    <br>
</body>
</html>