<div class="attributes index">
	<h2><?php echo __('Attributes');?></h2>
		<?php
if ($isSearch == 1) {
	echo "<h4>Results for all attributes";
	if ($keywordSearch != null) echo " with the value containing \"<b>" . h($keywordSearch) . "</b>\"";
	if ($keywordSearch2 != null) echo " excluding the events \"<b>" . h($keywordSearch2) . "</b>\"";
	if ($categorySearch != "ALL") echo " of category \"<b>" . h($categorySearch) . "</b>\"";
	if ($typeSearch != "ALL") echo " of type \"<b>" . h($typeSearch) . "</b>\"";
	if (isset($orgSearch) && $orgSearch != '' && $orgSearch != null) echo " created by the organisation \"<b>" . h($orgSearch) . "</b>\"";
	echo ":</h4>";
} ?>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-condensed">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('event_id');?></th>
			<th><?php echo $this->Paginator->sort('category');?></th>
			<th><?php echo $this->Paginator->sort('kill_chain_id');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th<?php echo ' title="' . $attrDescriptions['signature']['desc'] . '"';?>>
			<?php echo $this->Paginator->sort('signature');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$currentCount = 0;
	if ($isSearch == 1) {
	    // build the $replacePairs variable used to highlight the keywords
	    $replacementArray = array();
	    foreach ($keywordArray as &$keywordArrayElement) {
	        $keywordArrayElement = trim($keywordArrayElement);
	        if ("" == $keywordArrayElement) continue;
	        $replacementArray[] = '<span style="color:red">'.$keywordArrayElement.'</span>';
	    }
	    if (!empty($replacementArray))
	      $replacePairs = array_combine($keywordArray, $replacementArray);
	}

foreach ($attributes as $attribute):

	?>
	<tr>
		<td><?php echo $attribute['Attribute']['id']?></td>

		<td class="short">
			<div id="<?php echo $attribute['Attribute']['id']?>" title="<?php echo h($attribute['Event']['info'])?>">
			<?php
				if ($attribute['Event']['orgc'] == $me['org']) {
					echo $this->Html->link($attribute['Event']['id'], array('controller' => 'events', 'action' => 'view', $attribute['Event']['id']), array('class' => 'SameOrgLink'));
				} else {
					echo $this->Html->link($attribute['Event']['id'], array('controller' => 'events', 'action' => 'view', $attribute['Event']['id']));
				}
				$currentCount++;
			?>
			</div>
		</td>
		<td title="<?php echo $categoryDefinitions[$attribute['Attribute']['category']]['desc'];?>" class="short" onclick="document.location='
		<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'view', $attribute['Attribute']['event_id']), true);?>';">
		<?php echo h($attribute['Attribute']['category']); ?>&nbsp;</td>
		<td><?php echo $attribute['KillChain']['kill_chain']?></td>
		<td title="<?php echo $typeDefinitions[$attribute['Attribute']['type']]['desc'];?>" class="short" onclick="document.location='
		<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'view', $attribute['Attribute']['event_id']), true);?>';">
		<?php echo h($attribute['Attribute']['type']); ?>&nbsp;</td>
		<td onclick="document.location ='<?php echo $this->Html->url(array('controller' => 'events', 'action' => 'view', $attribute['Attribute']['event_id']), true);?>';">
	<?php
	$sigDisplay = nl2br(h($attribute['Attribute']['value']));
	if ($isSearch == 1 && !empty($replacePairs)) {
		// highlight the keywords if there are any
		$sigDisplay = strtr($sigDisplay, $replacePairs);
	}
	if ('attachment' == $attribute['Attribute']['type'] || 'malware-sample' == $attribute['Attribute']['type']) {
		echo $this->Html->link($sigDisplay, array('controller' => 'attributes', 'action' => 'download', $attribute['Attribute']['id']), array('escape' => FALSE));
	} elseif ('link' == $attribute['Attribute']['type']) {
		echo $this->Html->link($sigDisplay, nl2br(h($attribute['Attribute']['value'])), array('escape' => FALSE));
	} else {
		echo $sigDisplay;
	}
	?>&nbsp;</td>
		<td>
		<input class="checkbox" type="checkbox" <?php echo $attribute['Attribute']['to_ids'] == 1 ? 'checked' : '';?>
                          name='attr'
                          id="attr_<?php echo $attribute['Attribute']['id'];?>"
                          value="<?php echo $attribute['Attribute']['id'];?>">
		<label for="attr_<?php echo $attribute['Attribute']['id'];?>"></label>

		&nbsp;</td>
		<td class="actions"><?php
	if ($isAdmin || ($isAclModify && $attribute['Event']['user_id'] == $me['id']) || ($isAclModifyOrg && $attribute['Event']['org'] == $me['org'])) {
		echo $this->Html->link(__('Edit'), array('action' => 'edit', $attribute['Attribute']['id']), array('class' => 'btn'));
		echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attribute['Attribute']['id']), array('class' => 'btn'), __('Are you sure you want to delete this attribute?'));
	}
	echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $attribute['Attribute']['event_id']), array('class' => 'btn'));
	?>
		</td>
	</tr>
	<?php
endforeach;
	?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

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
		<li><?php if ($isSearch == 1) echo $this->Html->link(__('Download results as XML'), array('admin' => false, 'controller' => 'events', 'action' => 'downloadSearchResult'));?></li>
		<?php echo $this->element('actions_menu'); ?>
	</ul>
</div>