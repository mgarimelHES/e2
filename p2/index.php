<!doctype html>
<html lang='en'>

<head>
    <title>Project 2 - Rock, Paper & Scissors</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Project 2 - Rock, Paper & Scissors</h1>

    <div id='instructions'>
        <h2>Instructions</h2>
        <p>Select Rock, Paper or Scissors.</p>
        <p>Computer will pick its move randomly and if they match, it will be a tie. Otherwise the game winner will be
            decided based on the game rule - Rock beats Scissors, Scissors beats Paper and Paper beats Rock!</p>
    </div>
    <form method='POST' action='process.php'>

        <p>Play with Computer with your Pick!</p>

        <label for='userPick'>Your Pick:</label>
        <input type="radio" id='Rock' name="userPick" value="Rock" class='game' required="required"><label
            for='Rock'>Rock</label>
        <input type="radio" id='Paper' name="userPick" value="Paper" class='game' required="required"><label
            for='Paper'>Paper</label>
        <input type="radio" id='Scissors' name="userPick" value="Scissors" class='game' required="required"><label
            for='Scissors'>Scissors</label>

        <button type='submit'>Play</button>
    </form>

</body>

</html>