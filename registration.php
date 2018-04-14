<?php include('header.php'); ?>


<section class="s-lk">
	<div class="container">
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
			<label class="form-group">
				<span class="form-group__label">E-mail*:</span>
				<input type="email" name="xxx" class="text-input error">
			</label>
			<label class="form-group">
				<span class="form-group__label">Введите пароль*:</span>
				<input type="password" name="xxx" class="text-input">
			</label>
			<label class="form-group">
				<span class="form-group__label">Повторите пароль*:</span>
				<input type="password" name="xxx" class="text-input">
			</label>
			<label class="style-checkbox style-checkbox--black">
				<input type="checkbox" name="sdfsdf" value="XXX" checked required>
				<span>Я согласен на обработку персональных данных</span>
			</label>
			<button type="submit" class="btn">Отправить</button>
		</form>

	</div>
</section>



<?php include('footer.php'); ?>
