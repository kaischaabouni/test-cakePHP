<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
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
							<td><?php echo h($region['Region']['name']); ?></td>
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
							<td><?php echo $ville['name']; ?></td>
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
				<div class="col-md-3 col-sm-3 col-xs-12">
					<?php echo $this->Html->link(__('New Ville'), array('controller' => 'villes', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
				</div>
			</div>
		</div>
	</div>
</div>
