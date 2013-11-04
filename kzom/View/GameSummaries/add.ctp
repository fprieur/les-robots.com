<div class="gameSummaries form">
<?php echo $this->Form->create('GameSummary');?>
	<fieldset>
		<legend><?php echo __('Add Game Summary'); ?></legend>
	<?php
		echo $this->Form->input('game_id');
		echo $this->Form->input('goal_team_id');
		echo $this->Form->input('goal_player_id');
		echo $this->Form->input('goal_assist_player_id');
		echo $this->Form->input('powerplay_goal');
		echo $this->Form->input('pk_goal');
		echo $this->Form->input('punition_in_min');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Game Summaries'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
