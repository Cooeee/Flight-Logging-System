<div class="peopleCertificates view">
<h2><?php  echo __('People Certificate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($peopleCertificate['PeopleCertificate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($peopleCertificate['Person']['fullname'], array('controller' => 'people', 'action' => 'view', $peopleCertificate['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Certificate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($peopleCertificate['Certificate']['name'], array('controller' => 'certificates', 'action' => 'view', $peopleCertificate['Certificate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DateCertified'); ?></dt>
		<dd>
			<?php echo h($peopleCertificate['PeopleCertificate']['dateCertified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Certified By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($peopleCertificate['CertifiedBy']['fullname'], array('controller' => 'people', 'action' => 'view', $peopleCertificate['CertifiedBy']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit People Certificate'), array('action' => 'edit', $peopleCertificate['PeopleCertificate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete People Certificate'), array('action' => 'delete', $peopleCertificate['PeopleCertificate']['id']), null, __('Are you sure you want to delete # %s?', $peopleCertificate['PeopleCertificate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People Certificates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People Certificate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certificates'), array('controller' => 'certificates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certificate'), array('controller' => 'certificates', 'action' => 'add')); ?> </li>
	</ul>
</div>
