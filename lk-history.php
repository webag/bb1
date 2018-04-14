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
			<p class="text-big lk__title">История заказов</p>
			<div class="note-block">У вас еще не было заказов</div>

			<div class="history">

				<header class="history-row history-row--header">
					<div class="history-col">Дата</div>
					<div class="history-col">Заказ №</div>
					<div class="history-col">Сумма</div>
					<div class="history-col history-col--status">Статус</div>
				</header>

				<div class="history-row">
					<div class="history-col">
						<span>20.11.2017</span>
					</div>
					<div class="history-col">
						<span>123</span>
					</div>
					<div class="history-col history-col--price">
						<span>15 000 РУБ</span>
					</div>
					<div class="history-col history-col--status">
						<span>Отправлен</span>
					</div>
					<a class="history-delete" title="Удалить заказ"></a>
					<a href="/lk-history-detail.php" class="history-link"></a>
				</div>

				<div class="history-row">
					<div class="history-col">
						<span>20.11.2017</span>
					</div>
					<div class="history-col">
						<span>123</span>
					</div>
					<div class="history-col history-col--price">
						<span>125 000 РУБ</span>
					</div>
					<div class="history-col history-col--status">
						<span>Принят</span>
					</div>
					<a class="history-delete" title="Удалить заказ"></a>
					<a href="/lk-history-detail.php" class="history-link"></a>
				</div>

				<div class="history-row">
					<div class="history-col">
						<span>20.11.2017</span>
					</div>
					<div class="history-col">
						<span>12563</span>
					</div>
					<div class="history-col history-col--price">
						<span>255 000 РУБ</span>
					</div>
					<div class="history-col history-col--status">
						<span>Отправлен</span>
					</div>
					<a class="history-delete" title="Удалить заказ"></a>
					<a href="/lk-history-detail.php" class="history-link"></a>
				</div>
			</div>

		</main>
	</div>
</section>



<?php include('footer.php'); ?>
