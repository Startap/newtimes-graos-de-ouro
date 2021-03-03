<div id="section-testimonial">
    <div class="title-container">
        <h1 class="section-title"><?php echo $this->language['section_testimonials']['title']; ?></h1>
        <h2 class="section-subtitle"><?php echo $this->language['section_testimonials']['call_to_action']; ?></h2>
    </div>


    <?php 
    $youtubeEmbedElement = <<<HtmlEmbedYoutube
    <div class="youtube-video">
        <div class="youtube-iframe-container">
            <iframe 
                class="youtube-iframe"
                width="988" 
                height="556"
                src="https://www.youtube.com/embed/%youtubeId" 
                frameborder="0" 
                allow="accelerometer; encrypted-media; gyroscope;" 
                allowfullscreen>
            </iframe>
        </div>
    </div>
    HtmlEmbedYoutube;

    $youtubeVideosFromEnv = $_ENV['YOUTUBE_VIDEOS'];
    $youtubeVideoIds = explode(',', $youtubeVideosFromEnv);
    
    ?>    

    <div id="testimonial-grade-container">
        <?php 
        foreach ($youtubeVideoIds as $videoId) {
            echo str_replace('%youtubeId', $videoId, $youtubeEmbedElement);
        }
        ?>
    </div>
    
</div>
