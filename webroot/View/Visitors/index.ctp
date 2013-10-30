<div class="visitors index">
	<h2><?php echo __('Visitors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('flight_type_id'); ?></th>
			<th>Club Member</th>
			<th>GFA Member</th>
	</tr>
	<?php foreach ($visitors as $visitor): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($visitor['Person']['fullname'], array('controller' => 'people', 'action' => 'view', $visitor['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($visitor['FlightType']['description'], array('controller' => 'flight_types', 'action' => 'view', $visitor['FlightType']['id'])); ?>
		</td>
		<td><?php echo (in_array(1,Hash::extract($visitor['Person']['Group'], '{n}.id'))?'Yes':'<font color="red"><strong>Check</strong></font>')?></td>
		<td><?php echo (in_array(10,Hash::extract($visitor['Person']['Group'], '{n}.id'))?'Yes':'<font color="red"><strong>Check</strong></font>')?></td>
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
	</ul>
</div>
<?php print $this->Session->flash('membership', array('element' => 'alert')); ?>
