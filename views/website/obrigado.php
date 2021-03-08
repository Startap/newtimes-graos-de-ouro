<section class="flex-column flex-justify-center padding-tb-20">
    <div id="logo-container" class="margin-tb-20">
        <img src="assets/images/officeagro_logo.png" alt="Logomarca OfficeAgro">
    </div>

    <div id="digital-titans-container" class="flex-column flex-justify-center">
	<h1>Torne-se um <span class="text-color-accent text-weight-900">ESPECIALISTA</span>
        no cultivo do café especial, com alta produtividade.</h1>
        <div class="divisor"></div>
        <h2>Conheça mais e aproveite o máximo das aulas.</h2>
        <p class="text-color-light"><span class="text-color-accent text-weight-900">Entre agora</span> no nosso grupo do Telegram</p>
    </div>

    <div id="thankyou-call-to-action">
    <a target="_blank" style="text-decoration: none"
       href="https://t.me/officeagro">
        <button class="button-call-to-action">
            <img style="height: 2em; filter: invert(1); line-height: 2em; margin-right: 1em;" 
                src="assets/images/icons/telegram.svg" />
            ME LEVE AO GRUPO
        </button>
    </a>
</div>
</section>

<img src="assets/images/divisor.png" alt="">

<section class="flex-column flex-justify-center padding-tb-20">
    <?php
    $thankYouItens = [
        [
            'text' => "A essa hora você já deve ter recebido o<br> e-mail com a aula gratuita.<br><br>
            Lá dentro tem um link para você clicar e ser direcionado para aula. ",
            'image' => 'email.svg',
            'alt-image' => 'Ícone de e-mail em branco e fundo verde',
        ],
        [
            'text' => 'E para ficar sempre por dentro das novidades e em contato direto conosco, temos um grupo exclusivo no <b>Telegram</b>!',
            'image' => 'teacher.svg',
            'alt-image' => 'Ícone de professor com quadro ao fundo, em fundo verde',
        ],
       [
           'text' => 'Então entra lá agora para aproveitar ao máximo as aulas. Eu vou te ajudar a tornar-se um dos especialista em cultivo de café.',
           'image' => 'telegram.svg',
           'alt-image' => 'Ícone de aplicação Telegram',
       ],
    ];
    $htmlTag = <<<HTMLTag
        <div class="thankyou-row">
            <div class="thankyou-item-container"><p>%text%</p></div>
            <div class="thankyou-item-container">
                <img src="assets/images/icons/%icon%" alt="%alt-image%">
            </div>
        </div>
    HTMLTag;
    foreach ($thankYouItens as $row) {
        $currentTag = str_replace('%text%', $row['text'], $htmlTag);
        $currentTag = str_replace('%icon%', $row['image'], $currentTag);
        $currentTag = str_replace('%alt-image%', $row['alt-image'], $currentTag);
        echo $currentTag;
    }
    ?>

</section>
