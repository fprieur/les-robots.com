<div class="players index">
	<h2><?php echo __('Players');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('season_id');?></th>
			<th><?php echo $this->Paginator->sort('firstname');?></th>
			<th><?php echo $this->Paginator->sort('lastname');?></th>
			<th><?php echo $this->Paginator->sort('team_id');?></th>
			<th><?php echo $this->Paginator->sort('position');?></th>
			<th><?php echo $this->Paginator->sort('shot_catch');?></th>
			<th><?php echo $this->Paginator->sort('jersey_number');?></th>
			<th><?php echo $this->Paginator->sort('fullname');?></th>
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th><?php echo $this->Paginator->sort('profile_image_url');?></th>
			<th><?php echo $this->Paginator->sort('weight');?></th>
			<th><?php echo $this->Paginator->sort('height');?></th>
			<th><?php echo $this->Paginator->sort('birthdate');?></th>
			<th><?php echo $this->Paginator->sort('age');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($players as $player): ?>
	<tr>
		<td><?php echo h($player['Player']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($player['Season']['description'], array('controller' => 'seasons', 'action' => 'view', $player['Season']['id'])); ?>
		</td>
		<td><?php echo h($player['Player']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['lastname']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($player['Team']['name'], array('controller' => 'teams', 'action' => 'view', $player['Team']['id'])); ?>
		</td>
		<td><?php echo h($player['Player']['position']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['shot_catch']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['jersey_number']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['url']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['profile_image_url']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['weight']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['height']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['birthdate']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['age']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $player['Player']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $player['Player']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $player['Player']['id']), null, __('Are you sure you want to delete # %s?', $player['Player']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('controller' => 'seasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season'), array('controller' => 'seasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goalie Stats'), array('controller' => 'goalie_stats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goalie Stat'), array('controller' => 'goalie_stats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Player Bios'), array('controller' => 'player_bios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player Bio'), array('controller' => 'player_bios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Player Stats'), array('controller' => 'player_stats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player Stat'), array('controller' => 'player_stats', 'action' => 'add')); ?> </li>
	</ul>
</div>
