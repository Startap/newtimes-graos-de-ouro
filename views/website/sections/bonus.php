<?php
    $sectionLanguage = $this->language['section_bonus_decsription'];
?>

<div id="section-bonus-descrition" class="flex flex-column flex-justify-content-center flex-align-items-center">
    <h1 class="section-title"><?php echo $sectionLanguage['title']; ?></h1>
        
    <?php 
        $bonusElement = <<<BonusHtmlElement
            <div class="module-item bonus-shadow flex flex-column flex-align-items-start">
                <div class="flex flex-column flex-align-items-center module-title-container">
                    <h2 class="module-title">%title</h2>
                    <span class="module-date">%price</span>
                </div>
                <ul class="module-description">
                    %module_description
                </ul>
            </div>
        BonusHtmlElement;
    ?>

    <div id="bonus-wrapper" class="flex flex-row flex-align-items-start flex-justify-content-center">                
        <div class="flex flex-column flex-justify-content-center flex-align-items-start flex-item-two-column">
            <?php 
                $moduleBonus = $sectionLanguage['modules']['bonus_1'];
                $listItems = [];

                foreach($moduleBonus['content_items'] as $bonusItem) {
                    $listItems[] = "<li>$bonusItem</li>";                    
                }

                $htmlElement = str_replace('%title', $moduleBonus['title'], $bonusElement);
                $htmlElement = str_replace('%price', $moduleBonus['price'], $htmlElement);
                $htmlElement = str_replace('%module_description', join('', $listItems), $htmlElement);
                echo $htmlElement
            ?>
        </div>

        <div class="flex flex-column flex-justify-content-center flex-align-items-start flex-item-two-column">
            <?php 
                $moduleBonus = $sectionLanguage['modules']['bonus_2'];
                $listItems = [];

                foreach($moduleBonus['content_items'] as $bonusItem) {
                    $listItems[] = "<li>$bonusItem</li>";                    
                }

                $htmlElement = str_replace('%title', $moduleBonus['title'], $bonusElement);
                $htmlElement = str_replace('%price', $moduleBonus['price'], $htmlElement);
                $htmlElement = str_replace('%module_description', join('', $listItems), $htmlElement);
                echo $htmlElement;
            
                $moduleBonus = $sectionLanguage['modules']['bonus_3'];
                $listItems = [];

                foreach($moduleBonus['content_items'] as $bonusItem) {
                    $listItems[] = "<li>$bonusItem</li>";                    
                }

                $htmlElement = str_replace('%title', $moduleBonus['title'], $bonusElement);
                $htmlElement = str_replace('%price', $moduleBonus['price'], $htmlElement);
                $htmlElement = str_replace('%module_description', join('', $listItems), $htmlElement);
                echo $htmlElement;
            ?>
        </div>
    </div>
</div>