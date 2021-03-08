<?php

namespace Components\Controllers;

class PageController extends ApplicationController
{ 

    public function getMentoria()
    {
        $this->renderViewport(['website/homepage']);
    }
}
