<?php
    $sectionLanguage = $this->language['section_targets']
?>

<div id="section-targets"
    class="flex flex-column flex-justify-content-center flex-align-items-center">
    <h1 class="section-title"><?php echo $sectionLanguage['treinamento.title'] ?></h1>
    

    <div id="targets-wrapper" class="flex flex-row flex-justify-content-center flex-align-items-center">
        <?php 
            $targetElement = <<<TargetHtmlElement
                <div class="target-item flex flex-row flex-justify-content-center flex-align-items-center">
                    <div class="target-text">%target_description</div>
                    <div class="target-icon"></div>
                </div>
            TargetHtmlElement;

            foreach($sectionLanguage['targets'] as $target) {
                echo str_replace('%target_description', $target, $targetElement);
            }
        ?>
    </div>
</div>