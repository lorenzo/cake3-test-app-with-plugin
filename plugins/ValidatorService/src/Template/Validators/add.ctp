<div class="validators form">
<?= $this->Form->create($validator); ?>
	<fieldset>
		<legend><?= __('Add Validator'); ?></legend>
	<?php
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
		<li><?= $this->Html->link(__('List Validators'), ['action' => 'index']); ?></li>
	</ul>
</div>
