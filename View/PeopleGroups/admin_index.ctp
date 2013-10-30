<div class="peopleGroups index">
	<h2><?php echo __('People Groups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('joined'); ?></th>
			<th><?php echo $this->Paginator->sort('expires'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($peopleGroups as $peopleGroup): ?>
	<tr>
		<td><?php echo h($peopleGroup['PeopleGroup']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($peopleGroup['Person']['fullname'], array('controller' => 'people', 'action' => 'view', $peopleGroup['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($peopleGroup['Group']['description'], array('controller' => 'groups', 'action' => 'view', $peopleGroup['Group']['id'])); ?>
		</td>
		<td><?php echo h($peopleGroup['PeopleGroup']['joined']); ?>&nbsp;</td>
		<td><?php echo h($peopleGroup['PeopleGroup']['expires']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $peopleGroup['PeopleGroup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $peopleGroup['PeopleGroup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $peopleGroup['PeopleGroup']['id']), null, __('Are you sure you want to delete # %s?', $peopleGroup['PeopleGroup']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New People Group'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
