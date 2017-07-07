<div class="laboratoires form">
<?php echo $this->Form->create('Laboratoire'); ?>
	<fieldset>
		<legend><?php echo __('Edit Laboratoire'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nom');
		echo $this->Form->input('adresse');
		echo $this->Form->input('mail');
		echo $this->Form->input('responsable');
		echo $this->Form->input('Delegue');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Laboratoire.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Laboratoire.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Laboratoires'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Delegues'), array('controller' => 'delegues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delegue'), array('controller' => 'delegues', 'action' => 'add')); ?> </li>
	</ul>
</div>
