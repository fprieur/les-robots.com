<div class="playerPenalties index">
	<h2><?php echo __('Player Penalties'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('player_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nb_minutes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($playerPenalties as $playerPenalty): ?>
	<tr>
		<td><?php echo h($playerPenalty['PlayerPenalty']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($playerPenalty['Player']['fullname'], array('controller' => 'players', 'action' => 'view', $playerPenalty['Player']['id'])); ?>
		</td>
		<td><?php echo h($playerPenalty['PlayerPenalty']['nb_minutes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $playerPenalty['PlayerPenalty']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $playerPenalty['PlayerPenalty']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $playerPenalty['PlayerPenalty']['id']), null, __('Are you sure you want to delete # %s?', $playerPenalty['PlayerPenalty']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Player Penalty'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
