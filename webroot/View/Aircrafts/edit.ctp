<div class="aircrafts form">
<?php echo $this->Form->create('Aircraft'); ?>
	<fieldset>
		<legend><?php echo __('Edit Aircraft'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('registration');
		echo $this->Form->input('type');
		echo $this->Form->input('model');
		echo $this->Form->input('owner');
		echo $this->Form->input('aircraft_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Aircrafts'), array('action' => 'index')); ?></li>
	</ul>
</div>
