<div class="teamStandings view">
<h2><?php  echo __('Team Standing');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($teamStanding['Team']['name'], array('controller' => 'teams', 'action' => 'view', $teamStanding['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Games Played'); ?></dt>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['games_played']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wins'); ?></dt>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['wins']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wins Shootout'); ?></dt>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['wins_shootout']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Losses'); ?></dt>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['losses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Losses shootout'); ?></dt>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['losses_shootout']); ?>
			&nbsp;
		</dd>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['ties']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Points'); ?></dt>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['points']); ?>
			&nbsp;
		</dd>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['franc_jeu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Points total'); ?></dt>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['total_points']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goals For'); ?></dt>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['goals_for']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goals Against'); ?></dt>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['goals_against']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Strike'); ?></dt>
		<dd>
			<?php echo h($teamStanding['TeamStanding']['strike']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Team Standing'), array('action' => 'edit', $teamStanding['TeamStanding']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Team Standing'), array('action' => 'delete', $teamStanding['TeamStanding']['id']), null, __('Are you sure you want to delete # %s?', $teamStanding['TeamStanding']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Team Standings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team Standing'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
