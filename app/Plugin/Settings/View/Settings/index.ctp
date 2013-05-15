<?php /* @public $this ViewCC */ ?>

<?php
$this->set('title_for_layout', __('Settings'));

if(empty($this->passedArgs['page'])){
    $this->passedArgs['page'] = 1;
}
if(empty($this->passedArgs['key'])){
    $this->passedArgs['key'] = '';
}
?>

<div class="settings index">
    <h2><?php echo __('Filters');?></h2>
	<?php echo $this->Form->create(); ?>
    <div class="input-append">
        <?php
        echo $this->Form->input('key', array('value' => $this->passedArgs['key'], 'div' => false, 'class' => 'input-xxlarge'));
        echo $this->Form->button('Go', array('class' => 'btn', 'div' => false));
        ?>
    </div>
        <?php
        echo $this->Form->end();

	?>
	<h2><?php echo __('Settings');?></h2>
	<table cellpadding="0" cellspacing="0" class="fullwidth">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('key');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($settings as $setting){
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="odd"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo h($setting['Setting']['id']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['key']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['value']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $setting['Setting']['id'], 'page' => $this->passedArgs['page']), array('class' => 'btn')); ?>
            <?php echo $this->Html->link(__('Delete'), array('action'=>'delete', $setting['Setting']['id'], 'page' => $this->passedArgs['page']), array('class' => 'btn'), sprintf(__('Are you sure you want to delete %s?'), $setting['Setting']['key'])); ?>
		</td>
	</tr>
<?php } ?>
	</table>

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
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s'), __('Setting')),
                array('action' => 'add', 'page' => $this->passedArgs['page']),
                array('escape' => false, 'title'=> sprintf(__('New %s'), __('Setting')))); ?>
        </li>
	</ul>
</div>
