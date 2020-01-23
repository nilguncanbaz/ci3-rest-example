<div class="uk-panel uk-panel-box">
	<h3 class="uk-panel-title">Users (<?=$users->total?>)</h3>

	<table class="uk-table uk-table-striped users">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>E-Mail</th>
			<th style="width: 140px"></th>
		</tr>

		<?php foreach ($users->data as $user) { ?>
		<tr>
			<td><?=$user->first_name?></td>
			<td><?=$user->last_name?></td>
			<td><?=$user->email	?></td>
			<td>
				<a href="/users/<?=$user->id?>/edit">
					<button class="uk-button uk-button-primary" type="button">Edit</button>
				</a>
				<a href="/users/<?=$user->id?>/delete">
					<button class="uk-button uk-button-danger" type="button">Delete</button>
				</a>
			</td>
		</tr>
		<?php } ?>
	</table>

	<?php for($i = 1; $i <= $users->total_pages; $i++){ ?>
		<a href="/users?page=<?=$i?>">
			<button class="uk-button uk-button-primary"><?=$i?></button>
		</a>
	<?php } ?>
</div>
