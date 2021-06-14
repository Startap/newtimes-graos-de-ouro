<?php
$urlWhatsAppGroup = isset($_ENV['WHATSAPP_URL']) ? $_ENV['WHATSAPP_URL'] : 'https://chat.whatsapp.com/F760rbeNtxO8yw2nIVG0gM';
?>

<section class="section__content" id="topbar__section">
    <article>
        <h1>Tudo certo com sua inscrição</h1>
        <h2>Agora garanta sua vaga nos nossos grupos exclusivos.</h2>

    </article>

    <article class="ty-social-network-wrapper">
        <h2>Nestes grupo vou compartilhar guias em PDF, avisos, bônus especiais e muito mais.</h2>
        <h3>Clique nos botões abaixos para garantir seu acesso</h3>

        <div class="ty-social-network-card-containers">
            <a href="<?php echo $urlWhatsAppGroup; ?>" target="_blank" rel="norel nofollow" class="whatsapp ty-social-network-card">
                <span class="iconify" data-icon="logos:whatsapp" data-inline="false"></span>
                <span>Participe do nosso grupo no WhatsApp</span>
            </a>
            <a href="https://t.me/officeagro" target="_blank" rel="norel nofollow" class="telegram ty-social-network-card">
                <span class="iconify" data-icon="logos:telegram" data-inline="false"></span>
                <span>Entre em nosso canal do Telegram</span>
            </a>
        </div>
    </article>
</section>