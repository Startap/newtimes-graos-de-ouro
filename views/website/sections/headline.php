<div id="headline-container">
    <div id="video-container">
        <div class="youtube-video">
            <div class="youtube-iframe-container">
                <iframe 
                    class="youtube-iframe"
                    width="988" 
                    height="556"
                    src="https://www.youtube.com/embed/<?php echo $this->language['section_headline']['main_youtube_video'] ?>" 
                    frameborder="0" 
                    allow="accelerometer; encrypted-media; gyroscope;" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <div id="call-to-action-container">
        <div class="section-title-container">
            <h1 class="section-title"><?php echo $this->language['section_headline']['headline'] ?></h1>
            <h2 class="section-subtitle"><?php echo $this->language['section_headline']['description'] ?></h2>
        </div>

        
        <a target="_blank" style="text-decoration: none;" href="<?php echo $this->language['section_headline']['infoproduct_url'] ?>">
            <button id="btn-cta"><?php echo $this->language['section_headline']['button_text'] ?></button>
        </a>
    </div>
</div>

<div class="separador-amarelo"></div>