<div class="aircrafts index">
	<h2><?php echo __('Aircrafts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('registration'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('owner'); ?></th>
			<th><?php echo $this->Paginator->sort('aircraft_type_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
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
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aircraft['Aircraft']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aircraft['Aircraft']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aircraft['Aircraft']['id']), null, __('Are you sure you want to delete # %s?', $aircraft['Aircraft']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Aircraft Types'), array('controller' => 'aircraft_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aircraft Type'), array('controller' => 'aircraft_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
