<?php include('header.php'); ?>


<section class="s-lk">
	<div class="lk container">
		<aside class="lk__aside">
			<nav class="aside-nav">
				<ul>
					<li><a href="/lk-profile.php" class="active">Личные данные</a></li>
					<li><a href="/lk-changepass.php">Смена пароля</a></li>
					<li><a href="/lk-history.php">История покупок</a></li>
					<li><a href="/basket.php">Корзина</a></li>
				</ul>
			</nav>
		</aside>
		<main class="lk__main">
			<p class="text-big lk__title">Ваши персональные данные</p>
			<!-- Если ошибка -->
			<div class="error-block">
				<p>Не правльный логин</p>
				<p>Не правльный пароль</p>
			</div>
			<!-- Если ошибка -->
			<form action="" class="vertical-form">
				<label class="form-group">
					<span class="form-group__label">ФИО:</span>
					<input type="text" name="xxx" class="text-input">
				</label>
				<div class="row">
					<div class="grid-6 grid-12_xs">
						<label class="form-group">
							<span class="form-group__label">E-mail*:</span>
							<input type="email" name="xxx" class="text-input error">
						</label>
					</div>
					<div class="grid-6 grid-12_xs">
						<label class="form-group">
							<span class="form-group__label">Телефон:</span>
							<input type="tel" name="xxx" class="text-input">
						</label>
					</div>
				</div>
				<label class="form-group">
					<span class="form-group__label">Адрес доставки:</span>
					<input type="text" name="xxx" class="text-input">
				</label>
				<label class="style-checkbox style-checkbox--black">
					<input type="checkbox" name="sdfsdf" value="XXX" checked required>
					<span>Я согласен на обработку персональных данных</span>
				</label>
				<button type="submit" class="btn">Сохранить</button>
			</form>
		</main>
	</div>
</section>



<?php include('footer.php'); ?>
