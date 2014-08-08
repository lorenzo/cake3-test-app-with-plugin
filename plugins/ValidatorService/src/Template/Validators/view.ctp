<div class="validators view">
	<h2><?= __('Validator'); ?></h2>
	<dl>
		<dt><?= __('Id'); ?></dt>
		<dd>
			<?= h($validator->id); ?>
			&nbsp;
		</dd>
		<dt><?= __('Authorid'); ?></dt>
		<dd>
			<?= h($validator->authorid); ?>
			&nbsp;
		</dd>
		<dt><?= __('Title'); ?></dt>
		<dd>
			<?= h($validator->title); ?>
			&nbsp;
		</dd>
		<dt><?= __('Body'); ?></dt>
		<dd>
			<?= h($validator->body); ?>
			&nbsp;
		</dd>
		<dt><?= __('Created'); ?></dt>
		<dd>
			<?= h($validator->created); ?>
			&nbsp;
		</dd>
		<dt><?= __('Modified'); ?></dt>
		<dd>
			<?= h($validator->modified); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('Edit Validator'), ['action' => 'edit', $validator->id]); ?> </li>
		<li><?= $this->Form->postLink(__('Delete Validator'), ['action' => 'delete', $validator->id], ['confirm' => __('Are you sure you want to delete # %s?', $validator->id)]); ?> </li>
		<li><?= $this->Html->link(__('List Validators'), ['action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Validator'), ['action' => 'add']); ?> </li>
	</ul>
</div>
