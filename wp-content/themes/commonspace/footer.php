<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package commonspace
 */

?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h2>Навигация</h2>
				<ul>
					<li><a href="#">Главная</a></li>
					<li><a href="#">О нас</a></li>
					<li><a href="#">Новости</a></li>
					<li><a href="#">Проекты и мероприятия</a></li>
					<li><a href="#">Блог</a></li>
					<li><a href="#">Сотрудничество</a></li>
					<li><a href="#">Заказать соц. проект</a></li>
					<li><a href="#">Помощь спонсоров</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
			<div class="col-md-5">
				<h2>Отчеты:</h2>
				<ul>
					<li><a href="#">ОТЧЕТ О ПРОДЕЛАННОЙ РАБОТЕ ЗА III кв. 2016<div id="pdf" class="footer-pdf"></div></a></li>
					<li><a href="#">ОТЧЕТ О ПРОДЕЛАННОЙ РАБОТЕ ЗА II кв. 2016<div id="pdf" class="footer-pdf"></div></a></li>
					<li><a href="#">ОТЧЕТ О ПРОДЕЛАННОЙ РАБОТЕ ЗА I кв. 2016<div id="pdf" class="footer-pdf"></div></a></li>
					<li><a href="#">ОТЧЕТ О ПРОДЕЛАННОЙ РАБОТЕ ЗА 2015 год<div id="pdf" class="footer-pdf"></div></a></li>
					<a class="eye_link" href="#">Просмотреть все</a>
				</ul>
			</div>
			<div class="col-md-3 col-md-offset-1">
				<h2>Свяжитесь с нами:</h2>

				<form>
					<input type="text" class="form-control" id="exampleInputName1" placeholder="Ваше имя">
					<input type="email" class="form-control mt16" id="exampleInputEmail1" placeholder="Ваша почта">
					<textarea placeholder="Ваше сообщение..." class="form-control mt16" rows="3"></textarea>
					<button type="submit" class="btn btn-default mt16">ОТПРАВИТЬ</button>
				</form>

			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<p>2015-2017 г. Международный общественный союз «Единый простор» <br>КОНТАКТЫ e-mail: sios.dnepr@gmail.com</p>
				<h3>Мы в соц. сетях</h3>
				<div class="social-icon-footer">
					<a href="#"><div class="social-icon" id="social-insta"></div></a>
					<a href="#"><div class="social-icon" id="social-fb"></div></a>
					<a href="#"><div class="social-icon" id="social-vk"></div></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- <div class="hidden"></div>

<div class="loader">
	<div class="loader_inner"></div>
</div> -->

<?php wp_footer(); ?>

</body>
</html>
