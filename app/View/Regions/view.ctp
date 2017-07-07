<div class="">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Actions'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">	
					<?php echo $this->Html->link(__('Edit Region'), array('action' => 'edit', $region['Region']['id']), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Form->postLink(__('Delete Region'), array('action' => 'delete', $region['Region']['id']), array('class' => 'btn btn-default btn-block'), __('Are you sure you want to delete # %s?', $region['Region']['id'])); ?>
					<?php echo $this->Html->link(__('List Regions'), array('action' => 'index'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('New Region'), array('action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('List Villes'), array('controller' => 'villes', 'action' => 'index'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('New Ville'), array('controller' => 'villes', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
				</div>
			</div>
		</div>

		<div class="col-md-9 col-sm-9 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php  echo __('Region'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<table class="table table-striped">
						<tr>
							<td><strong><?php echo __('Id'); ?></strong></td>
							<td><?php echo h($region['Region']['id']); ?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Nom Region'); ?></strong></td>
							<td><?php echo h($region['Region']['nom_region']); ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Related Villes'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<?php if (!empty($region['Ville'])): ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th><?php echo __('Id'); ?></th>
							<th><?php echo __('Region Id'); ?></th>
							<th><?php echo __('Nom Ville'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php $i = 0; foreach ($region['Ville'] as $ville): ?>
						<tr>
							<td><?php echo $ville['id']; ?></td>
							<td><?php echo $ville['region_id']; ?></td>
							<td><?php echo $ville['nom_ville']; ?></td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('controller' => 'villes', 'action' => 'view', $ville['id']), array('class' => 'btn btn-default btn-xs')); ?>
								<?php echo $this->Html->link(__('Edit'), array('controller' => 'villes', 'action' => 'edit', $ville['id']), array('class' => 'btn btn-default btn-xs')); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'villes', 'action' => 'delete', $ville['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $ville['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				<?php endif; ?>
				<?php echo $this->Html->link(__('New Ville'), array('controller' => 'villes', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
			</div>
		</div>
	</div>
</div>
