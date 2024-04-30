<?php get_header(); ?>

<div id="single-blog">
    <!-- section hero -->
    <section class="hero" style="background-image:url(<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : ''; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- section main -->
    <section class="principal-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 main">
                    <h2>main</h2>
                    <?php echo get_the_content(); ?>
                </div>
                <div class="col-12 col-lg-4 releated">
                    <h2>releated</h2>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
</div>

<?php get_footer(); ?>