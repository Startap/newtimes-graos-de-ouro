<?php 
$sectionLanguage = $this->language['section_faq'];

$faqHtmlElement = <<<FaqHtmlElement
    <div class="faq-card">
        <div class="faq-question"><span>%faq_question</span></div>
        <div class="faq-answer"><span>%faq_answer</span></div>
    </div>
FaqHtmlElement;

$allFaqs = [];
foreach($sectionLanguage['questions'] as $faqItem) {
    $currentFaq = $faqHtmlElement;
    $currentFaq = str_replace('%faq_question', $faqItem['pergunta'], $currentFaq);
    $currentFaq = str_replace('%faq_answer', $faqItem['resposta'], $currentFaq);
    $allFaqs[] = $currentFaq;
}
?>

<div  id="section-faq-container" class="flex flex-column flex-justify-content-center flex-align-items-center">    
    <h1 class="section-title"><?php echo $sectionLanguage['title']; ?></h1>

    <div id="faq-container">
        <?php echo join('', $allFaqs); ?>
    </div>

</div>

<div  id="section-disclaimer-container" class="flex flex-column flex-justify-content-center flex-align-items-center">    
    <h1 class="section-title"><?php echo $this->language['disclaimer_resultado']['title'] ?></h1>

    <div id="disclaimer-badge">
        <p><?php echo $this->language['disclaimer_resultado']['disclaimer']; ?></p>
    </div>

</div>