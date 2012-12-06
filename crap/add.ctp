<div class="recipients form">
<?php echo $this->Form->create('Recipient');?>
	<fieldset>
 		<legend><?php __('Add Recipient'); ?></legend>
	<?php
		//echo $this->Form->input('user_id');
		echo $this->Form->input('email');
		//echo $this->Form->input('type');

echo $this->Form->input('type', array(
    'type'    => 'select',
    'options' => $settings,
    'empty'   => false
));



	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Recipients', true), array('action' => 'index'));?></li>
	</ul>
</div>
