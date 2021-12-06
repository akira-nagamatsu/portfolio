                        <div class="card">
                            <div class="card__head">
                                <p class="card__img-wrapper">
                                    <?php
                                    $pic = get_field('site-image');
                                    $pic_url = $pic['sizes']['large'];
                                    ?>
                                    <img src="<?php echo $pic_url; ?>" class="card__img" alt="Engessサイトイメージ">
                                </p>
                            </div>
                            <div class="card__body">
                                <div class="card__body-inner">
                                    <p class="card__title"><?php the_title(); ?></p>
                                    <p class="card__text"><?php echo get_the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="gradient-btn card__gradient-btn"><span class="gradient-btn__content">サイトへ</span></a>
                                </div>
                            </div>
                        </div>