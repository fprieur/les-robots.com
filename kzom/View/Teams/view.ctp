<div class="teams view">
<h2><?php  echo __('Team');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($team['Team']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conference'); ?></dt>
		<dd>
			<?php echo $this->Html->link($team['Conference']['name'], array('controller' => 'conferences', 'action' => 'view', $team['Conference']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($team['Team']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($team['Team']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Url'); ?></dt>
		<dd>
			<?php echo h($team['Team']['image_url']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Team'), array('action' => 'edit', $team['Team']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Team'), array('action' => 'delete', $team['Team']['id']), null, __('Are you sure you want to delete # %s?', $team['Team']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Team Standings'), array('controller' => 'team_standings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team Standing'), array('controller' => 'team_standings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Players');?></h3>
	<?php if (!empty($team['Player'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Season Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Shot Catch'); ?></th>
		<th><?php echo __('Jersey Number'); ?></th>
		<th><?php echo __('Fullname'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($team['Player'] as $player): ?>
		<tr>
			<td><?php echo $player['id'];?></td>
			<td><?php echo $player['season_id'];?></td>
			<td><?php echo $player['firstname'];?></td>
			<td><?php echo $player['lastname'];?></td>
			<td><?php echo $player['team_id'];?></td>
			<td><?php echo $player['position'];?></td>
			<td><?php echo $player['shot_catch'];?></td>
			<td><?php echo $player['jersey_number'];?></td>
			<td><?php echo $player['fullname'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'players', 'action' => 'view', $player['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'players', 'action' => 'edit', $player['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'players', 'action' => 'delete', $player['id']), null, __('Are you sure you want to delete # %s?', $player['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Team Standings');?></h3>
	<?php if (!empty($team['TeamStanding'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Rank'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($team['TeamStanding'] as $teamStanding): ?>
		<tr>
			<td><?php echo $teamStanding['id'];?></td>
			<td><?php echo $teamStanding['team_id'];?></td>
			<td><?php echo $teamStanding['rank'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'team_standings', 'action' => 'view', $teamStanding['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'team_standings', 'action' => 'edit', $teamStanding['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'team_standings', 'action' => 'delete', $teamStanding['id']), null, __('Are you sure you want to delete # %s?', $teamStanding['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Team Standing'), array('controller' => 'team_standings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
