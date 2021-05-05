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
        $this->renderViewport(['semana_alta_produtividade/coleta']);
    }

    public function getSemanaAltaProdutividadeObrigado() {
        $this->renderViewport(['semana_alta_produtividade/obrigado']);
    }

    public function getTreinamentoGraosDeOuro() 
    {
        $this->renderViewport([
            'treinamento-graos-de-ouro/headline',
            'treinamento-graos-de-ouro/testimonial',
            'treinamento-graos-de-ouro/targets',
            'treinamento-graos-de-ouro/modules',
            'website/sections/bonus',
            'treinamento-graos-de-ouro/investiment',
            'website/sections/maciel_lemos',
            'treinamento-graos-de-ouro/faq',
        ]);
    }
}
