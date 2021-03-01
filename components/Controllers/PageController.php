<?php

namespace Components\Controllers;

class PageController extends ApplicationController
{ 

    public function getHomepage()
    {
        $this->renderViewport(['website/homepage']);
    }
}
