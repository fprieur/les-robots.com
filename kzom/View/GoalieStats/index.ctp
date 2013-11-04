<div class="goalieStats index">
	<h2><?php echo __('Goalie Stats');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('player_id');?></th>
			<th><?php echo $this->Paginator->sort('wins');?></th>
			<th><?php echo $this->Paginator->sort('wins_shootout');?></th>
			<th><?php echo $this->Paginator->sort('losses');?></th>
			<th><?php echo $this->Paginator->sort('losses_shootout');?></th>
			<th><?php echo $this->Paginator->sort('ties');?></th>
			<th><?php echo $this->Paginator->sort('goals_against');?></th>
			<th><?php echo $this->Paginator->sort('average');?></th>
			<th><?php echo $this->Paginator->sort('shots_against');?></th>
			<th><?php echo $this->Paginator->sort('efficacity_percentage');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($goalieStats as $goalieStat): ?>
	<tr>
		<td><?php echo h($goalieStat['GoalieStat']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($goalieStat['Player']['fullname'], array('controller' => 'players', 'action' => 'view', $goalieStat['Player']['id'])); ?>
		</td>
		<td><?php echo h($goalieStat['GoalieStat']['wins']); ?>&nbsp;</td>
		<td><?php echo h($goalieStat['GoalieStat']['wins_shootout']); ?>&nbsp;</td>
		<td><?php echo h($goalieStat['GoalieStat']['losses']); ?>&nbsp;</td>
		<td><?php echo h($goalieStat['GoalieStat']['losses_shootout']); ?>&nbsp;</td>
		<td><?php echo h($goalieStat['GoalieStat']['ties']); ?>&nbsp;</td>
		<td><?php echo h($goalieStat['GoalieStat']['goals_against']); ?>&nbsp;</td>
		<td><?php echo h($goalieStat['GoalieStat']['average']); ?>&nbsp;</td>
		<td><?php echo h($goalieStat['GoalieStat']['shots_against']); ?>&nbsp;</td>
		<td><?php echo h($goalieStat['GoalieStat']['efficacity_percentage']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $goalieStat['GoalieStat']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $goalieStat['GoalieStat']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $goalieStat['GoalieStat']['id']), null, __('Are you sure you want to delete # %s?', $goalieStat['GoalieStat']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Goalie Stat'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
