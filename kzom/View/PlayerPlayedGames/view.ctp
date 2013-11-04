<div class="playerPlayedGames view">
<h2><?php  echo __('Player Played Game'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($playerPlayedGame['PlayerPlayedGame']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playerPlayedGame['Player']['fullname'], array('controller' => 'players', 'action' => 'view', $playerPlayedGame['Player']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Game'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playerPlayedGame['Game']['id'], array('controller' => 'games', 'action' => 'view', $playerPlayedGame['Game']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Player Played Game'), array('action' => 'edit', $playerPlayedGame['PlayerPlayedGame']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Player Played Game'), array('action' => 'delete', $playerPlayedGame['PlayerPlayedGame']['id']), null, __('Are you sure you want to delete # %s?', $playerPlayedGame['PlayerPlayedGame']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Player Played Games'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player Played Game'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
