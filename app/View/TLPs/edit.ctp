<div class="tLPs form">
<?php echo $this->Form->create('TLP'); ?>
    <fieldset>
        <legend><?php echo __('Edit T L P'); ?></legend>
    <?php
        echo $this->Form->input('id');
        echo $this->Form->input('tlp');
    ?>
    </fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TLP.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TLP.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List T L Ps'), array('action' => 'index')); ?></li>
    </ul>
</div>
