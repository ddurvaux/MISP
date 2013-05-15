<?php /* @public $this ViewCC */ ?>

<?php $this->set('title_for_layout', sprintf(__('Edit %s'), __('Setting'))); ?>

<div class="settings form">
<?php echo $this->Form->create('Setting', array('url' => $this->passedArgs));?>
	<fieldset>
 		<legend><?php printf(__('Edit %s'), __('Setting')); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('key');
		echo $this->Form->input('value', array('class' => 'input-xxlarge',
            'div' => 'clear'));
        echo $this->Form->input('description', array('class' => 'input-xxlarge',
            'div' => 'clear'));
	?>
	</fieldset>
<?php
echo $this->Form->button(sprintf(__('Edit %s'), __('Setting')), array('class' => 'btn btn-primary'));
echo $this->Form->end();?>
</div>
<div class="actions">
	<ul>
        <li><?php echo $this->Html->link(sprintf(__('Delete %s'), __('Setting')),
                array('action'=>'delete',
                    $this->Form->value('Setting.id')), array('escape' => false), sprintf(__('Are you sure you want to delete # %s?'),
                            $this->Form->value('Setting.key'))); ?>
        </li>
        <li><?php echo $this->Html->link(sprintf(__('List %s'), __('Settings')), array('action'=>'index'), array('escape' => false)); ?></li>

	</ul>
</div>
