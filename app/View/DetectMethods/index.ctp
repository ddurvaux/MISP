<div class="detectMethods index">
	<h2><?php echo __('Detect Methods'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-condensed">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detectMethods as $detectMethod): ?>
	<tr>
		<td><?php echo h($detectMethod['DetectMethod']['id']); ?>&nbsp;</td>
		<td><?php echo h($detectMethod['DetectMethod']['name']); ?>&nbsp;</td>
		<td><?php echo h($detectMethod['DetectMethod']['created']); ?>&nbsp;</td>
		<td><?php echo h($detectMethod['DetectMethod']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detectMethod['DetectMethod']['id']), array('class' => 'btn')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detectMethod['DetectMethod']['id']), array('class' => 'btn')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detectMethod['DetectMethod']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $detectMethod['DetectMethod']['id'])); ?>
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
		<ul>
		<?php
			echo $this->Paginator->prev('&laquo; ' . __('previous'), array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'escape' => false, 'disabledTag' => 'span'));
			echo $this->Paginator->numbers(array('modulus' => 20, 'separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'span'));
			echo $this->Paginator->next(__('next') . ' &raquo;', array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'escape' => false, 'disabledTag' => 'span'));
		?>
		</ul>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Detect Method'), array('action' => 'add')); ?></li>
	</ul>
</div>
