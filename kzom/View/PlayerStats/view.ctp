<div class="playerStats view">
<h2><?php  echo __('Player Stat');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($playerStat['PlayerStat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playerStat['Player']['fullname'], array('controller' => 'players', 'action' => 'view', $playerStat['Player']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Games Played'); ?></dt>
		<dd>
			<?php echo h($playerStat['PlayerStat']['games_played']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goals'); ?></dt>
		<dd>
			<?php echo h($playerStat['PlayerStat']['goals']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assists'); ?></dt>
		<dd>
			<?php echo h($playerStat['PlayerStat']['assists']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Points'); ?></dt>
		<dd>
			<?php echo h($playerStat['PlayerStat']['points']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Points Per Game Average'); ?></dt>
		<dd>
			<?php echo h($playerStat['PlayerStat']['points_per_game_average']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Player Stat'), array('action' => 'edit', $playerStat['PlayerStat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Player Stat'), array('action' => 'delete', $playerStat['PlayerStat']['id']), null, __('Are you sure you want to delete # %s?', $playerStat['PlayerStat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Player Stats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player Stat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
