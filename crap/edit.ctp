<div class="recipients form">
<?php echo $this->Form->create('Recipient');?>
	<fieldset>
 		<legend><?php __('Edit Recipient'); ?></legend>
	<?php
	//	echo $this->Form->input('id');
	//	echo $this->Form->input('user_id');
		echo $this->Form->input('email');


		// The 'type' dropdown
		// echo $this->Form->input('type');


echo $this->Form->input('type', array(
    'type'    => 'select',
    'options' => $settings,
    'empty'   => false
));

//echo '<pre>'; print_r($this->data); echo '</pre>';

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Recipient.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Recipient.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recipients', true), array('action' => 'index'));?></li>
	</ul>
</div>
