<div class="">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Actions'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">	
					<?php echo $this->Html->link(__('Edit Laboratoire'), array('action' => 'edit', $laboratoire['Laboratoire']['id']), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Form->postLink(__('Delete Laboratoire'), array('action' => 'delete', $laboratoire['Laboratoire']['id']), array('class' => 'btn btn-default btn-block'), __('Are you sure you want to delete # %s?', $laboratoire['Laboratoire']['id'])); ?>
					<?php echo $this->Html->link(__('List Laboratoires'), array('action' => 'index'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('New Laboratoire'), array('action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('List Delegues'), array('controller' => 'delegues', 'action' => 'index'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('New Delegue'), array('controller' => 'delegues', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
				</div>
			</div>
		</div>

		<div class="col-md-9 col-sm-9 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php  echo __('Laboratoire'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<table class="table table-striped">
						<tr>
							<td><strong><?php echo __('Id'); ?></strong></td>
							<td><?php echo h($laboratoire['Laboratoire']['id']); ?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Nom'); ?></strong></td>
							<td><?php echo h($laboratoire['Laboratoire']['nom']); ?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Adresse'); ?></strong></td>
							<td><?php echo h($laboratoire['Laboratoire']['adresse']); ?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Mail'); ?></strong></td>
							<td><?php echo h($laboratoire['Laboratoire']['mail']); ?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Responsable'); ?></strong></td>
							<td><?php echo h($laboratoire['Laboratoire']['responsable']); ?></td>
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
				<?php if (!empty($laboratoire['Delegue'])): ?>
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
					<?php $i = 0; foreach ($laboratoire['Delegue'] as $delegue): ?>
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



