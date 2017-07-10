<div class="">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Actions'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">	
					<?php echo $this->Html->link(__('Edit Delegue'), array('action' => 'edit', $delegue['Delegue']['id']), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Form->postLink(__('Delete Delegue'), array('action' => 'delete', $delegue['Delegue']['id']), array('class' => 'btn btn-default btn-block'), __('Are you sure you want to delete # %s?', $delegue['Delegue']['id'])); ?> 
					<?php echo $this->Html->link(__('List Delegues'), array('action' => 'index'), array('class' => 'btn btn-default btn-block')); ?> 
					<?php echo $this->Html->link(__('New Delegue'), array('action' => 'add'), array('class' => 'btn btn-default btn-block')); ?> 
					<?php echo $this->Html->link(__('List Villes'), array('controller' => 'villes', 'action' => 'index'), array('class' => 'btn btn-default btn-block')); ?> 
					<?php echo $this->Html->link(__('New Ville'), array('controller' => 'villes', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?> 
					<?php echo $this->Html->link(__('List Laboratoires'), array('controller' => 'laboratoires', 'action' => 'index'), array('class' => 'btn btn-default btn-block')); ?> 
					<?php echo $this->Html->link(__('New Laboratoire'), array('controller' => 'laboratoires', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
				</div>
			</div>
		</div>

		<div class="col-md-9 col-sm-9 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Delegue'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<table class="table table-striped">
						<tr>
							<td><strong><?php echo __('Id'); ?></strong></td>
							<td><?php echo h($delegue['Delegue']['id']); ?> </td>
						</tr>
						<tr>
							<td><strong><?php echo __('Nom'); ?></strong></td>
							<td><?php echo h($delegue['Delegue']['nom']); ?> </td>
						</tr>
						<tr>
							<td><strong><?php echo __('Prenom'); ?></strong></td>
							<td><?php echo h($delegue['Delegue']['prenom']); ?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Ville'); ?></strong></td>
							<td><?php echo $this->Html->link($delegue['Ville']['id'], array('controller' => 'villes', 'action' => 'view', $delegue['Ville']['id'])); ?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Type Voiture'); ?></strong></td>
							<td><?php echo h($delegue['Delegue']['type_voiture']); ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>




		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Related Laboratoires'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<?php if (!empty($delegue['Laboratoire'])): ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th><?php echo __('Id'); ?></th>
							<th><?php echo __('Nom'); ?></th>
							<th><?php echo __('Adresse'); ?></th>
							<th><?php echo __('Mail'); ?></th>
							<th><?php echo __('Responsable'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php $i = 0; foreach ($delegue['Laboratoire'] as $laboratoire): ?>
						<tr>
							<td><?php echo $laboratoire['id']; ?></td>
							<td><?php echo $laboratoire['nom']; ?></td>
							<td><?php echo $laboratoire['adresse']; ?></td>
							<td><?php echo $laboratoire['mail']; ?></td>
							<td><?php echo $laboratoire['responsable']; ?></td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('controller' => 'laboratoires', 'action' => 'view', $laboratoire['id']), array('class' => 'btn btn-default btn-xs')); ?>
								<?php echo $this->Html->link(__('Edit'), array('controller' => 'laboratoires', 'action' => 'edit', $laboratoire['id']), array('class' => 'btn btn-default btn-xs')); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'laboratoires', 'action' => 'delete', $laboratoire['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $laboratoire['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				<?php endif; ?>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<?php echo $this->Html->link(__('New Laboratoire'), array('controller' => 'laboratoires', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
				</div>
			</div>
		</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Related Zones'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<?php if (!empty($delegue['Zone'])): ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th><?php echo __('Id'); ?></th>
							<th><?php echo __('Ville Id'); ?></th>
							<th><?php echo __('Nom Zone'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 0; foreach ($delegue['Zone'] as $zone): ?>
						<tr>
							<td><?php echo $zone['id']; ?></td>
							<td><?php echo $zone['ville_id']; ?></td>
							<td><?php echo $zone['nom_zone']; ?></td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('controller' => 'zones', 'action' => 'view', $zone['id']), array('class' => 'btn btn-default btn-xs')); ?>
								<?php echo $this->Html->link(__('Edit'), array('controller' => 'zones', 'action' => 'edit', $zone['id']), array('class' => 'btn btn-default btn-xs')); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'zones', 'action' => 'delete', $zone['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $zone['id'])); ?>
							</td>
						</tr>
						<?php endforeach; ?>

					</tbody>
				</table>
				<?php endif; ?>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
				</div>
			</div>
		</div>


	</div>
</div>



