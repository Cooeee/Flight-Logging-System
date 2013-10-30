<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Person'); ?></legend>
	<?php
		echo $this->Form->input('first');
		echo $this->Form->input('last');
		echo $this->Form->input('dob');
		echo $this->Form->input('occupation');
		echo $this->Form->input('homephone');
		echo $this->Form->input('workphone');
		echo $this->Form->input('mobilephone');
		echo $this->Form->input('homeaddress');
		echo $this->Form->input('postaladdress');
		echo $this->Form->input('email');
		echo $this->Form->input('Certificate');
		echo $this->Form->input('Group');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Certificates'), array('controller' => 'certificates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certificate'), array('controller' => 'certificates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
