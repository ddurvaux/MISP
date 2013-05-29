<?php /* @public $this ViewCC */ ?>

<?php $this->set('title_for_layout', sprintf(__('Add %s'), __('Setting'))); ?>

<div class="settings form">
<?php echo $this->Form->create('Setting', array('url' => $this->passedArgs));?>
    <fieldset>
        <legend><?php printf(__('Add %s'), __('Setting')); ?></legend>
    <?php
        echo $this->Form->input('key', array('type' => 'text', 'required' => true));
        echo $this->Form->input('value', array(
            'class' => 'input-xxlarge',
            'required' => true,
            'div' => 'clear'));
        echo $this->Form->input('description', array('class' => 'input-xxlarge',
            'div' => 'clear'));
    ?>
    </fieldset>
<?php
echo $this->Form->button(sprintf(__('Add %s'), __('Setting')), array('class' => 'btn btn-primary'));
echo $this->Form->end();?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $this->Html->link(sprintf(__('List %s'), __('Settings')), array('action'=>'index'), array('escape' => false)); ?></li>
    </ul>
</div>
