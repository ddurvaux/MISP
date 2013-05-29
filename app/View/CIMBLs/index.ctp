<div class="cIMBLs index">
    <h2><?php echo __('C I M B Ls'); ?></h2>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-condensed">
    <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('local_date'); ?></th>
            <th><?php echo $this->Paginator->sort('notes'); ?></th>
            <th><?php echo $this->Paginator->sort('sensitivity_id'); ?></th>
            <th><?php echo $this->Paginator->sort('TLP_id'); ?></th>

            <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php foreach ($cIMBLs as $cIMBL): ?>
    <tr>
        <td><?php echo h($cIMBL['CIMBL']['id']); ?>&nbsp;</td>
        <td><?php echo h($cIMBL['CIMBL']['name']); ?>&nbsp;</td>
        <td><?php echo $this->Time->format('d-m-Y', $cIMBL['CIMBL']['local_date']); ?>&nbsp;</td>
        <td><?php echo h($cIMBL['CIMBL']['notes']); ?>&nbsp;</td>
        <td><?php echo $cIMBL['Sensitivity']['name']; ?></td>
        <td><?php echo $cIMBL['TLP']['tlp']; ?></td>
        <td class="actions">
            <!--<?php echo $this->Html->link(__('View'), array('action' => 'view', $cIMBL['CIMBL']['id']), array('class' => 'btn')); ?>-->
            <?php echo $this->Html->link(__('D/L XML'), array('action' => 'download', $cIMBL['CIMBL']['id'], 'ext' => 'xml'), array('class' => 'btn')); ?>
            <?php echo $this->Html->link(__('D/L CSV'), array('action' => 'download', $cIMBL['CIMBL']['id'], 'ext' => 'csv'), array('class' => 'btn')); ?>
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cIMBL['CIMBL']['id']), array('class' => 'btn')); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cIMBL['CIMBL']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $cIMBL['CIMBL']['id'])); ?>
        </td>
    </tr>
<?php endforeach; ?>
    </table>
    <p>
    <?php
    echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>  </p>
    <div class="pagination">
        <ul>
    <?php
        echo $this->Paginator->prev('&laquo; ' . __('previous'), array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'prev disabled', 'escape' => false, 'disabledTag' => 'span'));
        echo $this->Paginator->numbers(array('modulus' => 20, 'separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'span'));
        echo $this->Paginator->next(__('next') . ' &raquo;', array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'next disabled', 'escape' => false, 'disabledTag' => 'span'));
    ?>
    </ul>
    </div>
</div>

<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New C I M B L'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Sensitivities'), array('controller' => 'sensitivities', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Sensitivity'), array('controller' => 'sensitivities', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List T L Ps'), array('controller' => 't_l_ps', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New T L P'), array('controller' => 't_l_ps', 'action' => 'add')); ?> </li>
    </ul>
</div>
