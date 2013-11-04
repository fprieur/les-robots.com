<div class="gameSummaries view">
<h2><?php  echo __('Game Summary');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gameSummary['GameSummary']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Game'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gameSummary['Game']['id'], array('controller' => 'games', 'action' => 'view', $gameSummary['Game']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goal Team Id'); ?></dt>
		<dd>
			<?php echo h($gameSummary['GameSummary']['goal_team_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goal Player Id'); ?></dt>
		<dd>
			<?php echo h($gameSummary['GameSummary']['goal_player_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goal Assist Player Id'); ?></dt>
		<dd>
			<?php echo h($gameSummary['GameSummary']['goal_assist_player_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Powerplay Goal'); ?></dt>
		<dd>
			<?php echo h($gameSummary['GameSummary']['powerplay_goal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pk Goal'); ?></dt>
		<dd>
			<?php echo h($gameSummary['GameSummary']['pk_goal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Punition In Min'); ?></dt>
		<dd>
			<?php echo h($gameSummary['GameSummary']['punition_in_min']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Game Summary'), array('action' => 'edit', $gameSummary['GameSummary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Game Summary'), array('action' => 'delete', $gameSummary['GameSummary']['id']), null, __('Are you sure you want to delete # %s?', $gameSummary['GameSummary']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Summaries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Summary'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
