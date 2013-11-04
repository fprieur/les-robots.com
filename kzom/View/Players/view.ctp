<div class="players view">
<h2><?php  echo __('Player');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($player['Player']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Season'); ?></dt>
		<dd>
			<?php echo $this->Html->link($player['Season']['description'], array('controller' => 'seasons', 'action' => 'view', $player['Season']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($player['Player']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($player['Player']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($player['Team']['name'], array('controller' => 'teams', 'action' => 'view', $player['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($player['Player']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shot Catch'); ?></dt>
		<dd>
			<?php echo h($player['Player']['shot_catch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jersey Number'); ?></dt>
		<dd>
			<?php echo h($player['Player']['jersey_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fullname'); ?></dt>
		<dd>
			<?php echo h($player['Player']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($player['Player']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile Image Url'); ?></dt>
		<dd>
			<?php echo h($player['Player']['profile_image_url']); ?>
			&nbsp;
		</dd>
		<dd>
			<?php echo h($player['Player']['weight']); ?>
			&nbsp;
		</dd>
		<dd>
			<?php echo h($player['Player']['height']); ?>
			&nbsp;
		</dd>
		<dd>
			<?php echo h($player['Player']['birthdate']); ?>
			&nbsp;
		</dd>
		<dd>
			<?php echo h($player['Player']['age']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Player'), array('action' => 'edit', $player['Player']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Player'), array('action' => 'delete', $player['Player']['id']), null, __('Are you sure you want to delete # %s?', $player['Player']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seasons'), array('controller' => 'seasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Season'), array('controller' => 'seasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goalie Stats'), array('controller' => 'goalie_stats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goalie Stat'), array('controller' => 'goalie_stats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Player Bios'), array('controller' => 'player_bios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player Bio'), array('controller' => 'player_bios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Player Stats'), array('controller' => 'player_stats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player Stat'), array('controller' => 'player_stats', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Goalie Stats');?></h3>
	<?php if (!empty($player['GoalieStat'])):?>
		<dl>
			<dt><?php echo __('Id');?></dt>
		<dd>
	<?php echo $player['GoalieStat']['id'];?>
&nbsp;</dd>
		<dt><?php echo __('Player Id');?></dt>
		<dd>
	<?php echo $player['GoalieStat']['player_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Games Played');?></dt>
		<dd>
	<?php echo $player['GoalieStat']['games_played'];?>
&nbsp;</dd>
		<dt><?php echo __('Saves');?></dt>
		<dd>
	<?php echo $player['GoalieStat']['saves'];?>
&nbsp;</dd>
		<dt><?php echo __('Saves Percentage');?></dt>
		<dd>
	<?php echo $player['GoalieStat']['saves_percentage'];?>
&nbsp;</dd>
		<dt><?php echo __('Wins');?></dt>
		<dd>
	<?php echo $player['GoalieStat']['wins'];?>
&nbsp;</dd>
		<dt><?php echo __('Losses');?></dt>
		<dd>
	<?php echo $player['GoalieStat']['losses'];?>
&nbsp;</dd>
		<dt><?php echo __('Goals Against Average');?></dt>
		<dd>
	<?php echo $player['GoalieStat']['goals_against_average'];?>
&nbsp;</dd>
		<dt><?php echo __('Shots Against');?></dt>
		<dd>
	<?php echo $player['GoalieStat']['shots_against'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Goalie Stat'), array('controller' => 'goalie_stats', 'action' => 'edit', $player['GoalieStat']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Player Bios');?></h3>
	<?php if (!empty($player['PlayerBio'])):?>
		<dl>
			<dt><?php echo __('Id');?></dt>
		<dd>
	<?php echo $player['PlayerBio']['id'];?>
&nbsp;</dd>
		<dt><?php echo __('Player Id');?></dt>
		<dd>
	<?php echo $player['PlayerBio']['player_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Bio');?></dt>
		<dd>
	<?php echo $player['PlayerBio']['bio'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Player Bio'), array('controller' => 'player_bios', 'action' => 'edit', $player['PlayerBio']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Player Stats');?></h3>
	<?php if (!empty($player['PlayerStat'])):?>
		<dl>
			<dt><?php echo __('Id');?></dt>
		<dd>
	<?php echo $player['PlayerStat']['id'];?>
&nbsp;</dd>
		<dt><?php echo __('Player Id');?></dt>
		<dd>
	<?php echo $player['PlayerStat']['player_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Games Played');?></dt>
		<dd>
	<?php echo $player['PlayerStat']['games_played'];?>
&nbsp;</dd>
		<dt><?php echo __('Goals');?></dt>
		<dd>
	<?php echo $player['PlayerStat']['goals'];?>
&nbsp;</dd>
		<dt><?php echo __('Assists');?></dt>
		<dd>
	<?php echo $player['PlayerStat']['assists'];?>
&nbsp;</dd>
		<dt><?php echo __('Points');?></dt>
		<dd>
	<?php echo $player['PlayerStat']['points'];?>
&nbsp;</dd>
		<dt><?php echo __('Points Per Game Average');?></dt>
		<dd>
	<?php echo $player['PlayerStat']['points_per_game_average'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Player Stat'), array('controller' => 'player_stats', 'action' => 'edit', $player['PlayerStat']['id'])); ?></li>
			</ul>
		</div>
	</div>
	