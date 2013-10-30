<div class="flights form">
<?php echo $this->Form->create('Flight'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Flight'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('airfield_id');
		echo $this->Form->input('line');
		echo $this->Form->input('tuggie_id');
		echo $this->Form->input('pilot_id');
		echo $this->Form->input('passenger_id');
		echo $this->Form->input('tug_id');
		echo $this->Form->input('glider_id');
		echo $this->Form->input('launch_height');
		echo $this->Form->input('launch_time');
		echo $this->Form->input('land_time');
		echo $this->Form->input('flight_type_id');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Flight.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Flight.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Flights'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Airfields'), array('controller' => 'airfields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Airfield'), array('controller' => 'airfields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tuggie'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aircrafts'), array('controller' => 'aircrafts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tug'), array('controller' => 'aircrafts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flight Types'), array('controller' => 'flight_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight Type'), array('controller' => 'flight_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
