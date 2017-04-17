<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mailbox Sends'), ['controller' => 'MailboxSends', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mailbox Send'), ['controller' => 'MailboxSends', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="messages form large-9 medium-8 columns content">
    <?= $this->Form->create($message) ?>
    <fieldset>
        <legend><?= __('Add Message') ?></legend>
        <?php
            echo $this->Form->control('numer_client');
            echo $this->Form->control('message');
            echo $this->Form->control('date');
            echo $this->Form->control('status');
            echo $this->Form->control('mailbox_send_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
