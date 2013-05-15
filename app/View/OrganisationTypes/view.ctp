<div class="organisationTypes view">
<h2><?php  echo __('Organisation Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($organisationType['OrganisationType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($organisationType['OrganisationType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($organisationType['OrganisationType']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Organisation Type'), array('action' => 'edit', $organisationType['OrganisationType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Organisation Type'), array('action' => 'delete', $organisationType['OrganisationType']['id']), null, __('Are you sure you want to delete # %s?', $organisationType['OrganisationType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Organisation Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organisations'), array('controller' => 'organisations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organisation'), array('controller' => 'organisations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Organisations'); ?></h3>
	<?php if (!empty($organisationType['Organisation'])){ ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('ID Legacy'); ?></th>
		<th><?php echo __('Constituent Ref'); ?></th>
		<th><?php echo __('Fullname'); ?></th>
		<th><?php echo __('Cat'); ?></th>
		<th><?php echo __('Organisation Category Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Organisation Type Id'); ?></th>
		<th><?php echo __('Sector'); ?></th>
		<th><?php echo __('Sharing Group'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Functional Contact'); ?></th>
		<th><?php echo __('PGP'); ?></th>
		<th><?php echo __('Security'); ?></th>
		<th><?php echo __('Head Of IT'); ?></th>
		<th><?php echo __('IT Security Depts'); ?></th>
		<th><?php echo __('Head Of Security'); ?></th>
		<th><?php echo __('IT Security Incident Handling'); ?></th>
		<th><?php echo __('Technico Operational Contact'); ?></th>
		<th><?php echo __('Crypto'); ?></th>
		<th><?php echo __('Cooperation'); ?></th>
		<th><?php echo __('Malware Analysis'); ?></th>
		<th><?php echo __('Communicated Alerts'); ?></th>
		<th><?php echo __('Agreement Details'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($organisationType['Organisation'] as $organisation){ ?>
		<tr>
			<td><?php echo $organisation['id']; ?></td>
			<td><?php echo $organisation['name']; ?></td>
			<td><?php echo $organisation['ID_legacy']; ?></td>
			<td><?php echo $organisation['constituent_ref']; ?></td>
			<td><?php echo $organisation['fullname']; ?></td>
			<td><?php echo $organisation['cat']; ?></td>
			<td><?php echo $organisation['organisation_category_id']; ?></td>
			<td><?php echo $organisation['Type']; ?></td>
			<td><?php echo $organisation['organisation_type_id']; ?></td>
			<td><?php echo $organisation['sector']; ?></td>
			<td><?php echo $organisation['sharing_group']; ?></td>
			<td><?php echo $organisation['country']; ?></td>
			<td><?php echo $organisation['country_id']; ?></td>
			<td><?php echo $organisation['functional_contact']; ?></td>
			<td><?php echo $organisation['PGP']; ?></td>
			<td><?php echo $organisation['security']; ?></td>
			<td><?php echo $organisation['head_of_IT']; ?></td>
			<td><?php echo $organisation['IT_security_depts']; ?></td>
			<td><?php echo $organisation['head_of_security']; ?></td>
			<td><?php echo $organisation['IT_security_incident_handling']; ?></td>
			<td><?php echo $organisation['technico_operational_contact']; ?></td>
			<td><?php echo $organisation['crypto']; ?></td>
			<td><?php echo $organisation['cooperation']; ?></td>
			<td><?php echo $organisation['malware_analysis']; ?></td>
			<td><?php echo $organisation['communicated_alerts']; ?></td>
			<td><?php echo $organisation['agreement_details']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'organisations', 'action' => 'view', $organisation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'organisations', 'action' => 'edit', $organisation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'organisations', 'action' => 'delete', $organisation['id']), null, __('Are you sure you want to delete # %s?', $organisation['id'])); ?>
			</td>
		</tr>
	<?php } ?>
	</table>
<?php } ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Organisation'), array('controller' => 'organisations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
