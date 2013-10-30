<div class="peopleGroups view">
<h2><?php  echo __('People Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($peopleGroup['PeopleGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($peopleGroup['Person']['fullname'], array('controller' => 'people', 'action' => 'view', $peopleGroup['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($peopleGroup['Group']['description'], array('controller' => 'groups', 'action' => 'view', $peopleGroup['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Joined'); ?></dt>
		<dd>
			<?php echo h($peopleGroup['PeopleGroup']['joined']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expires'); ?></dt>
		<dd>
			<?php echo h($peopleGroup['PeopleGroup']['expires']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit People Group'), array('action' => 'edit', $peopleGroup['PeopleGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete People Group'), array('action' => 'delete', $peopleGroup['PeopleGroup']['id']), null, __('Are you sure you want to delete # %s?', $peopleGroup['PeopleGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
