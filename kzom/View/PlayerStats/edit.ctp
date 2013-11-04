<div class="playerStats form">
<?php echo $this->Form->create('PlayerStat');?>
	<fieldset>
		<legend><?php echo __('Edit Player Stat'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('player_id');
		echo $this->Form->input('games_played');
		echo $this->Form->input('goals');
		echo $this->Form->input('assists');
		echo $this->Form->input('points');
		echo $this->Form->input('points_per_game_average');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PlayerStat.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PlayerStat.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Player Stats'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
