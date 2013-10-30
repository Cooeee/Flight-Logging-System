<div class="people view">
<h2><?php  echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['first']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['last']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Phone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['homephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Phone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['workphone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Phone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['mobilephone']); ?>
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
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Add Certification'), array('controller' => 'PeopleCertificates', 'action' => 'add', 'user' => $person['Person']['id'])); ?></li>
		<li><?php echo $this->Html->link(__('Add Membership'), array('controller' => 'PeopleGroups', 'action' => 'add', 'user' => $person['Person']['id'])); ?></li>
		
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Certificates'); ?></h3>
	<?php if (!empty($person['Certificate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Date Certified'); ?></th>
		<th><?php echo __('Certified By'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Certificate'] as $certificate): ?>
		<tr>
			<td><?php echo $certificate['name']; ?></td>
			<td><?php echo $certificate['PeopleCertificate']['dateCertified']; ?></td>
			<td><?php echo $certificate['PeopleCertificate']['certifiedBy']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Groups'); ?></h3>
	<?php if (!empty($person['Group'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Joined'); ?></th>
		<th><?php echo __('Membership Expires'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Group'] as $group): ?>
		<tr>
			<td><?php echo $group['description']; ?></td>
			<td><?php echo $group['PeopleGroup']['joined']; ?></td>
			<td><?php echo $group['PeopleGroup']['expires']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
