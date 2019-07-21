<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <div class="reveal">
        <div class="slides">            
            <?php while ( have_posts() ) : the_post(); ?>
            <section data-background="<?php echo the_post_thumbnail_url()?>">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </section>
            <?php endwhile; ?>
            <section data-state="reload-state">
            </section>
        </div>
    </div>
    <script>
        Reveal.initialize({
            width: 1920,
            height: 1080,
            controls: false,
            center: true,
            autoPlayMedia: true,
            preloadIframes: true,
            progress: false,
            transition: 'fade',
            autoSlide: 4000,
            autoSlideStoppable: false,
            dependencies: [
                { src: '<?php echo plugins_url( 'reveal.js/lib/js/classList.js', __FILE__ ); ?>', condition: function() { return !document.body.classList; } },
                { src: '<?php echo plugins_url( 'reveal.js/plugin/markdown/marked.js', __FILE__ ); ?>', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                { src: '<?php echo plugins_url( 'reveal.js/plugin/markdown/markdown.js', __FILE__ ); ?>', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
            ]
        });

        Reveal.addEventListener('reload-state', function() {
            window.location.reload();
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>