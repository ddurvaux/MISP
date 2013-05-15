<div class="organisationTypes form">
<?php echo $this->Form->create('OrganisationType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Organisation Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrganisationType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OrganisationType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Organisation Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Organisations'), array('controller' => 'organisations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation'), array('controller' => 'organisations', 'action' => 'add')); ?> </li>
	</ul>
</div>
