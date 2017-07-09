<div class="">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Actions'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Region.id')), array('class' => 'btn btn-default btn-block'), __('Are you sure you want to delete # %s?', $this->Form->value('Region.id'))); ?>
					<?php echo $this->Html->link(__('List Regions'), array('action' => 'index'), array('class' => 'btn btn-default btn-block')); ?>
					<?php echo $this->Html->link(__('List Villes'), array('controller' => 'villes', 'action' => 'index'), array('class' => 'btn btn-default btn-block')); ?> 
					<?php echo $this->Html->link(__('New Ville'), array('controller' => 'villes', 'action' => 'add'), array('class' => 'btn btn-default btn-block')); ?> 
				</div>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Edit Region'); ?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<?php echo $this->Form->create('Region', array('class' => 'form-horizontal form-label-left')); ?>
						<?php echo $this->Form->input('id'); ?>
						<div class="form-group">
							<?php echo $this->Form->label('nom_region', 'Nom Région <span class="required">*</span>', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('nom_region', array('label' => false, 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12', 
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