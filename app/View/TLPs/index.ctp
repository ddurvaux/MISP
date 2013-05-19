<div class="tLPs index">
    <h2><?php echo __('T L Ps'); ?></h2>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-condensed">
    <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('tlp'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php foreach ($tLPs as $tLP): ?>
    <tr>
        <td><?php echo h($tLP['TLP']['id']); ?>&nbsp;</td>
        <td><?php echo h($tLP['TLP']['tlp']); ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tLP['TLP']['id']), array('class' => 'btn')); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tLP['TLP']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $tLP['TLP']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New T L P'), array('action' => 'add')); ?></li>
    </ul>
</div>
