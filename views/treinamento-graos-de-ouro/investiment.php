<?php
    $sectionLanguage = $this->language['section_investiment'];
?>

<div id="section-investiment"
    class="flex flex-column flex-justify-content-center flex-align-items-center">
   

    <div id="investiment-wrapper" class="flex flex-row flex-align-items-start">

        <!-- Badge container -->
        <div class="flex flex-column flex-justify-content-center flex-align-items-center" id="warranty-badge">
            <img 
                loading="lazy"
                src="/assets/images/selo__garantia.png" 
                alt="Selo de garantia incondicional de sete dias" 
                title="Garantia incondicional de sete dias">
            
            <p><?php echo $sectionLanguage['warranty_disclaimer']; ?></p>
        </div>

        <!-- Description container -->
        <div class="flex flex-column flex-justify-content-center flex-align-items-center" id="investiment-description">
            <h1 class="section-title"><?php echo $sectionLanguage['treinamento.title'] ?></h1>
            <h2 class="section-subtitle"><?php echo $sectionLanguage['description'] ?></h2>            

            <div id="price-container" class="flex flex-column flex-justify-content-center flex-align-items-center">
                <span id="price_introduction"><?php echo $sectionLanguage['treinamento.price_introduction'] ?></span>
                <span id="price_original"><?php echo $sectionLanguage['price_original'] ?></span>
                <span id="price_off"><?php echo $sectionLanguage['price_off'] ?></span>
            </div>
        </div>
    </div>
</div>