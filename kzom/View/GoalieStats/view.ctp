<div class="goalieStats view">
<h2><?php  echo __('Goalie Stat');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($goalieStat['GoalieStat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player'); ?></dt>
		<dd>
			<?php echo $this->Html->link($goalieStat['Player']['fullname'], array('controller' => 'players', 'action' => 'view', $goalieStat['Player']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wins'); ?></dt>
		<dd>
			<?php echo h($goalieStat['GoalieStat']['wins']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wins shootout'); ?></dt>
		<dd>
			<?php echo h($goalieStat['GoalieStat']['wins_shootout']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Losses'); ?></dt>
		<dd>
			<?php echo h($goalieStat['GoalieStat']['losses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Losses shootout'); ?></dt>
		<dd>
			<?php echo h($goalieStat['GoalieStat']['losses_shootout']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ties'); ?></dt>
		<dd>
			<?php echo h($goalieStat['GoalieStat']['ties']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goals Against'); ?></dt>
		<dd>
			<?php echo h($goalieStat['GoalieStat']['goals_against']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Average'); ?></dt>
		<dd>
			<?php echo h($goalieStat['GoalieStat']['average']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shots Against'); ?></dt>
		<dd>
			<?php echo h($goalieStat['GoalieStat']['shots_against']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Efficacity Percentage'); ?></dt>
		<dd>
			<?php echo h($goalieStat['GoalieStat']['efficacity_percentage']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Goalie Stat'), array('action' => 'edit', $goalieStat['GoalieStat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Goalie Stat'), array('action' => 'delete', $goalieStat['GoalieStat']['id']), null, __('Are you sure you want to delete # %s?', $goalieStat['GoalieStat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Goalie Stats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goalie Stat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
