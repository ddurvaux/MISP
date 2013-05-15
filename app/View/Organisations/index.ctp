<div class="organisations index">
	<h2><?php echo __('Organisations'); ?></h2>
	<table cellpadding="0" cellspacing="0" class='table table-striped'>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>

			<th><?php echo $this->Paginator->sort('constituent_ref'); ?></th>
			<th><?php echo $this->Paginator->sort('fullname'); ?></th>

			<th><?php echo $this->Paginator->sort('organisation_category_id'); ?></th>

			<th><?php echo $this->Paginator->sort('organisation_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sector'); ?></th>
			<th><?php echo $this->Paginator->sort('sharing_group'); ?></th>

			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('functional_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('PGP'); ?></th>
			<th><?php echo $this->Paginator->sort('security'); ?></th>
			<th><?php echo $this->Paginator->sort('head_of_IT'); ?></th>
			<th><?php echo $this->Paginator->sort('IT_security_depts'); ?></th>
			<th><?php echo $this->Paginator->sort('head_of_security'); ?></th>
			<th><?php echo $this->Paginator->sort('IT_security_incident_handling'); ?></th>
			<th><?php echo $this->Paginator->sort('technico_operational_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('crypto'); ?></th>
			<th><?php echo $this->Paginator->sort('cooperation'); ?></th>
			<th><?php echo $this->Paginator->sort('malware_analysis'); ?></th>
			<th><?php echo $this->Paginator->sort('communicated_alerts'); ?></th>
			<th><?php echo $this->Paginator->sort('agreement_details'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organisations as $organisation): ?>
	<tr>
		<td><?php echo h($organisation['Organisation']['id']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['name']); ?>&nbsp;</td>

		<td><?php echo h($organisation['Organisation']['constituent_ref']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['fullname']); ?>&nbsp;</td>

		<td>
			<?php
			if(!empty($organisation['OrganisationCategory']['name'])){
				echo $this->Html->link($organisation['OrganisationCategory']['name'], array('controller' => 'organisation_categories', 'action' => 'view', $organisation['OrganisationCategory']['id']));
			}
			?>
		</td>

		<td>
			<?php
			if(!empty($organisation['OrganisationType']['name'])){
			echo $this->Html->link($organisation['OrganisationType']['name'], array('controller' => 'organisation_types', 'action' => 'view', $organisation['OrganisationType']['id']));
			}
			?>
			&nbsp;
		</td>
		<td><?php echo h($organisation['Organisation']['sector']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['sharing_group']); ?>&nbsp;</td>

		<td>
			<?php
			if(!empty($organisation['Country']['name'])){
				echo $this->Html->link($organisation['Country']['name'], array('controller' => 'countries', 'action' => 'view', $organisation['Country']['id']));
			}
			?>
			&nbsp;
		</td>
		<td><?php echo h($organisation['Organisation']['functional_contact']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['PGP']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['security']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['head_of_IT']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['IT_security_depts']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['head_of_security']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['IT_security_incident_handling']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['technico_operational_contact']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['crypto']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['cooperation']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['malware_analysis']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['communicated_alerts']); ?>&nbsp;</td>
		<td><?php echo h($organisation['Organisation']['agreement_details']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $organisation['Organisation']['id']), array('class' => 'btn')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $organisation['Organisation']['id']), array('class' => 'btn')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $organisation['Organisation']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $organisation['Organisation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Organisation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Organisation Categories'), array('controller' => 'organisation_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation Category'), array('controller' => 'organisation_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organisation Types'), array('controller' => 'organisation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation Type'), array('controller' => 'organisation_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
