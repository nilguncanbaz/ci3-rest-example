<div class="uk-panel uk-panel-box">
	<h3 class="uk-panel-title">User Info</h3>

    <form class="uk-form add-form">
        <fieldset>
            <legend>First Name</legend>
            <div class="uk-form-row">
            <?=$user->first_name?>
            </div>
        </fieldset>

        <fieldset>
            <legend>Last Name</legend>
            <div class="uk-form-row">
            <?=$user->last_name?>
            </div>
        </fieldset>

        <fieldset>
            <legend>Email</legend>
            <div class="uk-form-row">
            <?=$user->email?>
            </div>
        </fieldset>
    </form>
</div>
