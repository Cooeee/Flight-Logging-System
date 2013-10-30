<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Add Person'); ?></legend>
	<?php
		echo $this->Form->input('first');
		echo $this->Form->input('last');
		echo $this->Form->input('dob', array('empty' => true, 'minYear' => date('Y') - 100, 'maxYear' => date('Y')));
		echo $this->Form->input('occupation');
		echo $this->Form->input('homephone');
		echo $this->Form->input('workphone');
		echo $this->Form->input('mobilephone');
		echo $this->Form->input('homeaddress');
		echo $this->Form->input('postaladdress');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
	</ul>
</div>
