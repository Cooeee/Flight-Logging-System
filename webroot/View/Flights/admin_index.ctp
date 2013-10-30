<div class="flights index">
	<h2><?php echo __('Flights'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('airfield_id'); ?></th>
			<th><?php echo $this->Paginator->sort('line'); ?></th>
			<th><?php echo $this->Paginator->sort('tuggie_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pilot_id'); ?></th>
			<th><?php echo $this->Paginator->sort('passenger_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tug_id'); ?></th>
			<th><?php echo $this->Paginator->sort('glider_id'); ?></th>
			<th><?php echo $this->Paginator->sort('launch_height'); ?></th>
			<th><?php echo $this->Paginator->sort('launch_time'); ?></th>
			<th><?php echo $this->Paginator->sort('land_time'); ?></th>
			<th><?php echo $this->Paginator->sort('flight_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($flights as $flight): ?>
	<tr>
		<td><?php echo h($flight['Flight']['id']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($flight['Airfield']['name'], array('controller' => 'airfields', 'action' => 'view', $flight['Airfield']['id'])); ?>
		</td>
		<td><?php echo h($flight['Flight']['line']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($flight['Tuggie']['fullname'], array('controller' => 'people', 'action' => 'view', $flight['Tuggie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($flight['Pilot']['fullname'], array('controller' => 'people', 'action' => 'view', $flight['Pilot']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($flight['Passenger']['fullname'], array('controller' => 'people', 'action' => 'view', $flight['Passenger']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($flight['Tug']['registration'], array('controller' => 'aircrafts', 'action' => 'view', $flight['Tug']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($flight['Glider']['registration'], array('controller' => 'aircrafts', 'action' => 'view', $flight['Glider']['id'])); ?>
		</td>
		<td><?php echo h($flight['Flight']['launch_height']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['launch_time']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['land_time']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($flight['FlightType']['description'], array('controller' => 'flight_types', 'action' => 'view', $flight['FlightType']['id'])); ?>
		</td>
		<td><?php echo h($flight['Flight']['notes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $flight['Flight']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $flight['Flight']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $flight['Flight']['id']), null, __('Are you sure you want to delete # %s?', $flight['Flight']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Flight'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Airfields'), array('controller' => 'airfields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Airfield'), array('controller' => 'airfields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tuggie'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aircrafts'), array('controller' => 'aircrafts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tug'), array('controller' => 'aircrafts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flight Types'), array('controller' => 'flight_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight Type'), array('controller' => 'flight_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
