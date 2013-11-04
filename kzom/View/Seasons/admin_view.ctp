<div class="seasons view">
<h2><?php  echo __('Season');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($season['Season']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($season['Season']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Season'), array('action' => 'edit', $season['Season']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Season'), array('action' => 'delete', $season['Season']['id']), null, __('Are you sure you want to delete # %s?', $season['Season']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Conferences');?></h3>
	<?php if (!empty($season['Conference'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Season Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($season['Conference'] as $conference): ?>
		<tr>
			<td><?php echo $conference['id'];?></td>
			<td><?php echo $conference['name'];?></td>
			<td><?php echo $conference['season_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'conferences', 'action' => 'view', $conference['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'conferences', 'action' => 'edit', $conference['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'conferences', 'action' => 'delete', $conference['id']), null, __('Are you sure you want to delete # %s?', $conference['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Games');?></h3>
	<?php if (!empty($season['Game'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Season Id'); ?></th>
		<th><?php echo __('Home Team Id'); ?></th>
		<th><?php echo __('Vis Team Id'); ?></th>
		<th><?php echo __('Score Home'); ?></th>
		<th><?php echo __('Score Vis'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Game Id'); ?></th>
		<th><?php echo __('Season Status'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($season['Game'] as $game): ?>
		<tr>
			<td><?php echo $game['id'];?></td>
			<td><?php echo $game['season_id'];?></td>
			<td><?php echo $game['home_team_id'];?></td>
			<td><?php echo $game['vis_team_id'];?></td>
			<td><?php echo $game['score_home'];?></td>
			<td><?php echo $game['score_vis'];?></td>
			<td><?php echo $game['date'];?></td>
			<td><?php echo $game['game_id'];?></td>
			<td><?php echo $game['season_status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'games', 'action' => 'view', $game['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'games', 'action' => 'edit', $game['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'games', 'action' => 'delete', $game['id']), null, __('Are you sure you want to delete # %s?', $game['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Players');?></h3>
	<?php if (!empty($season['Player'])):?>
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
		foreach ($season['Player'] as $player): ?>
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
