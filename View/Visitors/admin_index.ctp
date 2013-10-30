<div class="visitors index">
	<h2><?php echo __('Visitors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('flight_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($visitors as $visitor): ?>
	<tr>
		<td><?php echo h($visitor['Visitor']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($visitor['Person']['fullname'], array('controller' => 'people', 'action' => 'view', $visitor['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($visitor['FlightType']['description'], array('controller' => 'flight_types', 'action' => 'view', $visitor['FlightType']['id'])); ?>
		</td>
		<td><?php echo h($visitor['Visitor']['date']); ?>&nbsp;</td>
		<td><?php echo h($visitor['Visitor']['created']); ?>&nbsp;</td>
		<td><?php echo h($visitor['Visitor']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $visitor['Visitor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $visitor['Visitor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $visitor['Visitor']['id']), null, __('Are you sure you want to delete # %s?', $visitor['Visitor']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Visitor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flight Types'), array('controller' => 'flight_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight Type'), array('controller' => 'flight_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
