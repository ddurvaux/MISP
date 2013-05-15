<div class="domains index">
	<h2><?php echo __('Domains'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-condensed">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('domain'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($domains as $domain): ?>
	<tr>
		<td><?php echo h($domain['Domain']['id']); ?>&nbsp;</td>
		<td><?php echo h($domain['Domain']['domain']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $domain['Domain']['id']), array('class' => 'btn')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $domain['Domain']['id']), array('class' => 'btn')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $domain['Domain']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $domain['Domain']['id'])); ?>
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
	<div class="pagination">
	<?php
		echo $this->Paginator->prev('&laquo; ' . __('previous'), array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'prev disabled', 'escape' => false, 'disabledTag' => 'span'));
		echo $this->Paginator->numbers(array('modulus' => 20, 'separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'span'));
		echo $this->Paginator->next(__('next') . ' &raquo;', array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'next disabled', 'escape' => false, 'disabledTag' => 'span'));
	?>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Domain'), array('action' => 'add')); ?></li>
	</ul>
</div>
