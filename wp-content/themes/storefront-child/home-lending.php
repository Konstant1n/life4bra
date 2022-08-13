<?php
/*
Template Name: Home Lending
*/ 

 get_header('landing');
?>


<div class="container">
    <H1>Деякий текст тест</H1>
</div>




<main>
    <section class="week_prods">
        <div class="prod_cont">
            <h2>Товари тижня</h2>
            <h3>Популярні товари</h3>
            <div class="lb_popular_prod">
                <div class="top_phone">
                    <?php dynamic_sidebar( 'top-area' ); ?>
                </div>
                <!-- <ul class="products">
                        <li class="product">
                            <div class="prod_tag">Новинка</div>
                            <div class="prod_img">
                                <img src="./images/product1.jpeg" alt="product1">
                            </div>
                            <div class="prod_title">Бюстгальтер A5879</div>
                            <div class="prod_prices">
                                <div class="prod_new_price">1400 грн</div>
                                <div class="prod_old_price"></div>
                            </div>
                            <ul>
                                <li class="prod_descr">
                                    <div>Матеріал:</div>
                                    <div>поліамід 82%</div>
                                </li>
                                <li class="prod_descr">
                                    <div>Догляд:</div>
                                    <div>ручне прання</div>
                                </li>
                                <li class="prod_descr">
                                    <div>Вид бретелей:</div>
                                    <div>відстібаються</div>
                                </li>
                            </ul>
                            <div>
                                <a href="#">Замовити</a>
                            </div>
                        </li>
                        <li class="product">
                            <div class="prod_tag">Хіт</div>
                            <div class="prod_img">
                                <img src="./images/product2.jpeg" alt="product2">
                            </div>
                            <div class="prod_title">Бюстгальтер R2036</div>
                            <div class="prod_prices">
                                <div class="prod_new_price">3240 грн</div>
                                <div class="prod_old_price">3600 грн</div>
                            </div>
                            <ul>
                                <li class="prod_descr">
                                    <div>Матеріал:</div>
                                    <div>80% ПА, 20% Лайкра</div>
                                </li>
                                <li class="prod_descr">
                                    <div>Догляд:</div>
                                    <div>ручне прання</div>
                                </li>
                                <li class="prod_descr">
                                    <div>Вид бретелей:</div>
                                    <div>не відстібаються</div>
                                </li>
                            </ul>
                            <div>
                                <a href="#">Замовити</a>
                            </div>
                        </li>
                        <li class="product">
                            <div class="prod_tag"></div>
                            <div class="prod_img">
                                <img src="./images/product3.jpeg" alt="product3">
                            </div>
                            <div class="prod_title">Бюстгальтер L015</div>
                            <div class="prod_prices">
                                <div class="prod_new_price">1940 грн</div>
                                <div class="prod_old_price"></div>
                            </div>
                            <ul>
                                <li class="prod_descr">
                                    <div>Матеріал:</div>
                                    <div>поліамід 81%</div>
                                </li>
                                <li class="prod_descr">
                                    <div>Догляд:</div>
                                    <div>ручне прання</div>
                                </li>
                                <li class="prod_descr">
                                    <div>Вид бретелей:</div>
                                    <div>не відстібаються</div>
                                </li>
                            </ul>
                            <div>
                                <a href="#">Замовити</a>
                            </div>
                        </li>
                    </ul> -->
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="feed_cont">
            <div class="feed_title">
                <h2>Відгуки клієнтів Тест</h2>
                <div class="feed_left"><img src="./images/arrow_left.svg" alt="left"></div>
                <div class="feed_right"><img src="./images/arrow_right.svg" alt="right"></div>
            </div>
            <div class="feed_block">
                <div class="feed_active feed1">
                    <article class="feed_test">
                        <p>До знайомства з сайтом я вже скористалася послугами інших інтернет-магазинів з продажу
                            нижньої білизни. Ця ж крамниця підкорила мене. Замовляючи вперше, дуже боялася за якість
                            товару. Але речі, які я отримала, дійсно високої якості і заслуговують на увагу.</p>
                        <div>
                            <img src="./images/yuliana.jpeg" alt="yuliana">
                            <h6>Юліана Романовська</h6>
                        </div>
                    </article>
                    <article class="feed_test">
                        <p>Вже кілька років користуюсь послугами цього інтернет-магазину. Магазин дуже хороший,
                            замовляла неодноразово – замовлення завжди надходить дуже швидко. Опис, багато фотографій
                            дуже зручно, можна в будь-яке місце заглянути. Економія, порівняно із звичайним магазином
                            спідньої білизни у нашому місті, просто грандіозна! Гарний магазин перевірений.</p>
                        <div>
                            <img src="./images/elina.jpeg" alt="elina">
                            <h6>Еліна Арден</h6>
                        </div>
                    </article>
                </div>
                <!-- <div class="feed_not feed2">
                        <article class="feed_test">
                            <p>Покупка на сайті стала моїм першим досвідом купівлі чогось в інтернеті. І я залишилася дуже задоволеною. Замовляла комплект італійської чорної білизни. Розмір замовила найменший – вгадала. Все село по фігурі, ніде не стирчить, не стовпиться, не тисне. Білизна повністю відповідає картинці на сайті. Тканина хороша, виглядає дорого та красиво.</p>
                            <div>
                                <img src="./images/olga.jpeg" alt="olga">
                                <h6>Ольга Афанасьєва</h6>
                            </div>
                        </article>
                        <article class="feed_test">
                           <p>До знайомства з сайтом я вже скористалася послугами інших інтернет-магазинів з продажу нижньої білизни. Ця ж крамниця підкорила мене. Замовляючи вперше, дуже боялася за якість товару. Але речі, які я отримала, дійсно високої якості і заслуговують на увагу.</p>
                            <div>
                                <img src="./images/yuliana.jpeg" alt="yuliana">
                                <h6>Юліана Романовська</h6>
                            </div>
                        </article>
                    </div>
                    <div class="feed_not feed3">
                        <article class="feed_test">
                            <p>Вже кілька років користуюсь послугами цього інтернет-магазину. Магазин дуже хороший, замовляла неодноразово – замовлення завжди надходить дуже швидко. Опис, багато фотографій дуже зручно, можна в будь-яке місце заглянути. Економія, порівняно із звичайним магазином спідньої білизни у нашому місті, просто грандіозна! Гарний магазин перевірений.</p>
                            <div>
                                <img src="./images/elina.jpeg" alt="elina">
                                <h6>Еліна Арден</h6>
                            </div>
                        </article>
                        <article class="feed_test">
                            <p>Покупка на сайті стала моїм першим досвідом купівлі чогось в інтернеті. І я залишилася дуже задоволеною. Замовляла комплект італійської чорної білизни. Розмір замовила найменший – вгадала. Все село по фігурі, ніде не стирчить, не стовпиться, не тисне. Білизна повністю відповідає картинці на сайті. Тканина хороша, виглядає дорого та красиво.</p>
                            <div>
                                <img src="./images/olga.jpeg" alt="olga">
                                <h6>Ольга Афанасьєва</h6>
                            </div>
                        </article>
                    </div> -->
            </div>
        </div>
    </section>
</main>


<footer>
        <div class="foot_cont">
            <h2>КОНТАКТИ</h2>
            <ul>
                <li class="foot_phone"><a href="tel:+380501234567">+38 (050) 1234567</a></li>
                <li class="foot_email"><a href="email:hello@travel.com">hello@travel.com</a></li>
                <li class="foot_adress">м.Київ, вул.Хрещатик 1</li>
                <li class="foot_icons"></li>
            </ul>
        </div>
    </footer>


<?php
    // get_footer('landing'); 
