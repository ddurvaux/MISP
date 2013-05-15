<div class="detectMethods view">
<h2><?php  echo __('Detect Method'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($detectMethod['DetectMethod']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($detectMethod['DetectMethod']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($detectMethod['DetectMethod']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($detectMethod['DetectMethod']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detect Method'), array('action' => 'edit', $detectMethod['DetectMethod']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detect Method'), array('action' => 'delete', $detectMethod['DetectMethod']['id']), null, __('Are you sure you want to delete # %s?', $detectMethod['DetectMethod']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detect Methods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detect Method'), array('action' => 'add')); ?> </li>
	</ul>
</div>
