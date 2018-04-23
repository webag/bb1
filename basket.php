<?php include('header.php'); ?>


<section class="s-basket">
	<div class="container">

		<div class="basket">
			<div class="basket__left">
				<div class="basket-header">
					<div class="basket-col basket-col--img"></div>
					<div class="basket-col basket-col--art">Артикул</div>
					<div class="basket-col basket-col--color">Цвет</div>
					<div class="basket-col basket-col--num">Кол-во</div>
					<div class="basket-col basket-col--price">Цена</div>
					<div class="basket-col basket-col--delete"></div>
				</div>
				<div class="basket-list">
					<div class="basket-item">
						<div class="basket-col basket-col--img">
							<img src="/img/basket/img.jpg" alt="1">
						</div>
						<div class="basket-col basket-col--art">940116</div>
						<div class="basket-col basket-col--color">Бордо крокодил</div>
						<div class="basket-col basket-col--num">
							<div class="num-block">
								<button>-</button>
								<input type="text" title="Кол-во" value="1" class="text-input">
								<button>+</button>
							</div>
						</div>
						<div class="basket-col basket-col--price">
							<div class="prices">
								<span class="price price--old">162 000 руб</span>
								<span class="price price--new">27 990 Руб</span>
							</div>
						</div>
						<div class="basket-col basket-col--delete">
							<button class="basket-delete" title="Убрать из заказа"></button>
						</div>
					</div>
					<div class="basket-item">
						<div class="basket-col basket-col--img">
							<img src="/img/basket/img-2.jpg" alt="2">
						</div>
						<div class="basket-col basket-col--art">940116</div>
						<div class="basket-col basket-col--color">Черный</div>
						<div class="basket-col basket-col--num">
							<div class="num-block">
								<button>-</button>
								<input type="text" title="Кол-во" value="1" class="text-input">
								<button>+</button>
							</div>
						</div>
						<div class="basket-col basket-col--price">
							<div class="prices">
								<span class="price">62 000 руб</span>
							</div>
						</div>
						<div class="basket-col basket-col--delete">
							<button class="basket-delete" title="Убрать из заказа"></button>
						</div>
					</div>
					<div class="basket-item">
						<div class="basket-col basket-col--img">
							<img src="/img/basket/img.jpg" alt="1">
						</div>
						<div class="basket-col basket-col--art">940116</div>
						<div class="basket-col basket-col--color">Бордо крокодил</div>
						<div class="basket-col basket-col--num">
							<div class="num-block">
								<button>-</button>
								<input type="text" title="Кол-во" value="1" class="text-input">
								<button>+</button>
							</div>
						</div>
						<div class="basket-col basket-col--price">
							<div class="prices">
								<span class="price price--old">162 000 руб</span>
								<span class="price price--new">27 990 Руб</span>
							</div>
						</div>
						<div class="basket-col basket-col--delete">
							<button class="basket-delete" title="Убрать из заказа"></button>
						</div>
					</div>
					<div class="basket-item">
						<div class="basket-col basket-col--img">
							<img src="/img/basket/img-2.jpg" alt="2">
						</div>
						<div class="basket-col basket-col--art">940116</div>
						<div class="basket-col basket-col--color">Черный</div>
						<div class="basket-col basket-col--num">
							<div class="num-block">
								<a>-</a>
								<input type="text" title="Кол-во" value="1" class="text-input">
								<a>+</a>
							</div>
						</div>
						<div class="basket-col basket-col--price">
							<div class="prices">
								<span class="price">62 000 руб</span>
							</div>
						</div>
						<div class="basket-col basket-col--delete">
							<button class="basket-delete" title="Убрать из заказа"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="basket__right">
				<div class="basket-order">
					<header class="basket-order__header text-big">Ваш заказ:</header>
					<main class="basket-order__main">
						<div class="basket-order__row">
							<span>Сумма товаров:</span>
							<span>211 755 РУБ</span>
						</div>
						<div class="basket-order__row">
							<span>Скидка:</span>
							<span>500 РУБ</span>
						</div>
					</main>
					<footer class="basket-order__footer">
						<div class="basket-order__row">
							<span>Итого:</span>
							<span>211 255 РУБ</span>
						</div>
						<div class="btn-center">
							<a href="#" class="btn btn--black">Оформить заказ</a>
						</div>
					</footer>
				</div>
			</div>
		</div>

	</div>
</section>



<?php include('footer.php'); ?>
