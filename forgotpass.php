<?php include('header.php'); ?>


<section class="s-lk">
	<div class="container">
		<!-- Если ошибка -->
		<div class="error-block">
			<p>E-mail не найден в системе</p>
		</div>
		<!-- Если ошибка -->
		<p>Укажите ваш E-mail, и&nbsp;мы вшлем дальнейшие инструкции по&nbsp;восстановлению пароля на&nbsp;него.</p><br>
		<form action="" class="vertical-form">
			<label class="form-group">
				<span class="form-group__label">E-mail*:</span>
				<input type="email" name="xxx" class="text-input error">
			</label>
			<button type="submit" class="btn">Отправить</button>
		</form>

	</div>
</section>



<?php include('footer.php'); ?>
