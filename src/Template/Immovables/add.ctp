<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Immovables'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="immovables form large-9 medium-8 columns content">
    <?= $this->Form->create($immovable) ?>
    <fieldset>
        <legend><?= __('Add Immovable') ?></legend>
        <?php
            echo $this->Form->control('type');
            echo $this->Form->control('description');
            echo $this->Form->control('policy_id');
            echo $this->Form->control('client_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
