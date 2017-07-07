<div class="delegues form">
<?php echo $this->Form->create('Delegue'); ?>
	<fieldset>
		<legend><?php echo __('Add Delegue'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('ville_id');
		echo $this->Form->input('type_voiture');
		echo $this->Form->input('Laboratoire');
		echo $this->Form->input('Zone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?> 
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Delegues'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Villes'), array('controller' => 'villes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ville'), array('controller' => 'villes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratoires'), array('controller' => 'laboratoires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratoire'), array('controller' => 'laboratoires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
	</ul>
</div>
