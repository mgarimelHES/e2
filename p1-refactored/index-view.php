<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Project 1</h1>
    <h2>Mechanics of the Game - Rock, Paper & Scissors</h2>
    <ul>
        <li>Two Players will throw randomly one of the moves - Rock, Paper or Scissors</li>
        <li>If the two moves are equal, the game is tied and players may need to throw another random move</li>
        <li>If the two moves are not equal, the winner will be decided based on the game rules as follows</li>
        <li>Rock beats Scissors, Scissors beats Paper and Paper beats Rock</li>
        <li>Finally the game winner will be declared along with their moves!</li>
    </ul>
    <h2>Results</h2>
    <ul>
        <li>PlayerA move is <?php echo $playerA_move ?> </li>
        <li>PlayerB move is <?php echo $playerB_move ?> </li>
        <li>Winner is <?php echo $winner ?></li>
    </ul>
</body>

</html>