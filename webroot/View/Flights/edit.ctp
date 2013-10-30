<div class="flights form">
<?php echo $this->Form->create('Flight'); ?>
	<fieldset>
		<legend><?php echo __('Edit Flight'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('line', array('empty' => true));
		echo $this->Form->input('pilot_id', array('empty' => ''));
		echo $this->Form->input('passenger_id', array('empty' => '', 'label' => 'Instructor / Passenger'));
		echo $this->Form->input('glider_id');
		echo $this->Form->input('tug_id', array('empty' => true));
		echo $this->Form->input('launch_height');
		echo $this->Form->input('launch_time', array('timeFormat' => 24, 'empty' => true));
		echo $this->Form->input('land_time', array('timeFormat' => 24, 'empty' => true));
		echo $this->Form->input('flight_type_id', array('empty' => true));
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
	</ul>
</div>
