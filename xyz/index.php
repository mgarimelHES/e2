<?php
require __DIR__.'/vendor/autoload.php';


use App\Debug;

Debug::dump(['a', 'b', 'c', ['x', 'y', 'Z']]);