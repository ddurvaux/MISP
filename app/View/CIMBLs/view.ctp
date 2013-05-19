<div class="cIMBLs view">
<h2><?php  echo __('C I M B L'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cIMBL['CIMBL']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CIMBL'); ?></dt>
		<dd>
			<?php echo h($cIMBL['CIMBL']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($cIMBL['CIMBL']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($cIMBL['CIMBL']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sensitivity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cIMBL['Sensitivity']['name'], array('controller' => 'sensitivities', 'action' => 'view', $cIMBL['Sensitivity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('T L P'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cIMBL['TLP']['tlp'], array('controller' => 't_l_ps', 'action' => 'view', $cIMBL['TLP']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Number'); ?></dt>
		<dd>
			<?php echo h($cIMBL['CIMBL']['event_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IOC Number'); ?></dt>
		<dd>
			<?php echo h($cIMBL['CIMBL']['IOC_number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit C I M B L'), array('action' => 'edit', $cIMBL['CIMBL']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete C I M B L'), array('action' => 'delete', $cIMBL['CIMBL']['id']), null, __('Are you sure you want to delete # %s?', $cIMBL['CIMBL']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List C I M B Ls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New C I M B L'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensitivities'), array('controller' => 'sensitivities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensitivity'), array('controller' => 'sensitivities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T L Ps'), array('controller' => 't_l_ps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New T L P'), array('controller' => 't_l_ps', 'action' => 'add')); ?> </li>
	</ul>
</div>
