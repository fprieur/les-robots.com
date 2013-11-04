<div class="teamStandings form">
<?php echo $this->Form->create('TeamStanding');?>
	<fieldset>
		<legend><?php echo __('Add Team Standing'); ?></legend>
	<?php
		echo $this->Form->input('team_id');
		echo $this->Form->input('conference_id');
		echo $this->Form->input('games_played');
		echo $this->Form->input('wins');
		echo $this->Form->input('wins_shootout');
		echo $this->Form->input('losses');
		echo $this->Form->input('losses_shootout');
		echo $this->Form->input('ties');
		echo $this->Form->input('points');
		echo $this->Form->input('franc_jeu');
		echo $this->Form->input('total_points');
		echo $this->Form->input('goals_for');
		echo $this->Form->input('goals_against');
		echo $this->Form->input('strike');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Team Standings'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
