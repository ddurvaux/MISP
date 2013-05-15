<div class="reportingChannels form">
<?php echo $this->Form->create('ReportingChannel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reporting Channel'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('reporting_channel');
	?>
	</fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ReportingChannel.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ReportingChannel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reporting Channels'), array('action' => 'index')); ?></li>
	</ul>
</div>
