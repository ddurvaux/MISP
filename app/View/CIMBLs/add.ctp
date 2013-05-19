<div class="cIMBLs form">
<?php echo $this->Form->create('CIMBL'); ?>
    <fieldset>
        <legend><?php echo __('Add CIMBL'); ?></legend>
    <?php
        echo $this->Form->input('name', array('type' => 'text'));
        //echo $this->Form->input('date');
        echo $this->Form->input('local_date', array(
            'type' => 'text',
            'class' => 'datepicker'
            ));
        echo $this->Form->input('notes');
        echo $this->Form->input('sensitivity_id', array('div' => 'input clear'));
        echo $this->Form->input('TLP_id');
    ?>
    </fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List C I M B Ls'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Sensitivities'), array('controller' => 'sensitivities', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Sensitivity'), array('controller' => 'sensitivities', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List T L Ps'), array('controller' => 't_l_ps', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New T L P'), array('controller' => 't_l_ps', 'action' => 'add')); ?> </li>
    </ul>
</div>
