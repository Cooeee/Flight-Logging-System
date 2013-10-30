<div class="people view">
<h2><?php  echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First'); ?></dt>
		<dd>
			<?php echo h($person['Person']['first']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last'); ?></dt>
		<dd>
			<?php echo h($person['Person']['last']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob'); ?></dt>
		<dd>
			<?php echo h($person['Person']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Occupation'); ?></dt>
		<dd>
			<?php echo h($person['Person']['occupation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Homephone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['homephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Workphone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['workphone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobilephone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['mobilephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Homeaddress'); ?></dt>
		<dd>
			<?php echo h($person['Person']['homeaddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postaladdress'); ?></dt>
		<dd>
			<?php echo h($person['Person']['postaladdress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($person['Person']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certificates'), array('controller' => 'certificates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certificate'), array('controller' => 'certificates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Certificates'); ?></h3>
	<?php if (!empty($person['Certificate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Checkrequired'); ?></th>
		<th><?php echo __('Checkfrequency'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Certificate'] as $certificate): ?>
		<tr>
			<td><?php echo $certificate['id']; ?></td>
			<td><?php echo $certificate['name']; ?></td>
			<td><?php echo $certificate['checkrequired']; ?></td>
			<td><?php echo $certificate['checkfrequency']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'certificates', 'action' => 'view', $certificate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'certificates', 'action' => 'edit', $certificate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'certificates', 'action' => 'delete', $certificate['id']), null, __('Are you sure you want to delete # %s?', $certificate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Certificate'), array('controller' => 'certificates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Groups'); ?></h3>
	<?php if (!empty($person['Group'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Group'] as $group): ?>
		<tr>
			<td><?php echo $group['id']; ?></td>
			<td><?php echo $group['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'groups', 'action' => 'view', $group['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'groups', 'action' => 'edit', $group['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'groups', 'action' => 'delete', $group['id']), null, __('Are you sure you want to delete # %s?', $group['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
