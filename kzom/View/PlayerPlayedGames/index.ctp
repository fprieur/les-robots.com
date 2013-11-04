<div class="playerPlayedGames index">
	<h2><?php echo __('Player Played Games'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('player_id'); ?></th>
			<th><?php echo $this->Paginator->sort('game_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($playerPlayedGames as $playerPlayedGame): ?>
	<tr>
		<td><?php echo h($playerPlayedGame['PlayerPlayedGame']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($playerPlayedGame['Player']['fullname'], array('controller' => 'players', 'action' => 'view', $playerPlayedGame['Player']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($playerPlayedGame['Game']['id'], array('controller' => 'games', 'action' => 'view', $playerPlayedGame['Game']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $playerPlayedGame['PlayerPlayedGame']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $playerPlayedGame['PlayerPlayedGame']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $playerPlayedGame['PlayerPlayedGame']['id']), null, __('Are you sure you want to delete # %s?', $playerPlayedGame['PlayerPlayedGame']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Player Played Game'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
