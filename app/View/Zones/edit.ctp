<div class="">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Edit Zone'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">	
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Zone.id')), array('class' => 'btn btn-default btn-block'), __('Are you sure you want to delete # %s?', $this->Form->value('Zone.id'))); ?>
					<?php echo $this->Html->link(__('List Zones'), array('action' => 'index'), array('class' => 'btn btn-default btn-block')); ?>
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
					<h2><?php echo __('Add Zone'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<?php echo $this->Form->create('Zone', array('class' => 'form-horizontal form-label-left')); ?>
						<?php echo $this->Form->input('id'); ?>
						<div class="form-group">
							<?php echo $this->Form->label('ville_id', 'Ville <span class="required">*</span>', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('ville_id', array('label' => false, 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12', 
								'div' => array('class' => 'col-md-6 col-sm-6 col-xs-12'))); ?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->label('nom_zone', 'Nom Zone <span class="required">*</span>', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('nom_zone', array('label' => false, 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12', 
								'div' => array('class' => 'col-md-6 col-sm-6 col-xs-12'))); ?>
						</div>
						<div class="form-group">	
							<?php echo $this->Form->label('Delegue', 'Délégué', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('Delegue', array('label' => false, 'class' => 'form-control col-md-7 col-xs-12', 
								'div' => array('class' => 'col-md-6 col-sm-6 col-xs-12'))); ?>	
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<?php echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-success')); ?>
							</div>
						</div>
					<?php echo $this->Form->end(); ?> 
				</div>
			</div>
		</div>
	</div>
</div>