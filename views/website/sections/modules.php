<?php
    $sectionLanguage = $this->language['section_modules'];

    function formatModuleSchedule($startDate, $endDate) {
        $dateFormat = 'd/M';
        return date($dateFormat, strtotime($startDate)) . ' a ' . date($dateFormat, strtotime($endDate));
    }

    function formatModuleTitle($module) {
        return $module['index_number'] . ' - ' . formatModuleSchedule($module['start_date'], $module['end_date']);
    }
?>

<div id="section-modules"
    class="flex flex-column flex-justify-content-center flex-align-items-center">
    <h1 class="section-title"><?php echo $sectionLanguage['title'] ?></h1>
    

    <div id="modules-wrapper" class="flex flex-row flex-align-items-center">
        <?php 
            $targetElement = <<<ModuleHtmlElement
                <div class="module-item flex flex-column flex-align-items-center">
                    <div class="module-title">%module_title</div>
                    <div class="module-description">%module_description</div>
                </div>
            ModuleHtmlElement;

            foreach($sectionLanguage['modules'] as $module) {
                $moduleTitle = formatModuleTitle($module);
                $moduleDescription = $module['description'];

                $element = str_replace('%module_title', $moduleTitle, $targetElement);
                $element = str_replace('%module_description', $moduleDescription, $element);

                echo $element;
            }
        ?>
    </div>
</div>