<div class="goalieStats form">
<?php echo $this->Form->create('GoalieStat');?>
	<fieldset>
		<legend><?php echo __('Add Goalie Stat'); ?></legend>
	<?php
		echo $this->Form->input('player_id');
		echo $this->Form->input('wins');
		echo $this->Form->input('wins_shootout');
		echo $this->Form->input('losses');
		echo $this->Form->input('losses_shootout');
		echo $this->Form->input('ties');
		echo $this->Form->input('goals_against');
		echo $this->Form->input('average');
		echo $this->Form->input('shots_against');
		echo $this->Form->input('efficacity_percentage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Goalie Stats'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
