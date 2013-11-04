<div class="playerGameSummaries index">
	<h2><?php echo __('Les buts de joueurs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('game_id');?></th>
			<th><?php echo $this->Paginator->sort('goal_period');?></th>
			<th><?php echo $this->Paginator->sort('goal_time');?></th>
			<th><?php echo $this->Paginator->sort('goal_team_id');?></th>
			<th><?php echo $this->Paginator->sort('goal_player_id');?></th>
			<th><?php echo $this->Paginator->sort('goal_assist_player_id');?></th>
			<th><?php echo $this->Paginator->sort('powerplay_goal');?></th>
			<th><?php echo $this->Paginator->sort('pk_goal');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($playerGameSummaries as $playerGameSummary): ?>
	<tr>
		<td><?php echo h($playerGameSummary['PlayerGameSummary']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($playerGameSummary['Game']['id'], array('controller' => 'games', 'action' => 'view', $playerGameSummary['Game']['id'])); ?>
		</td>
		
		<td>
		<?php 
		if (h($playerGameSummary['PlayerGameSummary']['goal_period'] == 1)){
							echo '2';
						} else {
							echo '1';
						}
		?>
		&nbsp;</td>
		
		<td><?php echo h($playerGameSummary['PlayerGameSummary']['goal_time']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($playerGameSummary['Team']['name'], array('controller' => 'teams', 'action' => 'view', $playerGameSummary['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($playerGameSummary['GoalPlayer']['fullname'], array('controller' => 'teams', 'action' => 'view', $playerGameSummary['GoalPlayer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($playerGameSummary['AssistPlayer']['fullname'], array('controller' => 'teams', 'action' => 'view', $playerGameSummary['AssistPlayer']['id'])); ?>
		</td>
		
		<td>
		<?php 
		if (h($playerGameSummary['PlayerGameSummary']['powerplay_goal'] == 1)){
			echo 'oui';
		} else {
			echo 'non';
		}
		?>
		&nbsp;</td>
		
		<td>
		<?php 
		if (h($playerGameSummary['PlayerGameSummary']['pk_goal'] == 1)){
			echo 'oui';
		} else {
			echo 'non';
		}
		?>
		&nbsp;</td>
		
		
		
		<!-- <td><?php echo h($playerGameSummary['PlayerGameSummary']['pk_goal']); ?>&nbsp;</td> -->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $playerGameSummary['PlayerGameSummary']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $playerGameSummary['PlayerGameSummary']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $playerGameSummary['PlayerGameSummary']['id']), null, __('Are you sure you want to delete # %s?', $playerGameSummary['PlayerGameSummary']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Game Summary'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
