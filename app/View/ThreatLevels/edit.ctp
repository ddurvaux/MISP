<div class="threatLevels form">
<?php echo $this->Form->create('ThreatLevel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Threat Level'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class' => 'input-xxlarge', 'div' => 'clear'));
	?>
	</fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ThreatLevel.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ThreatLevel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Threat Levels'), array('action' => 'index')); ?></li>
	</ul>
</div>
