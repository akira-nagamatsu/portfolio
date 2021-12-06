<?php get_header(); ?>
    <main>
        <!-- ファーストビュー -->
        <section class="fv fv--page">
            <div class="fv__content">
                <p class="fv__text">WORKS</p>
            </div>
        </section>
        <!-- ファーストビューここまで -->

        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <!-- パンくずリスト -->

        <!-- Works -->
        <section class="works">
            <div class="section-inner section-inner--page">
                <div class="cards">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'order' => 'ASC',
                    );
                    $the_query = new WP_Query( $args );
                    if ($the_query->have_posts()):
                        while ($the_query->have_posts()) : $the_query->the_post();
                            get_template_part('template-parts/loop', 'work');
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="gradient-btn-wrapper works__gradient-btn-wrapper">
                    <a href="<?php echo esc_url(home_url()); ?>" class="gradient-btn gradient-btn--large"><span class="gradient-btn__content">トップページへ</span></a>
                </div>
            </div>
        </section>
        <!-- Worksここまで -->
    </main>
<?php get_footer(); ?>