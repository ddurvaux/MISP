<div class="tLPs form">
<?php echo $this->Form->create('TLP'); ?>
    <fieldset>
        <legend><?php echo __('Add T L P'); ?></legend>
    <?php
        echo $this->Form->input('tlp');
    ?>
    </fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List T L Ps'), array('action' => 'index')); ?></li>
    </ul>
</div>
