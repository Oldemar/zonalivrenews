<?php
	$this->Paginator->options(array(
		'update' => '#content',
		'evalScripts' => true,
		'before' => $this->Js->get('#busy-indicator')->effect('fadeIn', array('buffer' => false)),
		'complete' => $this->Js->get('#busy-indicator')->effect('fadeOut', array('buffer' => false)),
	));
?>
<div class="container">
	<div class="categories index">
		<div class="row">
			<div class="col-xs-4 col-sm-3 col-md-2">
				<h2><?php echo __('Seções'); ?></h2>
			</div>
			<div class="col-xs-4 col-sm-6 col-md-8 text-center">
				<p>
				<?php
					echo $this->Paginator->prev('<span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>', array('escape'=>false), null, array('class' => 'prev disabled','escape'=>false));
					echo $this->Paginator->numbers(array('separator' => ' '));
					echo $this->Paginator->next(' <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>', array('escape'=>false), null, array('class' => 'next disabled','escape'=>false));
					echo '</p><p>';
					echo $this->Paginator->counter(array(
						'format' => __('Page {:page}/{:pages}'
						)));
				?>
				</p>
			</div>			
			<div class="col-xs-4 col-sm-3 col-md-2 right-block">
				<h2><?php
					echo $this->Html->link('Adicionar',array('action'=>'add'),array('class'=>'btn btn-md btn-info pull-right','style'=>'color: black; font-weight: bold'));
				?></h2>
			</div>
		</div>
		<div class="row">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('description'); ?></th>
						<th><?php echo $this->Paginator->sort('active'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($categories as $category): ?>
					<tr>
						<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
						<td>
						<?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
						</td>
						<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
						<td><?php echo h($category['Category']['description']); ?>&nbsp;</td>
						<td><?php echo h($category['Category']['active']); ?>&nbsp;</td>
						<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $category['Category']['id']),array('class'=>'btn btn-xs btn-info')); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id']),array('class'=>'btn btn-xs btn-success')); ?>
						<?php 
							echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), array('class'=>'btn btn-xs btn-danger','confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']))); 
						?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php echo $this->Js->writeBuffer(); ?>