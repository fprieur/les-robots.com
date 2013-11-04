<div class="playerGameSummaries view">
<h2><?php  echo __('Game Summary');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($playerGameSummary['PlayerGameSummary']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Game'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playerGameSummary['Game']['id'], array('controller' => 'games', 'action' => 'view', $playerGameSummary['Game']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Équipe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playerGameSummary['Team']['name'], array('controller' => 'teams', 'action' => 'view', $playerGameSummary['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Buteur'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playerGameSummary['GoalPlayer']['fullname'], array('controller' => 'teams', 'action' => 'view', $playerGameSummary['GoalPlayer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assistance'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playerGameSummary['AssistPlayer']['fullname'], array('controller' => 'teams', 'action' => 'view', $playerGameSummary['AssistPlayer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Avantage num.'); ?></dt>
		<dd>
			<?php 
			if (h($playerGameSummary['PlayerGameSummary']['powerplay_goal'] == 1)){
				echo 'oui';
			} else {
				echo 'non';
			}
			?>
		</dd>
		<dt><?php echo __('Désavatange num.'); ?></dt>
		<dd>
			<?php 
			if (h($playerGameSummary['PlayerGameSummary']['pk_goal'] == 1)){
				echo 'oui';
			} else {
				echo 'non';
			}
			?>
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Game Summary'), array('action' => 'edit', $playerGameSummary['PlayerGameSummary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Game Summary'), array('action' => 'delete', $playerGameSummary['PlayerGameSummary']['id']), null, __('Are you sure you want to delete # %s?', $playerGameSummary['PlayerGameSummary']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Game Summaries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game Summary'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
