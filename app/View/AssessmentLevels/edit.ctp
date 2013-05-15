<div class="assessmentLevels form">
<?php echo $this->Form->create('AssessmentLevel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Assessment Level'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('definition');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AssessmentLevel.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AssessmentLevel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assessment Levels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
