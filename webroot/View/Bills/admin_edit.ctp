<div class="bills form">
<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Bill'); ?></legend>
	<?php
		echo $this->Form->input('rego');
		echo $this->Form->input('make');
		echo $this->Form->input('model');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bill.rego')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Bill.rego'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bills'), array('action' => 'index')); ?></li>
	</ul>
</div>
