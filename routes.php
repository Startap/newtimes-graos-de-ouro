<?php

use Components\Router;
use Components\Application;

/** Call methods inside PageController when hits some path mapped on argument 1 */
Router::route('/', '\Components\Controllers\PageController@getHomepage');
Router::route('/obrigado', '\Components\Controllers\PageController@getObrigado');
Router::route('/mentoria', '\Components\Controllers\PageController@getMentoria');

Router::route('/semana-alta-produtividade', '\Components\Controllers\PageController@getSemanaAltaProdutividade');
Router::route('/semana-alta-produtividade/obrigado', '\Components\Controllers\PageController@getSemanaAltaProdutividadeObrigado');