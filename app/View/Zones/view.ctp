<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php  echo __('Zone'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table class="table table-striped">
						<tr>
							<td><strong><?php echo __('Id'); ?></strong></td>
							<td><?php echo h($zone['Zone']['id']); ?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Ville'); ?></strong></td>
							<td><?php echo $this->Html->link($zone['Ville']['id'], array('controller' => 'villes', 'action' => 'view', $zone['Ville']['id'])); ?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Nom Zone'); ?></strong></td>
							<td><?php echo h($zone['Zone']['nom_zone']); ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Related Delegues'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<?php if (!empty($zone['Delegue'])): ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th><?php echo __('Id'); ?></th>
							<th><?php echo __('Nom'); ?></th>
							<th><?php echo __('Prenom'); ?></th>
							<th><?php echo __('Ville Id'); ?></th>
							<th><?php echo __('Type Voiture'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php $i = 0; foreach ($zone['Delegue'] as $delegue): ?>
						<tr>
							<td><?php echo $delegue['id']; ?></td>
							<td><?php echo $delegue['nom']; ?></td>
							<td><?php echo $delegue['prenom']; ?></td>
							<td><?php echo $delegue['ville_id']; ?></td>
							<td><?php echo $delegue['type_voiture']; ?></td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('controller' => 'delegues', 'action' => 'view', $delegue['id']), array('class' => 'btn btn-default btn-xs')); ?>
								<?php echo $this->Html->link(__('Edit'), array('controller' => 'delegues', 'action' => 'edit', $delegue['id']), array('class' => 'btn btn-default btn-xs')); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'delegues', 'action' => 'delete', $delegue['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $delegue['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				<?php endif; ?>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<?php echo $this->Html->link(__('New Delegue'), array('controller' => 'delegues', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
				</div>
			</div>
		</div>
	</div>
</div>
