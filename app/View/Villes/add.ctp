<div class="">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Actions'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<?php echo $this->Html->link(__('List Villes'), array('action' => 'index'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index'), array('class' => 'btn btn-default btn-block')); ?> 
					<?php echo $this->Html->link(__('New Region'), array('controller' => 'regions', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?> 
					<?php echo $this->Html->link(__('List Delegues'), array('controller' => 'delegues', 'action' => 'index'), array('class' => 'btn btn-default btn-block')); ?> 
					<?php echo $this->Html->link(__('New Delegue'), array('controller' => 'delegues', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?> 
					<?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index'), array('class' => 'btn btn-default btn-block')); ?> 
					<?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?> 
				</div>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Add Ville'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<?php echo $this->Form->create('Ville', array('class' => 'form-horizontal form-label-left')); ?>
						<div class="form-group">
							<?php echo $this->Form->label('region_id', 'Région <span class="required">*</span>', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('region_id', array('label' => false, 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12', 
								'div' => array('class' => 'col-md-6 col-sm-6 col-xs-12'))); ?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->label('nom_ville', 'Nom ville <span class="required">*</span>', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('nom_ville', array('label' => false, 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12', 
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
