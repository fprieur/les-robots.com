<div class="players form">
<?php echo $this->Form->create('Player');?>
	<fieldset>
		<legend><?php echo __('Add Player'); ?></legend>
	<?php
		echo $this->Form->input('season_id');
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('team_id');
		echo $this->Form->input('position');
		echo $this->Form->input('shot_catch');
		echo $this->Form->input('jersey_number');
		echo $this->Form->input('fullname');
		echo $this->Form->input('url');
		echo $this->Form->input('profile_image_url');
		echo $this->Form->input('weight');
		echo $this->Form->input('height');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('age');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Players'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('controller' => 'seasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season'), array('controller' => 'seasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goalie Stats'), array('controller' => 'goalie_stats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goalie Stat'), array('controller' => 'goalie_stats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Player Bios'), array('controller' => 'player_bios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player Bio'), array('controller' => 'player_bios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Player Stats'), array('controller' => 'player_stats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player Stat'), array('controller' => 'player_stats', 'action' => 'add')); ?> </li>
	</ul>
</div>
