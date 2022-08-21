<?php
/*
Template Name: Home Lending
*/ 

 get_header('landing');
?>


<!-- <div class="container">
    <H1>Деякий текст</H1>
</div> -->




<main>

    <div class="promo">

        <!-- <section class="logotype">
            <div class="lb_container">
                <div class="logo-name">
                    <div class="logo">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.svg">
                    </div>
                    <div class="comp-name">
                        <h2>Life4bra<br>Вишукана жіноча білизна</h2>
                    </div>
                </div>
            </div>

        </section> -->


        <section class="container-fluid promo">
            <div class="row">
                <div class="col-md-6 promo-left-img csa-head">
                </div>

                <div class="col-md-6 promo-right-img">
                    <div class="header-gradient">
                    </div>
                    <div class="promo-text">
                        <h2>Відчуй себе королевою</h2>
                        <h5>У новій колекції авторської жіночої білизни</h5>
                        <!-- <button class="btn">Замовити</button> -->
                    </div>
                </div>
            </div>
        </section>


        <section class="container">
            <div class="row">
                <div class="col-12 why">
                    <h2>Чому обирають нас</h2>
                </div>
            </div>

            <div class="row choose">

                <div class="col-md-4">
                    <div class="sale">
                        <i class="fa-solid fa-gift"></i>
                        <h3>Подарунки та знижки</h3>
                        <p>Бонусна система знижок та подрунків</p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="delivery">
                        <i class="fa-solid fa-truck"></i>
                        <h3>Безкоштовна доставка</h3>
                        <p>Бескоштовна доставка по місту</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="quality">
                        <i class="fa-solid fa-user-shield"></i>
                        <h3>Гарантія якості</h3>
                        <p>Ми гарантуємо високу якість всього нашого твару</p>

                    </div>
                </div>

            </div>
        </section>


    </div>

    <section class="week_prods">
        <div class="prod_cont">
            <h2>Нова колекція</h2>
            <h3>Популярні товари</h3>
            <div class="lb_popular_prod">
                <div class="top_phone">
                    <?php dynamic_sidebar( 'top-area' ); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="feed_cont">
            <div class="feed_title">
                <h2>Відгуки клієнтів</h2>
                <div class="feed_left"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/arrow_left.svg"
                        alt="left"></div>
                <div class="feed_right"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/arrow_right.svg"
                        alt="right"></div>
            </div>
            <div class="feed_block">
                <div class="feed_active feed1">
                    <article class="feed_test">
                        <p>До знайомства з сайтом я вже скористалася послугами інших інтернет-магазинів з продажу
                            нижньої білизни. Ця ж крамниця підкорила мене. Замовляючи вперше, дуже боялася за якість
                            товару. Але речі, які я отримала, дійсно високої якості і заслуговують на увагу.</p>
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/yuliana.jpeg" alt="yuliana">
                            <h6>Юліана Романовська</h6>
                        </div>
                    </article>
                    <article class="feed_test">
                        <p>Вже кілька років користуюсь послугами цього інтернет-магазину. Магазин дуже хороший,
                            замовляла неодноразово – замовлення завжди надходить дуже швидко. Опис, багато фотографій
                            дуже зручно, можна в будь-яке місце заглянути. Економія, порівняно із звичайним магазином
                            спідньої білизни у нашому місті, просто грандіозна! Гарний магазин перевірений.</p>
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/elina.jpeg" alt="elina">
                            <h6>Еліна Арден</h6>
                        </div>
                    </article>
                </div>
                <div class="feed_not feed2">
                    <article class="feed_test">
                        <p>Вже кілька років користуюсь послугами цього інтернет-магазину. Магазин дуже хороший,
                            замовляла неодноразово – замовлення завжди надходить дуже швидко. Опис, багато фотографій
                            дуже зручно, можна в будь-яке місце заглянути. Економія, порівняно із звичайним магазином
                            спідньої білизни у нашому місті, просто грандіозна! Гарний магазин перевірений.</p>
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/elina.jpeg" alt="elina">
                            <h6>Еліна Арден</h6>
                        </div>
                    </article>
                    <article class="feed_test">
                        <p>Покупка на сайті стала моїм першим досвідом купівлі чогось в інтернеті. І я залишилася дуже
                            задоволеною. Замовляла комплект італійської чорної білизни. Розмір замовила найменший –
                            вгадала. Все село по фігурі, ніде не стирчить, не стовпиться, не тисне. Білизна повністю
                            відповідає картинці на сайті. Тканина хороша, виглядає дорого та красиво.</p>
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/olga.jpeg" alt="olga">
                            <h6>Ольга Афанасьєва</h6>
                        </div>
                    </article>
                </div>
                <div class="feed_not feed3">
                    <article class="feed_test">
                        <p>Покупка на сайті стала моїм першим досвідом купівлі чогось в інтернеті. І я залишилася дуже
                            задоволеною. Замовляла комплект італійської чорної білизни. Розмір замовила найменший –
                            вгадала. Все село по фігурі, ніде не стирчить, не стовпиться, не тисне. Білизна повністю
                            відповідає картинці на сайті. Тканина хороша, виглядає дорого та красиво.</p>
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/olga.jpeg" alt="olga">
                            <h6>Ольга Афанасьєва</h6>
                        </div>
                    </article>
                    <article class="feed_test">
                        <p>До знайомства з сайтом я вже скористалася послугами інших інтернет-магазинів з продажу
                            нижньої білизни. Ця ж крамниця підкорила мене. Замовляючи вперше, дуже боялася за якість
                            товару. Але речі, які я отримала, дійсно високої якості і заслуговують на увагу.</p>
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/yuliana.jpeg" alt="yuliana">
                            <h6>Юліана Романовська</h6>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>


<!-- <footer>
    <div class="foot_cont">
        <h2>КОНТАКТИ</h2>
        <ul>
            <li class="foot_phone"><a href="tel:+380501234567">+38 (050) 1234567</a></li>
            <li class="foot_email"><a href="email:hello@travel.com">hello@travel.com</a></li>
            <li class="foot_adress">м.Київ, вул.Хрещатик 1</li>
           
        </ul>
    </div>
</footer> -->


<!-- /* TEST shortcode */ -->

<!-- <?php
    echo do_shortcode( '[su_custom_gallery source="media: 65,66"]' );
    echo do_shortcode( '[su_animate type="lightSpeedIn" duration="3" delay="2"]Animated content[/su_animate]' );
    echo do_shortcode( '[su_gmap responsive="no" address="Полтава жовтнева 5" zmax_width="50%"]' );
    echo do_shortcode( '[su_image_carousel source="media: 65,66" limit="2" max_width="50%"' );
    
?> -->


<?php
    get_footer('landing'); 