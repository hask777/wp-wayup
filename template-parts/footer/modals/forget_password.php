<div id="recovery" class="recovery mfp-hide">
	<div class="forget">
		<p class="forget__title modal-subtitle">Забыли пароль?</p>
		<p class="forget__text modal-text">Введите ваш Email. Вам будет выслан проверочный код. После получения кода
			подтверждения вы сможете выбрать новый пароль для своей учетной записи.</p>
		<form action="#" id="recover" class="log">

			<span class="modal-сaution">Пароль был отправлен на ваш Email</span>
			<span class="modal-сaution">Пользователя с таким Email не существует</span>

			<div class="log__group">
				<label>Email</label>
				<input type="email" name="email_mod" class="log__input">
			</div>
			<div class="log__btn">
				<input id="pass" type="submit" data-submit value="Отправить пароль" class="btn" />
			</div>
		</form>
		<a href="#enter" class="popup-link-1 link-more">
			<svg width="18" height="20">
				<use xlink:href="#nav-right" />
			</svg>
			Назад
		</a>
	</div>
	<!---------------------- Сonfirmation code ---------------------->
	<div class="confirm">
		<p class="confirm__title  modal-subtitle">Введите код подтверждения</p>

		<form action="#" id="key" class="log">

			<span class="modal-сaution">Неверный код</span>

			<div class="log__group">
				<label>Код подтверждения</label>
				<input type="text" name="confirm" class="log__input">
			</div>
			<div class="log__btn">
				<input id="confirm" type="submit" data-submit value="Подтвердить" class="btn" />
			</div>
		</form>
		<a href="#enter" class="popup-link-1 link-more">
			<svg width="18" height="20">
				<use xlink:href="#nav-right" />
			</svg>
			Назад
		</a>
	</div>

	<!---------------------- New password ---------------------->
	<div class="new-pass">
		<p class="new-pass__title  modal-subtitle">Придумайте новый пароль</p>
		<p class="new-pass__text modal-text">Пароль должен содержать не менее 9 символов</p>

		<form action="#" id="create" class="log">

			<span class="modal-сaution">Вы успешно сменили пароль</span>

			<div class="log__group show-pass">
				<label>Новый пароль</label>
				<input id="new-pass" type="password" name="password_mod" class="log__input">
				<span class="log__eye password-eye" data-target="#new-pass">
					<svg width="34" height="22">
						<use xlink:href="#eye" />
					</svg>
				</span>
			</div>
			<div class="log__group show-pass">
				<label>Подтвердите пароль</label>
				<input id="confirm-pass" type="password" name="password_mod" class="log__input">
				<span class="log__eye password-eye" data-target="#confirm-pass">
					<svg width="34" height="22">
						<use xlink:href="#eye" />
					</svg>
				</span>
			</div>
			<div class="log__wrap">
				<div class="log__btn">
					<input type="submit" id="conf" data-submit value="Подтвердить" class="btn" />
				</div>
				<a href="#enter" class="popup-link-1 log__enter">Войти</a>
			</div>
		</form>
		<a href="#enter" class="popup-link-1 link-more">
			<svg width="18" height="20">
				<use xlink:href="#nav-right" />
			</svg>
			Назад
		</a>
	</div>

</div>