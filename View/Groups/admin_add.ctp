<div class="groups form">
<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Group'); ?></legend>
	<?php
		echo $this->Form->input('description');
		echo $this->Form->input('expires');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?></li>
	</ul>
</div>
