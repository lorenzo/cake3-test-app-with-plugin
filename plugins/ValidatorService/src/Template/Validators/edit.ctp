<div class="validators form">
<?= $this->Form->create($validator); ?>
	<fieldset>
		<legend><?= __('Edit Validator'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('authorid');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $validator->id], ['confirm' => __('Are you sure you want to delete # %s?', $validator->id)]); ?></li>
		<li><?= $this->Html->link(__('List Validators'), ['action' => 'index']); ?></li>
	</ul>
</div>
