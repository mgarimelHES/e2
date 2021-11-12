<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    # added a new method 'contact'
    '/contact' => ['AppController', 'contact'],
    # practice 'about' as per assignment 10
    '/about' => ['AppController', 'about'],
    '/products' => ['ProductsController', 'index'],
    '/product' => ['ProductsController', 'show']
];