<div class="validators index">
	<h2><?= __('Validators'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?= $this->Paginator->sort('id'); ?></th>
		<th><?= $this->Paginator->sort('authorid'); ?></th>
		<th><?= $this->Paginator->sort('title'); ?></th>
		<th><?= $this->Paginator->sort('body'); ?></th>
		<th><?= $this->Paginator->sort('created'); ?></th>
		<th><?= $this->Paginator->sort('modified'); ?></th>
		<th class="actions"><?= __('Actions'); ?></th>
	</tr>
	<?php foreach ($validators as $validator): ?>
	<tr>
		<td><?= h($validator->id); ?>&nbsp;</td>
		<td><?= h($validator->authorid); ?>&nbsp;</td>
		<td><?= h($validator->title); ?>&nbsp;</td>
		<td><?= h($validator->body); ?>&nbsp;</td>
		<td><?= h($validator->created); ?>&nbsp;</td>
		<td><?= h($validator->modified); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $validator->id]); ?>
			<?= $this->Html->link(__('Edit'), ['action' => 'edit', $validator->id]); ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $validator->id], ['confirm' => __('Are you sure you want to delete # %s?', $validator->id)]); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
	<p><?= $this->Paginator->counter(); ?></p>
	<ul class="pagination">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'));
		echo $this->Paginator->numbers();
		echo $this->Paginator->next(__('next') . ' >');
	?>
	</ul>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('New Validator'), ['action' => 'add']); ?></li>
	</ul>
</div>
