<div class="zones form">
<?php echo $this->Form->create('Zone'); ?>
	<fieldset>
		<legend><?php echo __('Add Zone'); ?></legend>
	<?php
		echo $this->Form->input('ville_id');
		echo $this->Form->input('nom_zone');
		echo $this->Form->input('Delegue');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Zones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Villes'), array('controller' => 'villes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ville'), array('controller' => 'villes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Delegues'), array('controller' => 'delegues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delegue'), array('controller' => 'delegues', 'action' => 'add')); ?> </li>
	</ul>
</div>
