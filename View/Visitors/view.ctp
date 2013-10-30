<div class="visitors view">
<h2><?php  echo __('Visitor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($visitor['Visitor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($visitor['Person']['fullname'], array('controller' => 'people', 'action' => 'view', $visitor['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flight Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($visitor['FlightType']['description'], array('controller' => 'flight_types', 'action' => 'view', $visitor['FlightType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($visitor['Visitor']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($visitor['Visitor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($visitor['Visitor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Visitor'), array('action' => 'edit', $visitor['Visitor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Visitor'), array('action' => 'delete', $visitor['Visitor']['id']), null, __('Are you sure you want to delete # %s?', $visitor['Visitor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Visitors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visitor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flight Types'), array('controller' => 'flight_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight Type'), array('controller' => 'flight_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
