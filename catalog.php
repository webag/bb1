<?php include('header.php'); ?>



<section class="s-sort">
	<div class="container">
		<button class="btn mob-open-filter">Фильтр</button>
		<button class="filter-block-close"></button>

		<div class="sort-block">
			<div class="sort-block__title">Сортировать по:</div>
			<select name="xxx" class="select-style" title="Сортировка товаров">
				<option value="Новизне">Новизне</option>
				<option value="Возрастанию цены">Возрастанию цены</option>
				<option value="Уменьшению цены">Уменьшению цены</option>
				<option value="Популярности">Популярности</option>
				<option value="Скидкам">Скидкам</option>
			</select>
		</div>
	</div>
</section>


<section class="s-catalog" id="s-acatalog">
	<div class="container">
		<div class="row">

			<!--aside-->
			<div class="grid-3 grid-12_l catalog-aside">
				<img src="/img/catalog/banner.jpg" alt="banner" class="catalog-aside__banner">

				<div class="filter-block">

					<div class="filter opened">
						<span class="filter__title">Модель</span>
						<span class="filter__clear">Очистить</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Shopper</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Рюкзак</span>
							</label>
							<label class="style-checkbox style-checkbox--disabled">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Клатч</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>На длинном ремне</span>
							</label>
							<label class="style-checkbox style-checkbox--disabled">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>С короткими ручками</span>
							</label>
						</div>
						<a href="#" class="filter-mod" id="modef">
							<div class="filter-mod__num">
								Выбрано:
								<span id="modef_num">53</span>
							</div>
							<span class="filter-mod__show">Показать</span>
						</a>
					</div>

					<div class="filter opened">
						<span class="filter__title">Размер</span>
						<span class="filter__clear">Очистить</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Большой</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Средний</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Мини</span>
							</label>
						</div>
					</div>

					<div class="filter opened">
						<span class="filter__title">Цвета</span>
						<span class="filter__clear">Очистить</span>
						<div class="filter__values">
							<div class="color-chooser color-chooser--mini">
								<label class="color-item" style="background-image: url('/img/products/color-1.jpg')">
									<input type="checkbox" name="filter-c" checked>
									<span></span>
								</label>
								<label class="color-item" style="background-image: url('/img/products/color-2.jpg')">
									<input type="checkbox" name="filter-c">
									<span></span>
								</label>
								<label class="color-item" style="background-image: url('/img/products/color-3.jpg')">
									<input type="checkbox" name="filter-c">
									<span></span>
								</label>
								<label class="color-item" style="background-image: url('/img/products/color-4.jpg')">
									<input type="checkbox" name="filter-c">
									<span></span>
								</label>
								<label class="color-item" style="background-image: url('/img/products/color-5.jpg')">
									<input type="checkbox" name="filter-c">
									<span></span>
								</label>
								<label class="color-item" style="background-image: url('/img/products/color-6.jpg')">
									<input type="checkbox" name="filter-c">
									<span></span>
								</label>
								<label class="color-item" style="background-image: url('/img/products/color-7.jpg')">
									<input type="checkbox" name="filter-c">
									<span></span>
								</label>
								<label class="color-item" style="background-image: url('/img/products/color-3.jpg')">
									<input type="checkbox" name="filter-c">
									<span></span>
								</label>
								<label class="color-item" style="background-image: url('/img/products/color-4.jpg')">
									<input type="checkbox" name="filter-c">
									<span></span>
								</label>
								<label class="color-item" style="background-image: url('/img/products/color-5.jpg')">
									<input type="checkbox" name="filter-c">
									<span></span>
								</label>
								<label class="color-item" style="background-image: url('/img/products/color-6.jpg')">
									<input type="checkbox" name="filter-c">
									<span></span>
								</label>
								<label class="color-item" style="background-image: url('/img/products/color-7.jpg')">
									<input type="checkbox" name="filter-c">
									<span></span>
								</label>
							</div>
						</div>
					</div>

					<div class="filter">
						<span class="filter__title">Текстура</span>
						<span class="filter__clear">Очистить</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Без текстуры</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Флотер</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Рептилия</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Кайман</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Крокодил</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Замша</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Лак</span>
							</label>
						</div>
					</div>

					<div class="filter">
						<span class="filter__title">Очень длинное название фильтра</span>
						<span class="filter__clear">Очистить</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Без текстуры</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Очень длинное название фильтра название фильтра</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Рептилия</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Кайман</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Крокодил</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Замша</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Лак</span>
							</label>
						</div>
					</div>

				</div>

				<div class="catalog-aside__decr">«ВВ1 Accessories» производит женские и мужские сумки из натуральной кожи. В изделиях используется только качественная натуральная кожа от зарубежных производителей, а также импортная фурнитура. Дизайнеры «BB1» разрабатывают современные модели сумок, соответствующие последним тенденциям моды. </div>

				<div class="catalog-aside__to-top" title="Наверх"><i class="i-up"></i></div>

			</div>
			<!--aside-->

			<!--main-->
			<div class="grid-9 grid-12_l catalog-main">
				<div class="row">
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/1.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/1_1.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--green">new</div>
									<div class="labels__item labels__item--red">-20%</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Клатч BB1 ORIGINAL</a>
								<div class="prices">
									<span class="price price--old">15 000 руб</span>
									<span class="price price--new">7 990 Руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<div class="color-chooser color-chooser--mini">
									<label class="color-item" style="background-image: url('/img/products/color-1.jpg')">
										<input type="radio" name="1" checked>
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-2.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-3.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-4.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-5.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-6.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-7.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
								</div>
								<button class="btn btn--mini" data-preview="product-id">Просмотр</button>
							</footer>
						</div>
					</div>
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/2.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/2_2.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--red">-15%</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Сумка-шопер BB1 ORIGINAL</a>
								<div class="prices">
									<span class="price price--old">162 000 руб</span>
									<span class="price price--new">27 990 Руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<div class="color-chooser color-chooser--mini">
									<label class="color-item" style="background-image: url('/img/products/color-1.jpg')">
										<input type="radio" name="1" checked>
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-2.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
								</div>
								<button class="btn btn--mini" data-preview="ProductID">Просмотр</button>
							</footer>
						</div>
					</div>
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/3.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/3_3.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--green">new</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Сумка BB1 MILANO</a>
								<div class="prices">
									<span class="price">15 000 руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<button class="btn btn--mini" data-preview="ProductID">Просмотр</button>
							</footer>
						</div>
					</div>
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/1.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/1_1.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--green">new</div>
									<div class="labels__item labels__item--red">-20%</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Клатч BB1 ORIGINAL</a>
								<div class="prices">
									<span class="price price--old">15 000 руб</span>
									<span class="price price--new">7 990 Руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<div class="color-chooser color-chooser--mini">
									<label class="color-item" style="background-image: url('/img/products/color-1.jpg')">
										<input type="radio" name="1" checked>
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-2.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-3.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-4.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-5.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-6.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-7.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
								</div>
								<button class="btn btn--mini" data-preview="ProductID">Просмотр</button>
							</footer>
						</div>
					</div>
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/2.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/2_2.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--red">-15%</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Сумка-шопер BB1 ORIGINAL</a>
								<div class="prices">
									<span class="price price--old">162 000 руб</span>
									<span class="price price--new">27 990 Руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<div class="color-chooser color-chooser--mini">
									<label class="color-item" style="background-image: url('/img/products/color-1.jpg')">
										<input type="radio" name="1" checked>
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-2.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
								</div>
								<button class="btn btn--mini" data-preview="ProductID">Просмотр</button>
							</footer>
						</div>
					</div>
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/3.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/3_3.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--green">new</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Сумка BB1 MILANO</a>
								<div class="prices">
									<span class="price">15 000 руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<button class="btn btn--mini" data-preview="ProductID">Просмотр</button>
							</footer>
						</div>
					</div>
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/1.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/1_1.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--green">new</div>
									<div class="labels__item labels__item--red">-20%</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Клатч BB1 ORIGINAL</a>
								<div class="prices">
									<span class="price price--old">15 000 руб</span>
									<span class="price price--new">7 990 Руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<div class="color-chooser color-chooser--mini">
									<label class="color-item" style="background-image: url('/img/products/color-1.jpg')">
										<input type="radio" name="1" checked>
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-2.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-3.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-4.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-5.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-6.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-7.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
								</div>
								<button class="btn btn--mini" data-preview="ProductID">Просмотр</button>
							</footer>
						</div>
					</div>
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/2.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/2_2.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--red">-15%</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Сумка-шопер BB1 ORIGINAL</a>
								<div class="prices">
									<span class="price price--old">162 000 руб</span>
									<span class="price price--new">27 990 Руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<div class="color-chooser color-chooser--mini">
									<label class="color-item" style="background-image: url('/img/products/color-1.jpg')">
										<input type="radio" name="1" checked>
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-2.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
								</div>
								<button class="btn btn--mini" data-preview="ProductID">Просмотр</button>
							</footer>
						</div>
					</div>
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/3.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/3_3.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--green">new</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Сумка BB1 MILANO</a>
								<div class="prices">
									<span class="price">15 000 руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<button class="btn btn--mini" data-preview="ProductID">Просмотр</button>
							</footer>
						</div>
					</div>
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/1.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/1_1.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--green">new</div>
									<div class="labels__item labels__item--red">-20%</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Клатч BB1 ORIGINAL</a>
								<div class="prices">
									<span class="price price--old">15 000 руб</span>
									<span class="price price--new">7 990 Руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<div class="color-chooser color-chooser--mini">
									<label class="color-item" style="background-image: url('/img/products/color-1.jpg')">
										<input type="radio" name="1" checked>
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-2.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-3.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-4.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-5.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-6.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-7.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
								</div>
								<button class="btn btn--mini" data-preview="ProductID">Просмотр</button>
							</footer>
						</div>
					</div>
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/2.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/2_2.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--red">-15%</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Сумка-шопер BB1 ORIGINAL</a>
								<div class="prices">
									<span class="price price--old">162 000 руб</span>
									<span class="price price--new">27 990 Руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<div class="color-chooser color-chooser--mini">
									<label class="color-item" style="background-image: url('/img/products/color-1.jpg')">
										<input type="radio" name="1" checked>
										<span></span>
									</label>
									<label class="color-item" style="background-image: url('/img/products/color-2.jpg')">
										<input type="radio" name="1">
										<span></span>
									</label>
								</div>
								<button class="btn btn--mini" data-preview="ProductID">Просмотр</button>
							</footer>
						</div>
					</div>
					<div class="grid-4 grid-6_s">
						<div class="product-preview">
							<header class="product-preview__header">
								<a href="/catalog-detail.php">
									<img src="/img/products/3.jpg" alt="1" class="product-preview__img">
									<img src="/img/products/3_3.jpg" alt="1" class="product-preview__img--second">
								</a>
								<div class="labels">
									<div class="labels__item labels__item--green">new</div>
								</div>
							</header>
							<main class="product-preview__main">
								<a href="/catalog-detail.php" class="product-preview__title">Сумка BB1 MILANO</a>
								<div class="prices">
									<span class="price">15 000 руб</span>
								</div>
							</main>
							<footer class="product-preview__footer">
								<button class="btn btn--mini" data-preview="ProductID">Просмотр</button>
							</footer>
						</div>
					</div>
				</div>

				<div class="pagination">
					<a href="#" class="pagination__link pagination__link--disabled">
						<i class="i-left"></i>
					</a>
					<ul class="pagination-list">
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
					</ul>
					<a href="#" class="pagination__link">
						<i class="i-right"></i>
					</a>
				</div>

			</div>
			<!--main-->

		</div>
	</div>
</section>




<?php include('footer.php'); ?>
