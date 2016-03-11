<div class="container">
	<div class="news index">
		<h2>
		<?php echo __('Materias'); ?>
		<?php
		echo $this->Html->link('Adicionar',array('action'=>'add'),array('class'=>'btn btn-md btn-info pull-right','style'=>'color: black; font-weight: bold'));
		?>
		</h2>
		<table class="table table-hover table-bordered">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('category_id'); ?></th>
				<th><?php echo $this->Paginator->sort('title'); ?></th>
				<th><?php echo $this->Paginator->sort('subtitle'); ?></th>
				<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				<th><?php echo $this->Paginator->sort('note'); ?></th>
				<th><?php echo $this->Paginator->sort('source'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($news as $news): ?>
		<tr>
			<td>
				<?php echo $this->Html->link($news['Category']['name'], array('controller' => 'categories', 'action' => 'view', $news['Category']['id'])); ?>
			</td>
			<td><?php echo h($news['News']['title']); ?>&nbsp;</td>
			<td><?php echo h($news['News']['subtitle']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($news['User']['username'], array('controller' => 'users', 'action' => 'view', $news['User']['id'])); ?>
			</td>
			<td><?php echo h($news['News']['note']); ?>&nbsp;</td>
			<td><?php echo h($news['News']['source']); ?>&nbsp;</td>
			<td class="actions">
				<?php 
					echo $this->Html->link(__('View'), array('action' => 'thenews', $news['News']['id']), array('class'=>'btn btn-xs btn-info')).' ';
					if ($news['News']['id'] != 2) {
						echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id']), array('class'=>'btn btn-xs btn-success')).' ';
 						echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), array('class'=>'btn btn-xs btn-danger','confirm' => __('Are you sure you want to delete # %s?', $news['News']['id']))); 
 					}
 				?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>
		<p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	</p>
		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __(' previous '), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__(' next ') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
</div>
