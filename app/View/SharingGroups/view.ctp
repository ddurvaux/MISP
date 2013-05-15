<div class="sharingGroups view">
<h2><?php  echo __('Sharing Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sharingGroup['SharingGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($sharingGroup['SharingGroup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($sharingGroup['SharingGroup']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($sharingGroup['SharingGroup']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sharing Group'), array('action' => 'edit', $sharingGroup['SharingGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sharing Group'), array('action' => 'delete', $sharingGroup['SharingGroup']['id']), null, __('Are you sure you want to delete # %s?', $sharingGroup['SharingGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sharing Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sharing Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($sharingGroup['Event'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event-id'); ?></th>
		<th><?php echo __('Detect Place'); ?></th>
		<th><?php echo __('Detect Place Id'); ?></th>
		<th><?php echo __('Detect Method'); ?></th>
		<th><?php echo __('Detect Method Id'); ?></th>
		<th><?php echo __('Org'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Detect Time'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Report Time'); ?></th>
		<th><?php echo __('Reporter Name'); ?></th>
		<th><?php echo __('Reporter Organisation Id'); ?></th>
		<th><?php echo __('Report Channel'); ?></th>
		<th><?php echo __('Reporter Channel Id'); ?></th>
		<th><?php echo __('Report Notes'); ?></th>
		<th><?php echo __('Campaign-id'); ?></th>
		<th><?php echo __('TTP Id'); ?></th>
		<th><?php echo __('TTPCat'); ?></th>
		<th><?php echo __('TTP Category Id'); ?></th>
		<th><?php echo __('TTP Type'); ?></th>
		<th><?php echo __('TTP Vector'); ?></th>
		<th><?php echo __('TTPName'); ?></th>
		<th><?php echo __('TTP Description'); ?></th>
		<th><?php echo __('TargetedDomain'); ?></th>
		<th><?php echo __('TargetedEntity'); ?></th>
		<th><?php echo __('Targeted Domain Id'); ?></th>
		<th><?php echo __('Targeted Organisation Id'); ?></th>
		<th><?php echo __('AssetCat'); ?></th>
		<th><?php echo __('Asset Category Id'); ?></th>
		<th><?php echo __('AssetName'); ?></th>
		<th><?php echo __('AssetDetails'); ?></th>
		<th><?php echo __('Attribute'); ?></th>
		<th><?php echo __('DataType'); ?></th>
		<th><?php echo __('DataAmount'); ?></th>
		<th><?php echo __('AttributesDetails'); ?></th>
		<th><?php echo __('Assessment Level'); ?></th>
		<th><?php echo __('Assessment Level Id'); ?></th>
		<th><?php echo __('AssessmentScope'); ?></th>
		<th><?php echo __('AssessmentNotes'); ?></th>
		<th><?php echo __('Risk'); ?></th>
		<th><?php echo __('ThreatType'); ?></th>
		<th><?php echo __('Info'); ?></th>
		<th><?php echo __('Potential-materialized'); ?></th>
		<th><?php echo __('SharingAuthorisation'); ?></th>
		<th><?php echo __('SharingStatus'); ?></th>
		<th><?php echo __('SharingDate'); ?></th>
		<th><?php echo __('SharingNotes'); ?></th>
		<th><?php echo __('CIMBL'); ?></th>
		<th><?php echo __('Export'); ?></th>
		<th><?php echo __('IOC'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Uuid'); ?></th>
		<th><?php echo __('Revision'); ?></th>
		<th><?php echo __('Private'); ?></th>
		<th><?php echo __('Cluster'); ?></th>
		<th><?php echo __('Communitie'); ?></th>
		<th><?php echo __('Attribute Count'); ?></th>
		<th><?php echo __('Hop Count'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th><?php echo __('Analysis'); ?></th>
		<th><?php echo __('Orgc'); ?></th>
		<th><?php echo __('Dist Change'); ?></th>
		<th><?php echo __('From'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sharingGroup['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['Event-id']; ?></td>
			<td><?php echo $event['detect_place']; ?></td>
			<td><?php echo $event['detect_place_id']; ?></td>
			<td><?php echo $event['detect_method']; ?></td>
			<td><?php echo $event['detect_method_id']; ?></td>
			<td><?php echo $event['org']; ?></td>
			<td><?php echo $event['date']; ?></td>
			<td><?php echo $event['detect_time']; ?></td>
			<td><?php echo $event['start_time']; ?></td>
			<td><?php echo $event['end_time']; ?></td>
			<td><?php echo $event['report_time']; ?></td>
			<td><?php echo $event['reporter_name']; ?></td>
			<td><?php echo $event['reporter_organisation_id']; ?></td>
			<td><?php echo $event['report_channel']; ?></td>
			<td><?php echo $event['reporter_channel_id']; ?></td>
			<td><?php echo $event['report_notes']; ?></td>
			<td><?php echo $event['Campaign-id']; ?></td>
			<td><?php echo $event['TTP_id']; ?></td>
			<td><?php echo $event['TTPCat']; ?></td>
			<td><?php echo $event['TTP_category_id']; ?></td>
			<td><?php echo $event['TTP_type']; ?></td>
			<td><?php echo $event['TTP_vector']; ?></td>
			<td><?php echo $event['TTPName']; ?></td>
			<td><?php echo $event['TTP_description']; ?></td>
			<td><?php echo $event['TargetedDomain']; ?></td>
			<td><?php echo $event['TargetedEntity']; ?></td>
			<td><?php echo $event['targeted_domain_id']; ?></td>
			<td><?php echo $event['targeted_organisation_id']; ?></td>
			<td><?php echo $event['AssetCat']; ?></td>
			<td><?php echo $event['asset_category_id']; ?></td>
			<td><?php echo $event['AssetName']; ?></td>
			<td><?php echo $event['AssetDetails']; ?></td>
			<td><?php echo $event['Attribute']; ?></td>
			<td><?php echo $event['DataType']; ?></td>
			<td><?php echo $event['DataAmount']; ?></td>
			<td><?php echo $event['AttributesDetails']; ?></td>
			<td><?php echo $event['assessment_level']; ?></td>
			<td><?php echo $event['assessment_level_id']; ?></td>
			<td><?php echo $event['AssessmentScope']; ?></td>
			<td><?php echo $event['AssessmentNotes']; ?></td>
			<td><?php echo $event['risk']; ?></td>
			<td><?php echo $event['ThreatType']; ?></td>
			<td><?php echo $event['info']; ?></td>
			<td><?php echo $event['Potential-materialized']; ?></td>
			<td><?php echo $event['SharingAuthorisation']; ?></td>
			<td><?php echo $event['SharingStatus']; ?></td>
			<td><?php echo $event['SharingDate']; ?></td>
			<td><?php echo $event['SharingNotes']; ?></td>
			<td><?php echo $event['CIMBL']; ?></td>
			<td><?php echo $event['Export']; ?></td>
			<td><?php echo $event['IOC']; ?></td>
			<td><?php echo $event['user_id']; ?></td>
			<td><?php echo $event['uuid']; ?></td>
			<td><?php echo $event['revision']; ?></td>
			<td><?php echo $event['private']; ?></td>
			<td><?php echo $event['cluster']; ?></td>
			<td><?php echo $event['communitie']; ?></td>
			<td><?php echo $event['attribute_count']; ?></td>
			<td><?php echo $event['hop_count']; ?></td>
			<td><?php echo $event['published']; ?></td>
			<td><?php echo $event['analysis']; ?></td>
			<td><?php echo $event['orgc']; ?></td>
			<td><?php echo $event['dist_change']; ?></td>
			<td><?php echo $event['from']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), null, __('Are you sure you want to delete # %s?', $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
