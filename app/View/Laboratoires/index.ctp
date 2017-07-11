<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Laboratoires'); ?></h2>
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
								<th><?php echo $this->Paginator->sort('name'); ?></th>
								<th><?php echo $this->Paginator->sort('adresse'); ?></th>
								<th><?php echo $this->Paginator->sort('mail'); ?></th>
								<th><?php echo $this->Paginator->sort('responsable'); ?></th>
								<th class="actions"><?php echo __('Actions'); ?></th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($laboratoires as $laboratoire): ?>
							<tr>
								<td><?php echo h($laboratoire['Laboratoire']['id']); ?>&nbsp;</td>
								<td><?php echo h($laboratoire['Laboratoire']['name']); ?>&nbsp;</td>
								<td><?php echo h($laboratoire['Laboratoire']['adresse']); ?>&nbsp;</td>
								<td><?php echo h($laboratoire['Laboratoire']['mail']); ?>&nbsp;</td>
								<td><?php echo h($laboratoire['Laboratoire']['responsable']); ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $laboratoire['Laboratoire']['id']), array('class' => 'btn btn-default btn-xs')); ?>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $laboratoire['Laboratoire']['id']), array('class' => 'btn btn-default btn-xs')); ?>
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $laboratoire['Laboratoire']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $laboratoire['Laboratoire']['id'])); ?>
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



