<div class="organisations form">
<?php echo $this->Form->create('Organisation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Organisation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('ID_legacy');
		echo $this->Form->input('constituent_ref');
		echo $this->Form->input('fullname');
		echo $this->Form->input('cat');
		echo $this->Form->input('organisation_category_id');
		echo $this->Form->input('Type');
		echo $this->Form->input('organisation_type_id');
		echo $this->Form->input('sector');
		echo $this->Form->input('sharing_group');
		echo $this->Form->input('country');
		echo $this->Form->input('country_id');
		echo $this->Form->input('functional_contact');
		echo $this->Form->input('PGP');
		echo $this->Form->input('security');
		echo $this->Form->input('head_of_IT');
		echo $this->Form->input('IT_security_depts');
		echo $this->Form->input('head_of_security');
		echo $this->Form->input('IT_security_incident_handling');
		echo $this->Form->input('technico_operational_contact');
		echo $this->Form->input('crypto');
		echo $this->Form->input('cooperation');
		echo $this->Form->input('malware_analysis');
		echo $this->Form->input('communicated_alerts');
		echo $this->Form->input('agreement_details');
	?>
	</fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Organisation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Organisation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Organisations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Organisation Categories'), array('controller' => 'organisation_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation Category'), array('controller' => 'organisation_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organisation Types'), array('controller' => 'organisation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation Type'), array('controller' => 'organisation_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
