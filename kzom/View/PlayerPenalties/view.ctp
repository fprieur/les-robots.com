<div class="playerPenalties view">
<h2><?php  echo __('Player Penalty'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($playerPenalty['PlayerPenalty']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playerPenalty['Player']['fullname'], array('controller' => 'players', 'action' => 'view', $playerPenalty['Player']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nb Minutes'); ?></dt>
		<dd>
			<?php echo h($playerPenalty['PlayerPenalty']['nb_minutes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Player Penalty'), array('action' => 'edit', $playerPenalty['PlayerPenalty']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Player Penalty'), array('action' => 'delete', $playerPenalty['PlayerPenalty']['id']), null, __('Are you sure you want to delete # %s?', $playerPenalty['PlayerPenalty']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Player Penalties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player Penalty'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
