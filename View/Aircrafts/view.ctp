<div class="aircrafts view">
<h2><?php  echo __('Aircraft'); ?></h2>
	<dl>
		<dt><?php echo __('Registration'); ?></dt>
		<dd>
			<?php echo h($aircraft['Aircraft']['registration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($aircraft['Aircraft']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($aircraft['Aircraft']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo h($aircraft['Aircraft']['owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aircraft Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aircraft['AircraftType']['description'], array('controller' => 'aircraft_types', 'action' => 'view', $aircraft['AircraftType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aircraft'), array('action' => 'edit', $aircraft['Aircraft']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aircraft'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aircraft'), array('action' => 'add')); ?> </li>
	</ul>
</div>
