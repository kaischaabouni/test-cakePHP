<div class="">

	<div class="row">
	
	
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Actions'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">	
					<?php echo $this->Html->link(__('New Zone'), array('action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>>
					<?php echo $this->Html->link(__('List Villes'), array('controller' => 'villes', 'action' => 'index'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('New Ville'), array('controller' => 'villes', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('List Delegues'), array('controller' => 'delegues', 'action' => 'index'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('New Delegue'), array('controller' => 'delegues', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?>
				</div>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Zones'); ?></h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Settings 1</a>
								</li>
								<li><a href="#">Settings 2</a>
								</li>
							</ul>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th><?php echo $this->Paginator->sort('id'); ?></th>
								<th><?php echo $this->Paginator->sort('ville_id'); ?></th>
								<th><?php echo $this->Paginator->sort('nom_zone'); ?></th>
								<th class="actions"><?php echo __('Actions'); ?></th>
							</tr>
						</thead>
						<tbody>

							<?php foreach ($zones as $zone): ?>
							<tr>
								<td><?php echo h($zone['Zone']['id']); ?>&nbsp;</td>
								<td>
									<?php echo $this->Html->link($zone['Ville']['id'], array('controller' => 'villes', 'action' => 'view', $zone['Ville']['id'])); ?>
								</td>
								<td><?php echo h($zone['Zone']['nom_zone']); ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $zone['Zone']['id']), array('class' => 'btn btn-default btn-xs')); ?>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $zone['Zone']['id']), array('class' => 'btn btn-default btn-xs')); ?>
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $zone['Zone']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $zone['Zone']['id'])); ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



