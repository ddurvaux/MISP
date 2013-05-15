<div class="domains view">
<h2><?php  echo __('Domain'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($domain['Domain']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domain'); ?></dt>
		<dd>
			<?php echo h($domain['Domain']['domain']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Domain'), array('action' => 'edit', $domain['Domain']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Domain'), array('action' => 'delete', $domain['Domain']['id']), null, __('Are you sure you want to delete # %s?', $domain['Domain']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Domains'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Domain'), array('action' => 'add')); ?> </li>
	</ul>
</div>
