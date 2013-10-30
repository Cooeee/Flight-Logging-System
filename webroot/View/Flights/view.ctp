<div class="flights view">
<h2><?php  echo __('Flight'); ?></h2>
	<dl>
		<dt><?php echo __('Line'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['line']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pilot'); ?></dt>
		<dd>
			<?php echo $this->Html->link($flight['Pilot']['fullname'], array('controller' => 'people', 'action' => 'view', $flight['Pilot']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructor / Passenger'); ?></dt>
		<dd>
			<?php echo $this->Html->link($flight['Passenger']['fullname'], array('controller' => 'people', 'action' => 'view', $flight['Passenger']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Glider'); ?></dt>
		<dd>
			<?php echo $this->Html->link($flight['Glider']['registration'], array('controller' => 'aircrafts', 'action' => 'view', $flight['Glider']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tug'); ?></dt>
		<dd>
			<?php echo $this->Html->link($flight['Tug']['registration'], array('controller' => 'aircrafts', 'action' => 'view', $flight['Tug']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Launch Height'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['launch_height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Launch Time'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['launch_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Land Time'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['land_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flight Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($flight['FlightType']['description'], array('controller' => 'flight_types', 'action' => 'view', $flight['FlightType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Flight'), array('action' => 'edit', $flight['Flight']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Flight'), array('action' => 'delete', $flight['Flight']['id']), null, __('Are you sure you want to delete # %s?', $flight['Flight']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Flights'), array('action' => 'index')); ?> </li>
	</ul>
</div>
