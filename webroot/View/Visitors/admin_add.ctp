<div class="visitors form">
<?php echo $this->Form->create('Visitor'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Visitor'); ?></legend>
	<?php
		echo $this->Form->input('person_id');
		echo $this->Form->input('flight_type_id');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Visitors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flight Types'), array('controller' => 'flight_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight Type'), array('controller' => 'flight_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
