<div class="bills view">
<h2><?php  echo __('Bill'); ?></h2>
	<dl>
		<dt><?php echo __('Rego'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['rego']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Make'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['make']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['model']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bill'), array('action' => 'edit', $bill['Bill']['rego'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bill'), array('action' => 'delete', $bill['Bill']['rego']), null, __('Are you sure you want to delete # %s?', $bill['Bill']['rego'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bill'), array('action' => 'add')); ?> </li>
	</ul>
</div>
