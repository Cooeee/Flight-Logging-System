<div class="aircrafts form">
<?php echo $this->Form->create('Aircraft'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Aircraft'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aircraft.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aircraft.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aircrafts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Aircraft Types'), array('controller' => 'aircraft_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aircraft Type'), array('controller' => 'aircraft_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
