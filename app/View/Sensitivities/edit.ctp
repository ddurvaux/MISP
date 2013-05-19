<div class="sensitivities form">
<?php echo $this->Form->create('Sensitivity'); ?>
    <fieldset>
        <legend><?php echo __('Edit Sensitivity'); ?></legend>
    <?php
        echo $this->Form->input('id');
        echo $this->Form->input('name');
    ?>
    </fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sensitivity.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sensitivity.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Sensitivities'), array('action' => 'index')); ?></li>
    </ul>
</div>
