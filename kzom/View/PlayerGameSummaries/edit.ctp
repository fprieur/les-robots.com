<div class="playerGameSummaries form">
<?php echo $this->Form->create('PlayerGameSummary');?>
	<fieldset>
		<legend><?php echo __('Edit Game Summary'); ?></legend>
	<?php
	echo $this->Form->input('game_id', array('options'=> array($games)));
	echo $this->Form->input('goal_time');
	
	echo $this->Form->input('goal_period', array(
	    'separator' => ' ',
	    'options' => array('0'=>'1ère période', '1'=>'2e période'),
		'legend' => 'Période du but',
	    'type' => 'radio'
	));
		
	echo $this->Form->input('goal_team_id', array('options'=> array($teams)));
	echo $this->Form->input('goal_player_id', array('options'=> array($goalPlayers)));
	echo $this->Form->input('goal_assist_player_id', array('options'=> array($assistPlayers)));
	echo $this->Form->input('powerplay_goal', array(
	    'separator' => ' ',
	    'options' => array(1=>'Oui', '0'=>'Non'),
		'default' => '0',
		'legend' => 'But en avantage numérique?',
	    'type' => 'radio'
	));
			
	echo $this->Form->input('pk_goal', array(
	    'separator' => ' ',
	    'options' => array('1'=>'Oui', '0'=>'Non'),
		'default' => '0',
		'legend' => 'But en désavantage numérique?',
	    'type' => 'radio'
	));
	
	?>
	</fieldset>
<?php echo $this->Form->end(__('Soumettre'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $this->Form->value('PlayerGameSummary.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PlayerGameSummary.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lister les buts de joueurs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Lister les parties'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouvelle Partie'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
