<div class="playerBios view">
<h2><?php  echo __('Player Bio');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($playerBio['PlayerBio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playerBio['Player']['id'], array('controller' => 'players', 'action' => 'view', $playerBio['Player']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
			<?php echo h($playerBio['PlayerBio']['bio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Player Bio'), array('action' => 'edit', $playerBio['PlayerBio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Player Bio'), array('action' => 'delete', $playerBio['PlayerBio']['id']), null, __('Are you sure you want to delete # %s?', $playerBio['PlayerBio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Player Bios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player Bio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
