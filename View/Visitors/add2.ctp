<div class="visitors form">
<?php echo $this->Form->create('Visitor'); ?>
	<fieldset>
		<legend><?php echo __('Add Visitor'); ?></legend>
	<?php
		echo $this->Form->input('person_id');
		echo $this->Form->input('flight_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Visitors'), array('action' => 'index')); ?></li>
	</ul>
</div>
