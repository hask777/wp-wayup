<div id="reg" class="reg mfp-hide">
	<h4 class="reg__title modal-title">Регистрация нового аккаунта</h4>
	<p class="reg__question modal-text">Уже есть аккаунт? <span><a href="#enter"
				class="popup-link-1 link-more">Войдите</a></span></p>

	<form action="#" id="regist" class="log">

		<span class="modal-сaution">Пароль должен содержать не менее 9 символов</span>
		<span class="modal-сaution">Пользователь с таким адресом электронной почты уже существует</span>

		<div class="log__group">
			<label>Имя</label>
			<input type="text" name="name_mod" class="log__input">
		</div>
		<div class="log__group">
			<label>Email</label>
			<input type="email" name="email_mod" class="log__input">
		</div>
		<div class="log__group">
			<label>Телефон</label>
			<input type="tel" name="tel_mod" class="log__input">
		</div>
		<div class="log__group show-pass">
			<label>Пароль</label>
			<input id="reg-pass" type="password" name="password_mod" class="log__input">
			<span class="log__eye password-eye" data-target="#reg-pass">
				<svg width="34" height="22">
					<use xlink:href="#eye" />
				</svg>
			</span>
		</div>
		<div class="log__wrap">

			<div class="log__btn">
				<input id="do-reg" type="submit" data-submit value="Зарегистрироваться" class="btn" />
			</div>
			<div class="log__group check">
				<input id="rem" type="checkbox" name="remember" value="remember">
				<label for="rem">Запомнить пароль</label>
			</div>
		</div>
	</form>
	<div class="var">
		<p class="var__text">Или войдите в систему с помощью</p>
		<ul class="var__list">
			<li>
				<a href="#" class="var__link var__link_goo">
					<svg width="14" height="14">
						<use xlink:href="#google" />
					</svg>
				</a>
			</li>
			<li>
				<a href="#" class="var__link var__link_vk">
					<svg width="18" height="18">
						<use xlink:href="#vk" />
					</svg>
				</a>
			</li>
			<li>
				<a href="#" class="var__link var__link_fb">
					<svg width="16" height="16">
						<use xlink:href="#facebook" />
					</svg>
				</a>
			</li>
		</ul>
	</div>
</div>