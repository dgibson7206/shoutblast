<?php
?>

<div class="recipients index">
	<h2><?php __('Recipients');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;

//echo '<pre>'; print_r($recipients); echo '</pre>';


	foreach ($recipients as $recipient):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $recipient['Recipient']['email']; ?>&nbsp;</td>
		<td>


	<?php //echo $recipient['Recipient']['type']; ?>&nbsp;


	<?php echo $recipient['ListType']['name']; ?>


</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $recipient['Recipient']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $recipient['Recipient']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recipient['Recipient']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Recipient', true), array('action' => 'add')); ?></li>
	</ul>
</div>
