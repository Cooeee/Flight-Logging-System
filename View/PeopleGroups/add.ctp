<div class="peopleGroups form">
<?php echo $this->Form->create('PeopleGroup'); ?>
	<fieldset>
		<legend><?php echo __('Add People Group'); ?></legend>
	<?php
		echo $this->Form->input('person_id', array('selected' => $this->request->named['user']));
		echo $this->Form->input('group_id');
		echo $this->Form->input('joined', array('empty' => true));
		echo $this->Form->input('expires', array('empty' => true));
		echo $this->Form->input('membership_id', array('type' => 'text', 'label' => 'Membership Number (if applicable). Example: G0205983 for GFA'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
	</ul>
</div>
