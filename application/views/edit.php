<div class="uk-panel uk-panel-box">
	<h3 class="uk-panel-title">Update User</h3>

	<form class="uk-form add-form" action="/users/<?=$user->id?>" method="POST">
		<fieldset>
			<legend>First Name</legend>
			<div class="uk-form-row">
				<input type="text" name="first_name" value="<?=$user->first_name?>"/>
			</div>
		</fieldset>

		<fieldset>
			<legend>Last Name</legend>
			<div class="uk-form-row">
				<input type="text" name="last_name" value="<?=$user->last_name?>"/>
			</div>
		</fieldset>

		<fieldset>
			<legend>Email</legend>
			<div class="uk-form-row">
				<input type="email" name="email" value="<?=$user->email?>"/>
			</div>
		</fieldset>

		<button class="uk-button uk-button-primary" type="submit">Update User</button>
	</form>
</div>
