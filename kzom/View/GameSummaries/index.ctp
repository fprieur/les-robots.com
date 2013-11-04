<div class="gameSummaries index">
	<h2><?php echo __('Game Summaries');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('game_id');?></th>
			<th><?php echo $this->Paginator->sort('goal_team_id');?></th>
			<th><?php echo $this->Paginator->sort('goal_player_id');?></th>
			<th><?php echo $this->Paginator->sort('goal_assist_player_id');?></th>
			<th><?php echo $this->Paginator->sort('powerplay_goal');?></th>
			<th><?php echo $this->Paginator->sort('pk_goal');?></th>
			<th><?php echo $this->Paginator->sort('punition_in_min');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($gameSummaries as $gameSummary): ?>
	<tr>
		<td><?php echo h($gameSummary['GameSummary']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($gameSummary['Game']['id'], array('controller' => 'games', 'action' => 'view', $gameSummary['Game']['id'])); ?>
		</td>
		<td><?php echo h($gameSummary['GameSummary']['goal_team_id']); ?>&nbsp;</td>
		<td><?php echo h($gameSummary['GameSummary']['goal_player_id']); ?>&nbsp;</td>
		<td><?php echo h($gameSummary['GameSummary']['goal_assist_player_id']); ?>&nbsp;</td>
		<td><?php echo h($gameSummary['GameSummary']['powerplay_goal']); ?>&nbsp;</td>
		<td><?php echo h($gameSummary['GameSummary']['pk_goal']); ?>&nbsp;</td>
		<td><?php echo h($gameSummary['GameSummary']['punition_in_min']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gameSummary['GameSummary']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gameSummary['GameSummary']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gameSummary['GameSummary']['id']), null, __('Are you sure you want to delete # %s?', $gameSummary['GameSummary']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Game Summary'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
