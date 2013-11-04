<div class="games form">
<?php echo $this->Form->create('Game');?>
	<fieldset>
		<legend><?php echo __('Edit Game'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('conference_id');
		echo $this->Form->input('season_id');
		echo $this->Form->input('team_vis_id', array('options'=> array($visteams)));
		echo $this->Form->input('team_home_id', array('options'=> array($hometeams)));
		echo $this->Form->input('score_vis');
		echo $this->Form->input('score_home');
		echo $this->Form->input('date');
		echo $this->Form->input('season_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Game.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Game.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Games'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('controller' => 'seasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season'), array('controller' => 'seasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Summaries'), array('controller' => 'game_summaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Summary'), array('controller' => 'game_summaries', 'action' => 'add')); ?> </li>
	</ul>
</div>
