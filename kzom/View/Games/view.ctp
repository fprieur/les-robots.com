<div class="games view">
<h2><?php  echo __('Game');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($game['Game']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conference'); ?></dt>
		<dd>
			<?php echo $this->Html->link($game['Conference']['name'], array('controller' => 'conferences', 'action' => 'view', $game['Conference']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Season'); ?></dt>
		<dd>
			<?php echo $this->Html->link($game['Season']['description'], array('controller' => 'seasons', 'action' => 'view', $game['Season']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Id Vis'); ?></dt>
		<dd>
			<?php echo $this->Html->link($game['Visteam']['name'], array('controller' => 'teams', 'action' => 'view', $game['Visteam']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Id Home'); ?></dt>
		<dd>
			<?php echo $this->Html->link($game['Hometeam']['name'], array('controller' => 'teams', 'action' => 'view', $game['Hometeam']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score Vis'); ?></dt>
		<dd>
			<?php echo h($game['Game']['score_vis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score Home'); ?></dt>
		<dd>
			<?php echo h($game['Game']['score_home']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($game['Game']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Season Status'); ?></dt>
		<dd>
			<?php echo h($game['Game']['season_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Game'), array('action' => 'edit', $game['Game']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Game'), array('action' => 'delete', $game['Game']['id']), null, __('Are you sure you want to delete # %s?', $game['Game']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conferences'), array('controller' => 'conferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conference'), array('controller' => 'conferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('controller' => 'seasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season'), array('controller' => 'seasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Summaries'), array('controller' => 'game_summaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Summary'), array('controller' => 'game_summaries', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Game Summaries');?></h3>
	<?php if (!empty($game['GameSummary'])):?>
		<dl>
			<dt><?php echo __('Id');?></dt>
		<dd>
	<?php echo $game['GameSummary']['id'];?>
&nbsp;</dd>
		<dt><?php echo __('Game Id');?></dt>
		<dd>
	<?php echo $game['GameSummary']['game_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Goal Team Id');?></dt>
		<dd>
	<?php echo $game['GameSummary']['goal_team_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Goal Player Id');?></dt>
		<dd>
	<?php echo $game['GameSummary']['goal_player_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Goal Assist Player Id');?></dt>
		<dd>
	<?php echo $game['GameSummary']['goal_assist_player_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Powerplay Goal');?></dt>
		<dd>
	<?php echo $game['GameSummary']['powerplay_goal'];?>
&nbsp;</dd>
		<dt><?php echo __('Pk Goal');?></dt>
		<dd>
	<?php echo $game['GameSummary']['pk_goal'];?>
&nbsp;</dd>
		<dt><?php echo __('Punition In Min');?></dt>
		<dd>
	<?php echo $game['GameSummary']['punition_in_min'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Game Summary'), array('controller' => 'game_summaries', 'action' => 'edit', $game['GameSummary']['id'])); ?></li>
			</ul>
		</div>
	</div>
	