<div class="playerPenalties form">
<?php echo $this->Form->create('PlayerPenalty'); ?>
	<fieldset>
		<legend><?php echo __('Edit Player Penalty'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('player_id');
		echo $this->Form->input('nb_minutes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PlayerPenalty.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PlayerPenalty.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Player Penalties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
