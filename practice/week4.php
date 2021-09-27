<?php
# Set up cards - use 10 so you have an even number of cards to distribute
$cards= [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

#Initialize empty arrays for playerCards adn computerCards
$playerCards = [];
$computerCards = [];

# loop through the shuffle cards and check the 'mod' to distribute between the two players

  foreach ($cards as $key =>$value) {
 
    if (($key % 2) == 0) {
          $playerCards[] = $value;
    }
    else
    {
 
    $computerCards[] = $value;
}
    
}
# Verify results
echo "playerCards";
var_dump($playerCards);
echo "computerCards";
var_dump($computerCards);
echo "Hello from week4.php";