<?php
    $sectionLanguage = $this->language['section_modules'];

    function formatModuleSchedule($startDate, $endDate) {
        $dateFormat = 'd/m';
        return date($dateFormat, strtotime($startDate)) . ' a ' . date($dateFormat, strtotime($endDate));
    }

    function formatModuleTitle($module) {
        return $module['index_number'];
         //. ' - ' . formatModuleSchedule($module['start_date'], $module['end_date'])
    }
?>

<div id="section-modules"
    class="flex flex-column flex-justify-content-center flex-align-items-center">
    <h1 class="section-title"><?php echo $sectionLanguage['title'] ?></h1>
    

    <div id="modules-wrapper" class="flex flex-row flex-align-items-start">
        <?php 
            $targetElement = <<<ModuleHtmlElement
                <div class="module-item flex flex-column flex-align-items-start">
                    <div class="flex flex-row flex-align-items-center module-title-container">
                        <h2 class="module-title">%module_title</h2>
                        <span class="module-date">%module_date</span>
                    </div>
                    <p class="module-description">%module_description</p>
                </div>
            ModuleHtmlElement;

            foreach($sectionLanguage['modules'] as $module) {
                $moduleTitle = formatModuleTitle($module);
                $moduleDescription = $module['description'];

                $element = str_replace('%module_title', $moduleTitle, $targetElement);
                $element = str_replace('%module_date', formatModuleSchedule($module['start_date'], $module['end_date']), $element);
                $element = str_replace('%module_description', $moduleDescription, $element);

                echo $element;
            }
        ?>
    </div>
</div>