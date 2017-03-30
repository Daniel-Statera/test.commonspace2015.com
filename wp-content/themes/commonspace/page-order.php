<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package commonspace
 */

get_header(); ?>

    <section class="clouds">
        <div class="container">
            <div class="row orderHead">
                <div class="col-md-9 orderHead_text _text">
                    <p class="head__lgText">Заказать социальный проект</p>
                    <p class="head__smText">Общественная организация Единый Простор имеет большой опыт в проведении/реализации различных социальных мероприятий и проектов. Мы организуем любого вида социальный проект под ваш заказ!</p>
                </div>
                <div class="col-md-3 orderHead_image _image"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row orderMain">
                <div class="col-sm-8 orderMain_text _text">
                    <p class="main__smText">Для этого нужно связаться с нами по телефону:
                        <br> + 38 (000) 000 00 00
                        <br> Написать нам на почту:
                        <br> ___________@gmail.com
                        <br> Или заполнить форму заказа, которая расположена на даной странице.
                        <br>
                        <br> Через некоторое время с Вами свяжется сотрудник ОО Единый Простор, чтобы уточнить организационные моменты.</p>
                </div>
                <div class="col-sm-4 orderMain_form">
                    <form action="#" name="order" method="#" target="#">
                        <input type="text" class="orderMain_input__smInput __smInput inputs" placeholder="Ваше имя">
                        <input type="tel" class="orderMain_input__smInput __smInput inputs" placeholder="Номер телефона">
                        <input type="text" class="orderMain_input__smInput __smInput inputs" placeholder="Тип">
                        <textarea class="orderMain_input__lgInput __lgInput inputs" placeholder="Краткое описание"></textarea>
                        <input type="submit" class="orderMain_inputbtn inputbtn inputs" value="Отправить"> </form>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
