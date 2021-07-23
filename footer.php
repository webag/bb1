<section class="s-subscribe">
	<div class="container">
		<div class="subsribe-title">Следите за новостями</div>
		<form action="#" class="subscribe-form ajax-form">
			<input type="email" class="text-input" placeholder="Подписка на новостную рассылку" data-req="true">
			<button type="submit"><i class="i-right-ar"></i></button>
		</form>
	</div>
</section>

<footer class="s-footer">
	<div class="container">

		<div class="foot-social">
			<div class="social-links">
				<a href="#" target="_blank"><i class="i-vk"></i></a>
				<a href="#" target="_blank"><i class="i-fb"></i></a>
				<a href="#" target="_blank"><i class="i-insta"></i></a>
			</div>
		</div>

		<div class="foot-menus">

			<div class="foot-menu">
				<p class="foot-menu__title">BB1</p>
				<ul>
					<li><a href="/about.php">О компании</a></li>
					<li><a href="/fran-trademark.php" class="active">Франчайзинг</a></li>
					<li><a href="#">Магазины</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="/news.php">Новости</a></li>
				</ul>
			</div>

			<div class="foot-menu">
				<p class="foot-menu__title">Online shop</p>
				<ul>
					<li><a href="#">Оплата и доставка</a></li>
					<li><a href="#">Гарантия</a></li>
					<li><a href="#">Продукция на заказ</a></li>
					<li><a href="#">Обмен / возврат</a></li>
				</ul>
			</div>

			<div class="foot-menu">
				<p class="foot-menu__title">Информация</p>
				<ul>
					<li><a href="/privacy.php">Условия обработки персональных данных</a></li>
				</ul>
			</div>

		</div>

	</div>
</footer>



<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-cities" class="modal modal-cities">
		<p class="modal__title h3">Выберите город:</p>
		<ul class="cities-list">
			<li><a href="#" rel="nofollow" class="current">Санкт-Петербург</a></li>
			<li><a href="#" rel="nofollow">Москва</a></li>
			<li><a href="#" rel="nofollow">Воронеж</a></li>
			<li><a href="#" rel="nofollow">Владивосток</a></li>
			<li><a href="#" rel="nofollow">Новосибирск</a></li>
			<li><a href="#" rel="nofollow">Ростов-на-Дону</a></li>
			<li><a href="#" rel="nofollow">Самара</a></li>
			<li><a href="#" rel="nofollow">Сочи</a></li>
			<li><a href="#" rel="nofollow">Тюмень</a></li>
			<li><a href="#" rel="nofollow">Хабаровск</a></li>
		</ul>
	</div>

	<div id="modal-order" class="modal">
		<p>Заказать обратный звонок</p>
		<p>Оставьте заявку и наш администратор свяжется с&nbsp;Вами в течение 10 минут</p>
		<form class="ajax-form">
			<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя" class="text-input" >
			<input type="email" name="user_email" placeholder="Введите e-mail*" data-label="Email" class="text-input" data-req="true">
			<input type="tel" name="user_tel" placeholder="Введите телефон*" data-label="Телефон"  class="text-input" data-req="true">
			<input type="file" name="user_file" data-label="Файл">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<button type="submit" class="btn">Отправить</button>
			<label class="style-checkbox">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
				<span>Принимаю <a href="#" target="_blank">условия обработки</a> персональных данных</span>
			</label>
		</form>
	</div>


	<div id="modal-thanks" class="modal">
		<p>Спасибо за заявку!</p>
	</div>

	<div id="modal-error" class="modal">
		<p>Что-то пошло не так.</p>
		<p>Попробуйте еще раз.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

	<div id="modal-subscribe" class="modal modal-subscribe">
		<div class="row">
			<div class="grid-5 grid-12_s">
				<img src="/img/modals/subscr.jpg" alt="1" class="modal-subscribe__img">
			</div>
			<div class="grid-7 grid-12_s">
				<img src="/img/modals/bird.png" alt="1">
				<div class="h3 modal-subscribe__title">Подпишись на нашу рассылку и получи скидку 10% на первый заказ</div>
				<div class="modal-subscribe__descr">Получай специальные скидки и ранний доступ к специальным предложениям, новым коллекциям и актуальным трендам.</div>
				<form class="modal-subscribe__form">
					<label class="form-group">
						<span class="form-group__label">ФИО:</span>
						<input type="text" name="xxx" class="text-input">
					</label>
					<label class="form-group">
						<span class="form-group__label">E-MAIL:</span>
						<input type="email" name="xxx" class="text-input">
					</label>
					<div class="form-note">Подписываясь на эту рассылку, вы соглашаетесь с Условиями пользования и Политикой конфиденциальности. Чтобы отменить подписку, нажмите на кнопку «Отписаться» в конце любого письма.</div>
					<button type="submit" class="btn">Отправить</button>
				</form>
			</div>
		</div>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/assets.js?v=3" type="text/javascript" ></script>
<script src="js/main.js?v=8" type="text/javascript" ></script>

	</body>
</html>
