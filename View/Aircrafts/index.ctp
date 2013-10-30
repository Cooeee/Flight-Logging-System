<div class="aircrafts index">
	<h2><?php echo __('Aircraft'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('registration'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('owner'); ?></th>
			<th><?php echo $this->Paginator->sort('aircraft_type_id'); ?></th>
	</tr>
	<?php foreach ($aircrafts as $aircraft): ?>
	<tr>
		<td><?php echo h($aircraft['Aircraft']['id']); ?>&nbsp;</td>
		<td><?php echo h($aircraft['Aircraft']['registration']); ?>&nbsp;</td>
		<td><?php echo h($aircraft['Aircraft']['type']); ?>&nbsp;</td>
		<td><?php echo h($aircraft['Aircraft']['model']); ?>&nbsp;</td>
		<td><?php echo h($aircraft['Aircraft']['owner']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aircraft['AircraftType']['description'], array('controller' => 'aircraft_types', 'action' => 'view', $aircraft['AircraftType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Aircraft'), array('action' => 'add')); ?></li>
	</ul>
</div>
