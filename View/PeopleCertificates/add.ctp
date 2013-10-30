<div class="peopleCertificates form">
<?php echo $this->Form->create('PeopleCertificate'); ?>
	<fieldset>
		<legend><?php echo __('Add People Certificate'); ?></legend>
	<?php
		echo $this->Form->input('person_id', array('selected' => $this->params->named['user']));
		echo $this->Form->input('certificate_id');
		echo $this->Form->input('dateCertified');
		echo $this->Form->input('certifiedBy');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People Certificates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certificates'), array('controller' => 'certificates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certificate'), array('controller' => 'certificates', 'action' => 'add')); ?> </li>
	</ul>
</div>
