<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mailbox Send'), ['action' => 'edit', $mailboxSend->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mailbox Send'), ['action' => 'delete', $mailboxSend->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailboxSend->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mailbox Sends'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mailbox Send'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mailboxSends view large-9 medium-8 columns content">
    <h3><?= h($mailboxSend->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mailboxSend->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Message Id') ?></th>
            <td><?= $this->Number->format($mailboxSend->message_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Messages') ?></h4>
        <?php if (!empty($mailboxSend->messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Numer Client') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Mailbox Send Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mailboxSend->messages as $messages): ?>
            <tr>
                <td><?= h($messages->id) ?></td>
                <td><?= h($messages->numer_client) ?></td>
                <td><?= h($messages->message) ?></td>
                <td><?= h($messages->date) ?></td>
                <td><?= h($messages->status) ?></td>
                <td><?= h($messages->mailbox_send_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Messages', 'action' => 'view', $messages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Messages', 'action' => 'edit', $messages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Messages', 'action' => 'delete', $messages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
