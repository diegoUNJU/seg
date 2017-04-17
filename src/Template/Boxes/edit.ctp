<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $box->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $box->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Boxes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="boxes form large-9 medium-8 columns content">
    <?= $this->Form->create($box) ?>
    <fieldset>
        <legend><?= __('Edit Box') ?></legend>
        <?php
            echo $this->Form->control('user_id');
            echo $this->Form->control('total');
            echo $this->Form->control('date');
            echo $this->Form->control('payment_id', ['options' => $payments]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
