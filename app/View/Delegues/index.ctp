<div class="">

	<div class="row">
	
	
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Actions'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">	
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
					<h2><?php echo __('Delegues'); ?></h2>
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
								<th><?php echo $this->Paginator->sort('nom'); ?></th>
								<th><?php echo $this->Paginator->sort('prenom'); ?></th>
								<th><?php echo $this->Paginator->sort('ville_id'); ?></th>
								<th><?php echo $this->Paginator->sort('type_voiture'); ?></th>
								<th class="actions"><?php echo __('Actions'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($delegues as $delegue): ?>
							<tr>
								<td><?php echo h($delegue['Delegue']['id']); ?>&nbsp;</td>
								<td><?php echo h($delegue['Delegue']['nom']); ?>&nbsp;</td>
								<td><?php echo h($delegue['Delegue']['prenom']); ?>&nbsp;</td>
								<td>
									<?php echo $this->Html->link($delegue['Ville']['id'], array('controller' => 'villes', 'action' => 'view', $delegue['Ville']['id'])); ?>
								</td>
								<td><?php echo h($delegue['Delegue']['type_voiture']); ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $delegue['Delegue']['id']), array('class' => 'btn btn-default btn-xs')); ?>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $delegue['Delegue']['id']), array('class' => 'btn btn-default btn-xs')); ?>
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $delegue['Delegue']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $delegue['Delegue']['id'])); ?>
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



