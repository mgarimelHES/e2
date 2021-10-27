<!doctype html>
<html lang='en'>

<head>
    <title>Project 2 - Rock, Paper & Scissors</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Project 2 - Rock, Paper & Scissors</h1>
    <h2>Results</h2>

    <div id='results'>

        <?php if($win =='You') { ?>
        Congratulations! You Won the Game!!
        <?php } else if ($win == 'Computer'){ ?>
        Sorry, you lost :-( , please play again!!
        <?php } else if ($win =='Tied'){ ?>
        Game is tied! please play again!!
        <?php }
        ?>

        <ul>
            <li>Your move is <?php echo $player_move ?> </li>
            <li>Computer move is <?php echo $computer_move ?> </li>
            <li>Winner - <?php echo $win ?></li>
        </ul>

        <br><a href="index.php">Do you want to play again</a></br>
    </div>

</body>

</html>