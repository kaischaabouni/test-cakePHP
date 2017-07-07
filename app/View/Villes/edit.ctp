<div class="villes form">
<?php echo $this->Form->create('Ville'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ville'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('region_id');
		echo $this->Form->input('nom_ville');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ville.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Ville.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Villes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Delegues'), array('controller' => 'delegues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delegue'), array('controller' => 'delegues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
	</ul>
</div>
