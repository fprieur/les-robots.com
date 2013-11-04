<div class="games index">
	<h2><?php echo __('Games');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('conference_id');?></th>
			<th><?php echo $this->Paginator->sort('season_id');?></th>
			<th><?php echo $this->Paginator->sort('team_id_vis');?></th>
			<th><?php echo $this->Paginator->sort('team_id_home');?></th>
			<th><?php echo $this->Paginator->sort('score_vis');?></th>
			<th><?php echo $this->Paginator->sort('score_home');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('season_status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($games as $game): ?>
	<tr>
		<td><?php echo h($game['Game']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($game['Conference']['name'], array('controller' => 'conferences', 'action' => 'view', $game['Conference']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($game['Season']['description'], array('controller' => 'seasons', 'action' => 'view', $game['Season']['id'])); ?>
		</td>
		<td><?php echo $this->Html->link($game['Visteam']['name'], array('controller' => 'teams', 'action' => 'view', $game['Visteam']['id'])); ?></td>
		<td><?php echo $this->Html->link($game['Hometeam']['name'], array('controller' => 'teams', 'action' => 'view', $game['Hometeam']['id'])); ?></td>
		<td><?php echo h($game['Game']['score_vis']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['score_home']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['date']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['season_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $game['Game']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $game['Game']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $game['Game']['id']), null, __('Are you sure you want to delete # %s?', $game['Game']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Game'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('controller' => 'seasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season'), array('controller' => 'seasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Summaries'), array('controller' => 'game_summaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Summary'), array('controller' => 'game_summaries', 'action' => 'add')); ?> </li>
	</ul>
</div>
