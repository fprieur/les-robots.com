<div class="teamStandings index">
	<h2><?php echo __('Team Standings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('team_id');?></th>
			<th><?php echo $this->Paginator->sort('conference_id');?></th>
			<th><?php echo $this->Paginator->sort('games_played');?></th>
			<th><?php echo $this->Paginator->sort('wins');?></th>
			<th><?php echo $this->Paginator->sort('wins_shootout');?></th>
			<th><?php echo $this->Paginator->sort('losses');?></th>
			<th><?php echo $this->Paginator->sort('losses_shootout');?></th>
			<th><?php echo $this->Paginator->sort('ties');?></th>
			<th><?php echo $this->Paginator->sort('points');?></th>
			<th><?php echo $this->Paginator->sort('franc_jeu');?></th>
			<th><?php echo $this->Paginator->sort('total_points');?></th>
			<th><?php echo $this->Paginator->sort('goals_for');?></th>
			<th><?php echo $this->Paginator->sort('goals_against');?></th>
			<th><?php echo $this->Paginator->sort('strike');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($teamStandings as $teamStanding): ?>
	<tr>
		<td><?php echo h($teamStanding['TeamStanding']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($teamStanding['Team']['name'], array('controller' => 'teams', 'action' => 'view', $teamStanding['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($teamStanding['Conference']['name'], array('controller' => 'conferences', 'action' => 'view', $teamStanding['Conference']['id'])); ?>
		</td>
		<td><?php echo h($teamStanding['TeamStanding']['games_played']); ?>&nbsp;</td>
		<td><?php echo h($teamStanding['TeamStanding']['wins']); ?>&nbsp;</td>
		<td><?php echo h($teamStanding['TeamStanding']['wins_shootout']); ?>&nbsp;</td>
		<td><?php echo h($teamStanding['TeamStanding']['losses']); ?>&nbsp;</td>
		<td><?php echo h($teamStanding['TeamStanding']['losses_shootout']); ?>&nbsp;</td>
		<td><?php echo h($teamStanding['TeamStanding']['ties']); ?>&nbsp;</td>
		<td><?php echo h($teamStanding['TeamStanding']['points']); ?>&nbsp;</td>
		<td><?php echo h($teamStanding['TeamStanding']['franc_jeu']); ?>&nbsp;</td>
		<td><?php echo h($teamStanding['TeamStanding']['total_points']); ?>&nbsp;</td>
		<td><?php echo h($teamStanding['TeamStanding']['goals_for']); ?>&nbsp;</td>
		<td><?php echo h($teamStanding['TeamStanding']['goals_against']); ?>&nbsp;</td>
		<td><?php echo h($teamStanding['TeamStanding']['strike']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $teamStanding['TeamStanding']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $teamStanding['TeamStanding']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $teamStanding['TeamStanding']['id']), null, __('Are you sure you want to delete # %s?', $teamStanding['TeamStanding']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Team Standing'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
