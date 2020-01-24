
<div class="uk-panel uk-panel-box">
	<h3 class="uk-panel-title">Add User</h3>

	<form class="uk-form add-form" action="http://localhost/nilguncanbaz.github.io/ci3-rest-example/users" method="POST">
		<fieldset>
			<legend>First Name</legend>
			<div class="uk-form-row">
				<input type="text" name="first_name"/>
			</div>
		</fieldset>

		<fieldset>
			<legend>Last Name</legend>
			<div class="uk-form-row">
				<input type="text" name="last_name"/>
			</div>
		</fieldset>

		<fieldset>
			<legend>Email</legend>
			<div class="uk-form-row">
				<input type="email" name="email"/>
			</div>
		</fieldset>

		<button class="uk-button uk-button-primary" type="submit">Add User</button>
	</form>
</div>
