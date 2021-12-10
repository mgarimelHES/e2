<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    # The path '/process' will invoke the 'process' method within the 'AppController'
    '/process' => ['AppController', 'process'],
    '/history' => ['AppController', 'history'],
    '/round' => ['AppController', 'round']
];