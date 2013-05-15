<div class="reportingChannels view">
<h2><?php  echo __('Reporting Channel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reportingChannel['ReportingChannel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reporting Channel'); ?></dt>
		<dd>
			<?php echo h($reportingChannel['ReportingChannel']['reporting_channel']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reporting Channel'), array('action' => 'edit', $reportingChannel['ReportingChannel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reporting Channel'), array('action' => 'delete', $reportingChannel['ReportingChannel']['id']), null, __('Are you sure you want to delete # %s?', $reportingChannel['ReportingChannel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reporting Channels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reporting Channel'), array('action' => 'add')); ?> </li>
	</ul>
</div>
