<?php
    $sectionLanguage = $this->language['section_about_maciel'];
?>

<div class="flex flex-justify-content-center flex-row" style="margin-bottom: 60px;">
    <img src="/assets/images/divisoria.svg" alt="" title="" >
</div>

<div id="section-about-maciel" 
    class="flex flex-row flex-justify-content-center flex-align-items-center">
    <div class="flex flex-column flex-justify-content-center flex-align-items-center">
        <img 
            src="/assets/images/foto__maciel.png" 
            alt="Foto de perfil do expert Maciel Lemos" 
            title="Maciel Lemos - Engenheiro Agrônomo">            
    </div>

    <div class="flex flex-column flex-align-items-start">
        <h1 class="section-title"><?php echo $sectionLanguage['title']; ?></h1>
        <a href="<?php echo $this->language['social_networks']['instagram'] ?>" 
        id="instagram-maciel"    
        class="text-orange text-strong">
            <?php echo $sectionLanguage['instagram_username']; ?>
        </a>

        <?php 
        foreach($sectionLanguage['paragraphs'] as $paragraph) {
            echo "<p>$paragraph</p>";
        }
        ?>
    </div>
</div>