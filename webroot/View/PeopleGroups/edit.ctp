<div class="peopleGroups form">
<?php echo $this->Form->create('PeopleGroup'); ?>
	<fieldset>
		<legend><?php echo __('Edit People Group'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('person_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PeopleGroup.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PeopleGroup.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List People Groups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
