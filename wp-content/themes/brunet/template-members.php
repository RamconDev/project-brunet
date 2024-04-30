<?php
/*
*   Template Name: Single Miembros
*/
?>

<?php
    function get_members( $slug ) {
        $loop = new WP_Query(array(
            'post_type' => 'miembros',
            'tax_query' => array(
                array(
                    'taxonomy' => 'jerarquia', // Taxonomy name
                    'field' => 'slug', // You can use 'id', 'slug', or 'name'
                    'terms' => $slug, // Taxonomy term
                ),
            ),
        ));

        // echo "<pre>";
        // var_dump( $loop );
        // echo "</pre>";

        if( $loop->have_posts() ) :
            while( $loop->have_posts() ) : $loop->the_post();
        ?>
                <div class="card" style="order:<?php echo get_field('order'); ?>;">
                    <div class="headshot" style="background-image:url(<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri().'/assets/img/logob.png'; ?>); <?php echo has_post_thumbnail() ? 'background-size:cover;' : ''; ?>">
                    </div>
                    <div class="info">
                        <h3><?php echo get_the_title(); ?></h3>

                        <?php if( get_field('order') ) : ?>
                            <p><?php echo get_field('miembro') . " "; echo get_field('order') != '0' ? get_field('order') : ''; ?></p>
                        <?php endif; ?>
                        <?php if( get_field('date') ) : ?>
                            <p>Año de ingreso: <?php echo get_field('date'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
    }
?>

<?php get_header(); ?>

<div id="members">
    <!-- hero -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- section members -->
    <section class="members">
        <div class="container">
            <div class="group-name">
                <h2>Junta Coordinadora</h2>
                <span class="dashicons dashicons-arrow-down-alt2"></span>
            </div>
            <div class="group junta-coordinadora">
                <?php get_members( 'junta-coordinadora' ); ?>
            </div>
            <div class="group-name">
                <h2>Miembros Activo</h2>
                <span class="dashicons dashicons-arrow-down-alt2"></span>
            </div>
            <div class="group activos">
                <?php get_members( 'activo' ); ?>
            </div>
            <div class="group-name">
                <h2>Acesor Academico</h2>
                <span class="dashicons dashicons-arrow-down-alt2"></span>
            </div>
            <div class="group acesor">
                <?php get_members( 'asesor-academico' ); ?>
            </div>
            <div class="group-name">
                <h2>Miembros Reserva</h2>
                <span class="dashicons dashicons-arrow-down-alt2"></span>
            </div>
            <div class="group reservas">
                <?php get_members( 'reserva' ); ?>
            </div>
        </div>
    </section>
    <!--  -->
</div>

<?php get_footer(); ?>