<?php include('header.php'); ?>


<section class="s-lk">
	<div class="lk container">
		<aside class="lk__aside">
			<nav class="aside-nav">
				<ul>
					<li><a href="/lk-profile.php">Личные данные</a></li>
					<li><a href="/lk-changepass.php" class="active">Смена пароля</a></li>
					<li><a href="/lk-history.php">История покупок</a></li>
					<li><a href="/basket.php">Корзина</a></li>
				</ul>
			</nav>
		</aside>
		<main class="lk__main">
			<p class="text-big lk__title">Смена пароля</p>
			<!-- Если ошибка -->
			<div class="error-block">
				<p>Пароли не совпадают</p>
			</div>
			<!-- Если ошибка -->
			<form action="" class="vertical-form">
				<label class="form-group">
					<span class="form-group__label">Введите новый пароль:</span>
					<input type="password" name="xxx" class="text-input">
				</label>
				<label class="form-group">
					<span class="form-group__label">Повторите пароль:</span>
					<input type="password" name="xxx" class="text-input">
				</label>
				<button type="submit" class="btn">Сохранить</button>
			</form>
		</main>
	</div>
</section>



<?php include('footer.php'); ?>
