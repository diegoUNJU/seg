<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Polices'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="polices form large-9 medium-8 columns content">
    <?= $this->Form->create($police) ?>
    <fieldset>
        <legend><?= __('Add Police') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('cost');
            echo $this->Form->control('description');
            echo $this->Form->control('immovable_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
