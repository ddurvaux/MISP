<div class="organisations view">
<h2><?php  echo __('Organisation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID Legacy'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['ID_legacy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Constituent Ref'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['constituent_ref']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fullname'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cat'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['cat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organisation Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($organisation['OrganisationCategory']['name'], array('controller' => 'organisation_categories', 'action' => 'view', $organisation['OrganisationCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['Type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organisation Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($organisation['OrganisationType']['name'], array('controller' => 'organisation_types', 'action' => 'view', $organisation['OrganisationType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['sector']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sharing Group'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['sharing_group']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($organisation['Country']['name'], array('controller' => 'countries', 'action' => 'view', $organisation['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Functional Contact'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['functional_contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PGP'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['PGP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Security'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['security']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Head Of IT'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['head_of_IT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IT Security Depts'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['IT_security_depts']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Head Of Security'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['head_of_security']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IT Security Incident Handling'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['IT_security_incident_handling']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Technico Operational Contact'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['technico_operational_contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crypto'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['crypto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cooperation'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['cooperation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Malware Analysis'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['malware_analysis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Communicated Alerts'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['communicated_alerts']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agreement Details'); ?></dt>
		<dd>
			<?php echo h($organisation['Organisation']['agreement_details']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Organisation'), array('action' => 'edit', $organisation['Organisation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Organisation'), array('action' => 'delete', $organisation['Organisation']['id']), null, __('Are you sure you want to delete # %s?', $organisation['Organisation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Organisations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organisation Categories'), array('controller' => 'organisation_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation Category'), array('controller' => 'organisation_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organisation Types'), array('controller' => 'organisation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation Type'), array('controller' => 'organisation_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
