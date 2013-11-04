<div class="playerStats index">
	<h2><?php echo __('Player Stats');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('player_id');?></th>
			<th><?php echo $this->Paginator->sort('games_played');?></th>
			<th><?php echo $this->Paginator->sort('goals');?></th>
			<th><?php echo $this->Paginator->sort('assists');?></th>
			<th><?php echo $this->Paginator->sort('points');?></th>
			<th><?php echo $this->Paginator->sort('points_per_game_average');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($playerStats as $playerStat): ?>
	<tr>
		<td><?php echo h($playerStat['PlayerStat']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($playerStat['Player']['fullname'], array('controller' => 'players', 'action' => 'view', $playerStat['Player']['id'])); ?>
		</td>
		<td><?php echo h($playerStat['PlayerStat']['games_played']); ?>&nbsp;</td>
		<td><?php echo h($playerStat['PlayerStat']['goals']); ?>&nbsp;</td>
		<td><?php echo h($playerStat['PlayerStat']['assists']); ?>&nbsp;</td>
		<td><?php echo h($playerStat['PlayerStat']['points']); ?>&nbsp;</td>
		<td><?php echo h($playerStat['PlayerStat']['points_per_game_average']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $playerStat['PlayerStat']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $playerStat['PlayerStat']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $playerStat['PlayerStat']['id']), null, __('Are you sure you want to delete # %s?', $playerStat['PlayerStat']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Player Stat'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
