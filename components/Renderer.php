<?php

namespace Components;

use Components\Application;

/**
 * Renderer class has the responsibility of manage output to user.
 * Header, footer, partials and required string replacements should be
 * done here. It's like a View wrapper, more primitive.
 *
 * @package SimpleFramework
 * @author André Paul Grandsire
 * @version $Revision: 0.1 $
 */
class Renderer
{
    private $application;

    public function __construct(Application $app)
    {
        $this->application = $app;
    }

    /**
     * Render the header based on views/header and replace the variables of template
     * with their respective .env value. Here the first skeleton of our html is made.
     */
    public function drawHeader()
    {
        $headerFile = \file_get_contents($this->application->getAppPath('views/layout/header'));

        $headerFile  = str_replace(
            $this->application->titleConstants['appTitle'],
            $this->application->getTitle(),
            $headerFile
        );
        $headerFile  = str_replace(
            $this->application->titleConstants['appDescription'],
            $this->application->getDescription(),
            $headerFile
        );
        $headerFile  = str_replace(
            $this->application->titleConstants['appKeywords'],
            $this->application->getKeywords(),
            $headerFile
        );

        $styleSheetPath = 'assets/leads.css';
        if (Router::currentUrlHas('mentoria') or Router::currentUrlHas('treinamento-graos-de-ouro')) {
            $styleSheetPath = 'assets/mentoria.css';
        } 
        if (Router::currentUrlHas('semana-alta-produtividade')) {
            $styleSheetPath = 'assets/alta_produtividade.css';
        }

        $headerFile = str_replace('%applicationStyle%', $styleSheetPath, $headerFile);
        return $headerFile;
    }

    /**
     * After drawing all partials required to display our webpage, every controller method
     * should call drawFooter to finish rendering the hmlt body and close all tags.
     */
    public function drawFooter()
    {
        $scriptsTemplate = ($_ENV['ENVIRONMENT'] === 'production')
            ? \file_get_contents($this->application->getAppPath('views/layout/scripts'))
            : '';
        
        // Initialize variable
        $footerFilename = 'footer_index';
        if (Router::currentUrlHas('mentoria') 
            or Router::currentUrlHas('semana-alta-produtividade') 
            or Router::currentUrlHas('treinamento-graos-de-ouro')
        ) {
            $footerFilename = 'footer_semana_alta_produtividade';
        }
        
        $footerFileContent = \file_get_contents($this->application->getAppPath("views/layout/$footerFilename"));
        return str_replace('%scripts_template%', $scriptsTemplate, $footerFileContent);
    }
}
