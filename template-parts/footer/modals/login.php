<div id="enter" class="login mfp-hide">
	<h4 class="login__title modal-title">Войдите в свой аккаунт</h4>
	<p class="login__question modal-text">Еще нет учетной записи? <span><a href="#reg"
				class="popup-link-2 link-more">Зарегистрируйтесь сейчас</a></span>, это займет не более минуты</p>
	<form action="#" id="log" class="log">

		<span class="modal-сaution">Такого аккаунта не существует</span>
		<span class="modal-сaution">Неверный E-mail или пароль</span>

		<div class="log__group">
			<label>Email</label>
			<input type="email" name="email_mod" class="log__input">
		</div>

		<div class="log__group show-pass">
			<label>Пароль</label>
			<input id="password" type="password" name="password_mod" class="log__input">
			<span class="log__eye password-eye" data-target="#password">
				<svg width="34" height="22">
					<use xlink:href="#eye" />
				</svg>
			</span>
		</div>
		<div class="log__wrap">
			<div class="log__group check">
				<input id="check" type="checkbox" name="remember" value="remember">
				<label for="check">Запомнить пароль</label>
			</div>
			<a href="#recovery" class="popup-link-1 log__forget">Забыли пароль?</a>
		</div>
		<div class="log__btn">
			<input id="entry" type="submit" data-submit value="Войти" class="btn" />
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