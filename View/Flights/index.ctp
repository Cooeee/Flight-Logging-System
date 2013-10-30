<div class="flights index" style="clear:both; width:98%; border:none; ">
	<h2><?php echo __('Flights'); ?> - <?=date('l, jS F, Y',strtotime($refdate));?></h2>
	<?php echo $this->Html->link("Previous Day", array('date' => date('Y-m-d',strtotime("-1 day",strtotime($refdate)))), array('class' => 'button'));?>
	<?php echo $this->Html->link("Next Day", array('date' => date('Y-m-d',strtotime("+1 day",strtotime($refdate)))), array('class' => 'button'));?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('line','#'); ?></th>
			<th><?php echo $this->Paginator->sort('pilot_id'); ?></th>
			<th><?php echo $this->Paginator->sort('passenger_id', 'Inst / Pass'); ?></th>
			<th><?php echo $this->Paginator->sort('glider_id','Reg'); ?></th>
			<th><?php echo $this->Paginator->sort('tug_id'); ?></th>
			<th><?php echo $this->Paginator->sort('launch_height', 'Alt'); ?></th>
			<th><?php echo $this->Paginator->sort('launch_time','Lnch'); ?></th>
			<th><?php echo $this->Paginator->sort('land_time','Land'); ?></th>
			<th><?php echo $this->Paginator->sort('flight_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('complete','C'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('notes'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($flights as $flight): ?>
	<tr>
		<td><?php echo h($flight['Flight']['line']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($flight['Pilot']['fullname'], array('controller' => 'people', 'action' => 'view', $flight['Pilot']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($flight['Passenger']['fullname'], array('controller' => 'people', 'action' => 'view', $flight['Passenger']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($flight['Glider']['registration'], array('controller' => 'aircrafts', 'action' => 'view', $flight['Glider']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($flight['Tug']['registration'], array('controller' => 'aircrafts', 'action' => 'view', $flight['Tug']['id'])); ?>
		</td>
		<td><?php echo h($flight['Flight']['launch_height']); ?>&nbsp;</td>

		<td><?php 
	if (strtotime($flight['Flight']['launch_time'])) echo h(date('H:i',strtotime($flight['Flight']['launch_time'])));
	else echo $this->Html->link('Launch',array('action' => 'launch', $flight['Flight']['id']), array('class' => 'button'));
		?>&nbsp;</td>

		<td><?php 
	if (strtotime($flight['Flight']['land_time'])) echo h(date('H:i',strtotime($flight['Flight']['land_time'])));
	else echo $this->Html->link('Land',array('action' => 'land', $flight['Flight']['id']), array('class' => 'button'));
		?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($flight['FlightType']['description'], array('controller' => 'flight_types', 'action' => 'view', $flight['FlightType']['id'])); ?>
		</td>
		<td><?php echo $this->Html->image(($flight['Flight']['complete'] == 1)?"Alarm-Tick-icon.png":"Close-icon.png"); ?>&nbsp;</td>
		<!--<td><?php echo h($flight['Flight']['notes']); ?>&nbsp;</td>-->
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
		<li><?php echo $this->Html->link(__('Close Day'), array('action' => 'closeDay')); ?></li>
	</ul>
</div>
