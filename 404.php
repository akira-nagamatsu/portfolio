<?php get_header(); ?>
    <main>
        <!-- ファーストビュー -->
        <section class="fv fv--page">
            <div class="fv__content">
                <p class="fv__text">404 NOT FOUND</p>
            </div>
        </section>
        <!-- ファーストビューここまで -->
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <!-- パンくずリスト -->
        <section class="not-found">
            <div class="section-inner section-inner--page">
                <p>申し訳ございませんが、お探しページは見つかりませんでした。以下のリンクからトップページにお戻りください。</p>
                <div class="gradient-btn-wrapper works__gradient-btn-wrapper">
                    <a href="<?php echo esc_url(home_url()); ?>" class="gradient-btn gradient-btn--large"><span class="gradient-btn__content">トップページへ</span></a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>