<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Message'), ['action' => 'edit', $message->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message->id], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mailbox Sends'), ['controller' => 'MailboxSends', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mailbox Send'), ['controller' => 'MailboxSends', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="messages view large-9 medium-8 columns content">
    <h3><?= h($message->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Message') ?></th>
            <td><?= h($message->message) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($message->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numer Client') ?></th>
            <td><?= $this->Number->format($message->numer_client) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mailbox Send Id') ?></th>
            <td><?= $this->Number->format($message->mailbox_send_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($message->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $message->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Mailbox Sends') ?></h4>
        <?php if (!empty($message->mailbox_sends)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Message Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($message->mailbox_sends as $mailboxSends): ?>
            <tr>
                <td><?= h($mailboxSends->id) ?></td>
                <td><?= h($mailboxSends->message_id) ?></td>
                <td><?= h($mailboxSends->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MailboxSends', 'action' => 'view', $mailboxSends->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MailboxSends', 'action' => 'edit', $mailboxSends->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MailboxSends', 'action' => 'delete', $mailboxSends->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailboxSends->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
