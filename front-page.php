<?php get_header(); ?>
    <main>
        <!-- ファーストビュー -->
        <section class="fv">
            <div class="fv__content">
                <p class="fv__text">Hello!<br>My name is...</p>
            </div>
            <div class="arrow fv__arrow">
                <span class="arrow__line"></span>
                <p class="arrow__text">scroll</p>
            </div>
        </section>
        <!-- ファーストビューここまで -->

        <!-- About -->
        <section id="about" class="about">
            <div class="section-inner">
                <div class="section-title about__section-title">
                    <h2 class="section-title__text">ABOUT</h2>
                </div>
                <div class="about__inner">
                    <p class="about__img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile.jpg" class="about__img" alt="顔写真">
                    </p>
                    <div class="about__content">
                        <p class="about__text">
                            はじめまして！WEBコーダーの永松彰です！<br>
                            現在は工業大学に通っており、プログラミング（CやJava）を勉強しています！
                            今年は基本情報技術者試験も取得しました。<br>
                            犬が好き。旅行も好き。あ、もちろんコーディングも好きです（笑）。<br>
                            綺麗なコードでスピード納品します！
                        </p>
                        <div class="sns-links">
                            <a href="mailto:nagamatsu19073@gmail.com" class="sns-link sns-link--mail"><i class="far fa-envelope"></i></a>
                            <a href="https://github.com/akira-nagamatsu" class="sns-link sns-link--github" target="blank"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Aboutここまで -->

        <!-- Skills -->
        <section id="my-skills" class="my-skills">
            <div class="section-inner">
                <div class="section-title section-title--reverse">
                    <h2 class="section-title__text">SKILLS</h2>
                </div>
                <p class="my-skills__text">わたしの強みは<br>圧倒的なコーディング力と<br>WP構築です</p>
                <div class="skills">
                    <!-- HTMLアイコン -->
                    <a href="#modal-01" class="skill">
                        <figure class="skill__img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/html-5.svg" class="skill__img" alt="HTMLロゴ">
                        </figure>
                        <p class="skill__title">HTML</p>
                    </a>
                    <!-- HTMLモーダル -->
                    <div class="modal" id="modal-01">
                        <a href="#!" class="modal__overlay"></a>
                        <div class="modal__window">
                          <div class="modal__content">
                            <p class="modal__heading">HTML5</p>
                            <p class="modal__text">SEOを考慮した適切なマークアップが可能です。</p>
                          </div>
                          <a href="#!" class="modal__close">×</a>
                        </div>
                    </div>
                    <!-- CSSアイコン -->
                    <a href="#modal-02" class="skill">
                        <figure class="skill__img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/css-3.svg" class="skill__img" alt="CSSロゴ">
                        </figure>
                        <p class="skill__title">CSS</p>
                    </a>
                    <!-- CSSモーダル -->
                    <div class="modal" id="modal-02">
                        <a href="#!" class="modal__overlay"></a>
                        <div class="modal__window">
                          <div class="modal__content">
                            <p class="modal__heading">CSS</p>
                            <p class="modal__text">見た目が再現できていたらいいという時代は終わりです。変更に強い書き方を心がけています。BEMを使うことが多いです。</p>
                          </div>
                          <a href="#!" class="modal__close">×</a>
                        </div>
                    </div>
                    <!-- JSアイコン -->
                    <a href="#modal-03" class="skill">
                        <figure class="skill__img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/javascript.svg" class="skill__img" alt="JavaScriptロゴ">
                        </figure>
                        <p class="skill__title">JavaScript</p>
                    </a>
                    <!-- JSモーダル -->
                    <div class="modal" id="modal-03">
                        <a href="#!" class="modal__overlay"></a>
                        <div class="modal__window">
                          <div class="modal__content">
                            <p class="modal__heading">JavaScript</p>
                            <p class="modal__text">jQueryを使ってサイトに動きをつけることができます。</p>
                          </div>
                          <a href="#!" class="modal__close">×</a>
                        </div>
                    </div>
                    <!-- sassアイコン -->
                    <a href="#modal-04" class="skill">
                        <figure class="skill__img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sass.svg" class="skill__img" alt="sassロゴ">
                        </figure>
                        <p class="skill__title">sass</p>
                    </a>
                    <!-- sassモーダル -->
                    <div class="modal" id="modal-04">
                        <a href="#!" class="modal__overlay"></a>
                        <div class="modal__window">
                          <div class="modal__content">
                            <p class="modal__heading">sass</p>
                            <p class="modal__text">Dart Sassを使っています。sassを使って保守性の高いコードが書けます。</p>
                          </div>
                          <a href="#!" class="modal__close">×</a>
                        </div>
                    </div>
                    <!-- WordPressアイコン -->
                    <a href="#modal-05" class="skill">
                        <figure class="skill__img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wordpress.svg" class="skill__img" alt="WordPressロゴ">
                        </figure>
                        <p class="skill__title">WordPress</p>
                    </a>
                    <!-- WordPressモーダル -->
                    <div class="modal" id="modal-05">
                        <a href="#!" class="modal__overlay"></a>
                        <div class="modal__window">
                          <div class="modal__content">
                            <p class="modal__heading">WordPress</p>
                            <p class="modal__text">サーバへのインストールからテーマのカスタマイズ、自作テーマの作成までお任せください。</p>
                          </div>
                          <a href="#!" class="modal__close">×</a>
                        </div>
                    </div>
                    <!-- PHPアイコン -->
                    <a href="#modal-06" class="skill">
                        <figure class="skill__img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/php.svg" class="skill__img" alt="PHPロゴ">
                        </figure>
                        <p class="skill__title">PHP</p>
                    </a>
                    <!-- PHPモーダル -->
                    <div class="modal" id="modal-06">
                        <a href="#!" class="modal__overlay"></a>
                        <div class="modal__window">
                          <div class="modal__content">
                            <p class="modal__heading">PHP</p>
                            <p class="modal__text">WordPressにおいて決まった処理を関数に置き換えることで見通しが良くなります。</p>
                          </div>
                          <a href="#!" class="modal__close">×</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skillsここまで -->

        <!-- Works -->
        <section id="works" class="works">
            <div class="section-inner">
                <div class="section-title about__section-title">
                    <h2 class="section-title__text">WORKS</h2>
                </div>
                <div class="cards">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post__in' => array(18,38,47),
                        'orderby' => 'post__in',
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()):
                        while ($the_query->have_posts()) : $the_query->the_post();
                            get_template_part('template-parts/loop', 'work');
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <div class="gradient-btn-wrapper works__gradient-btn-wrapper">
                    <a href="<?php echo esc_url(home_url('works')); ?>" class="gradient-btn gradient-btn--large"><span class="gradient-btn__content">MORE</span></a>
                </div>
            </div>
        </section>
        <!-- Worksここまで -->

        <!-- Price -->
        <section id="price" class="price">
            <div class="section-inner">
                <div class="section-title section-title--reverse">
                    <h2 class="section-title__text">PRICE</h2>
                </div>
                <div class="horizontal-table price__horizontal-table">
                    <table class="horizontal-table__inner">
                        <tbody class="horizontal-table__body">
                            <tr class="horizontal-table__row">
                                <th class="horizontal-table__header">トップページ（コーディングのみ）</th>
                                <td class="horizontal-table__text">15000円～</td>
                            </tr>
                            <tr class="horizontal-table__row">
                                <th class="horizontal-table__header">下層ページ（コーディングのみ）</th>
                                <td class="horizontal-table__text">5000円～</td>
                            </tr>
                            <tr class="horizontal-table__row">
                                <th class="horizontal-table__header">LP（コーディングのみ）</th>
                                <td class="horizontal-table__text">20000円～</td>
                            </tr>
                            <tr class="horizontal-table__row">
                                <th class="horizontal-table__header">WordPressサイト構築</th>
                                <td class="horizontal-table__text">60000円～</td>
                            </tr>
                            <tr class="horizontal-table__row">
                                <th class="horizontal-table__header">既存サイトのWordPress移行</th>
                                <td class="horizontal-table__text">30000円～</td>
                            </tr>
                            <tr class="horizontal-table__row">
                                <th class="horizontal-table__header">レスポンシブ化</th>
                                <td class="horizontal-table__text">4000円～</td>
                            </tr>
                            <tr class="horizontal-table__row">
                                <th class="horizontal-table__header">既存サイトの修正</th>
                                <td class="horizontal-table__text">要相談</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="note-text price__note-text">上記は参考価格です。詳しいお見積もりは下のコンタクトフォームからご相談ください。</p>
            </div>
        </section>
        <!-- Priceここまで -->

        <!-- Contact -->
        <section id="contact" class="contact">
            <div class="section-inner contact__section-inner">
                <div class="section-title about__section-title">
                    <h2 class="section-title__text">CONTACT</h2>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="91" title="ポートフォリオお問い合わせ" html_id="form" html_class="contact-form"]'); ?>
            </div>
        </section>
        <!-- Contactここまで -->
    </main>
<?php get_footer(); ?>