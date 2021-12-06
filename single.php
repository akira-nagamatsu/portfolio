<?php get_header(); ?>
    <main>
        <?php
        if (have_posts()):
            while (have_posts()) : the_post();
        ?>
            <!-- ファーストビュー -->
            <section class="fv fv--page">
                <div class="fv__content">
                    <p class="fv__text"><?php the_title(); ?></p>
                </div>
            </section>
            <!-- ファーストビューここまで -->

            <!-- パンくずリスト -->
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <!-- パンくずリスト -->

            <!-- Works -->
            <section class="work-detail">
                <div class="section-inner section-inner--page">
                    <?php the_content(); ?>
                    <dl class="def-list work-detail__def-list">
                        <div class="def-list__row">
                            <dt class="def-list__term">サイト名：</dt>
                            <dd class="def-list__desc"><?php the_field('name'); ?></dd>
                        </div>
                        <div class="def-list__row">
                            <dt class="def-list__term">担当：</dt>
                            <dd class="def-list__desc"><?php the_field('tanntou'); ?></dd>
                        </div>
                        <div class="def-list__row">
                            <dt class="def-list__term">制作時間：</dt>
                            <dd class="def-list__desc">約<?php the_field('time'); ?>時間</dd>
                        </div>
                        <div class="def-list__row">
                            <dt class="def-list__term">レスポンシブ：</dt>
                            <dd class="def-list__desc"><?php the_field('responsive'); ?></dd>
                        </div>
                        <div class="def-list__row">
                            <dt class="def-list__term">説明：</dt>
                            <dd class="def-list__desc"><?php the_field('description'); ?></dd>
                        </div>
                    </dl>
                    <div class="gradient-btn-wrapper work-detail__gradient-btn-wrapper">
                        <a href="<?php the_field('site-url'); ?>" class="gradient-btn gradient-btn--pink gradient-btn--large" target="blank"><span class="gradient-btn__content">サイトへ</span></a>
                    </div>
                    <div class="gradient-btn-wrapper work-detail__gradient-btn-wrapper">
                        <a href="<?php echo esc_url(home_url('works')); ?>" class="gradient-btn"><span class="gradient-btn__content">一覧へ</span></a>
                    </div>
                </div>
            </section>
            <!-- Worksここまで -->
        <?php
            endwhile;
        endif;
        ?>
    </main>
<?php get_footer(); ?>