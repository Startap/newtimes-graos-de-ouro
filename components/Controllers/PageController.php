<?php

namespace Components\Controllers;

class PageController extends ApplicationController
{ 

    public function getHomepage() {
        $this->renderViewport(['website/captura']);
    }

    public function getObrigado() {
        $this->renderViewport(['website/obrigado']);
    }

    public function getMentoria()
    {
        $this->renderViewport(['website/mentoria']);
    }

    public function getSemanaAltaProdutividadeIndex() {
        $this->renderViewport(['semana_alta_produtividade/index']);
    }

    public function getSemanaAltaProdutividadeObrigado() {
        $this->renderViewport(['semana_alta_produtividade/obrigado']);
    }
}
