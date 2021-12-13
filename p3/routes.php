<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    # The path '/process' will invoke the game logic
    '/process' => ['AppController', 'process'],
    # The path '/hisotry' will display the summary of the game results
    '/history' => ['AppController', 'history'],
    # The path '/round' will show the details of a specific game round 
    '/round' => ['AppController', 'round']
];