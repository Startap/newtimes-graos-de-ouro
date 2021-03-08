<?php

use Components\Router;
use Components\Application;

/** Call methods inside PageController when hits some path mapped on argument 1 */
Router::route('/mentoria', '\Components\Controllers\PageController@getMentoria');