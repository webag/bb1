<?php include('header.php'); ?>


<section class="s-lk">
	<div class="lk container">
		<aside class="lk__aside">
			<nav class="aside-nav">
				<ul>
					<li><a href="/lk-profile.php">Личные данные</a></li>
					<li><a href="/lk-changepass.php">Смена пароля</a></li>
					<li><a href="/lk-history.php" class="active">История покупок</a></li>
					<li><a href="/basket.php">Корзина</a></li>
				</ul>
			</nav>
		</aside>
		<main class="lk__main">
			<p class="text-big lk__title">Заказ №165</p>

			<div class="history-detail-block">
				<div>ФИО:  Иванов Иван Иванович</div>
				<div>E-mail: sample@mail.ru</div>
				<div>Телефон: +7-982-773-34-65</div>
			</div>

			<div class="history-detail-block">
				<div>Доставка: Самовывоз</div>
				<div>Оплата: Наличные</div>
			</div>

			<div class="history-detail-block">
				<div>Сумма: 10 200 руб</div>
				<div>Скидка:</div>
				<div>- 10% на летнюю коллекцию!</div>
				<div>- Скидка по промокоду 15%</div>
			</div>

			<div class="history-detail-sum">
				<p class="text-big">Итого: 7650 руб</p>
			</div>

			<p class="text-big lk__title">Товары в заказе</p>

			<div class="history-detail-basket">
				<div class="basket-header">
					<div class="basket-col basket-col--img"></div>
					<div class="basket-col basket-col--art">Артикул</div>
					<div class="basket-col basket-col--color">Цвет</div>
					<div class="basket-col basket-col--num">Кол-во</div>
					<div class="basket-col basket-col--price">Цена</div>
				</div>
				<div class="basket-list">
					<div class="basket-item">
						<div class="basket-col basket-col--img">
							<img src="/img/basket/img.jpg" alt="1">
						</div>
						<div class="basket-col basket-col--art">940116</div>
						<div class="basket-col basket-col--color">Бордо крокодил</div>
						<div class="basket-col basket-col--num">1</div>
						<div class="basket-col basket-col--price">
							<div class="prices">
								<span class="price price--old">162 000 руб</span>
								<span class="price price--new">27 990 Руб</span>
							</div>
						</div>
					</div>
					<div class="basket-item">
						<div class="basket-col basket-col--img">
							<img src="/img/basket/img-2.jpg" alt="2">
						</div>
						<div class="basket-col basket-col--art">940116</div>
						<div class="basket-col basket-col--color">Черный</div>
						<div class="basket-col basket-col--num">3</div>
						<div class="basket-col basket-col--price">
							<div class="prices">
								<span class="price">62 000 руб</span>
							</div>
						</div>
					</div>
					<div class="basket-item">
						<div class="basket-col basket-col--img">
							<img src="/img/basket/img.jpg" alt="1">
						</div>
						<div class="basket-col basket-col--art">940116</div>
						<div class="basket-col basket-col--color">Бордо крокодил</div>
						<div class="basket-col basket-col--num">1</div>
						<div class="basket-col basket-col--price">
							<div class="prices">
								<span class="price price--old">162 000 руб</span>
								<span class="price price--new">27 990 Руб</span>
							</div>
						</div>
					</div>
					<div class="basket-item">
						<div class="basket-col basket-col--img">
							<img src="/img/basket/img-2.jpg" alt="2">
						</div>
						<div class="basket-col basket-col--art">940116</div>
						<div class="basket-col basket-col--color">Черный</div>
						<div class="basket-col basket-col--num">2</div>
						<div class="basket-col basket-col--price">
							<div class="prices">
								<span class="price">62 000 руб</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="btn-center">
				<a href="/lk-history.php" class="btn btn--black">Назад</a>
			</div>

		</main>
	</div>
</section>



<?php include('footer.php'); ?>
