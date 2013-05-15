<div class="organisationCategories form">
<?php echo $this->Form->create('OrganisationCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Organisation Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrganisationCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OrganisationCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Organisation Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Organisations'), array('controller' => 'organisations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation'), array('controller' => 'organisations', 'action' => 'add')); ?> </li>
	</ul>
</div>
