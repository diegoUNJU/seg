<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mailbox Sends'), ['controller' => 'MailboxSends', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mailbox Send'), ['controller' => 'MailboxSends', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Boxes'), ['controller' => 'Boxes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Box'), ['controller' => 'Boxes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mailbox Send Id') ?></th>
            <td><?= $this->Number->format($user->mailbox_send_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Box Id') ?></th>
            <td><?= $this->Number->format($user->box_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Mailbox Sends') ?></h4>
        <?php if (!empty($user->mailbox_sends)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Message Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->mailbox_sends as $mailboxSends): ?>
            <tr>
                <td><?= h($mailboxSends->id) ?></td>
                <td><?= h($mailboxSends->message_id) ?></td>
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
    <div class="related">
        <h4><?= __('Related Boxes') ?></h4>
        <?php if (!empty($user->boxes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Payment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->boxes as $boxes): ?>
            <tr>
                <td><?= h($boxes->id) ?></td>
                <td><?= h($boxes->user_id) ?></td>
                <td><?= h($boxes->total) ?></td>
                <td><?= h($boxes->date) ?></td>
                <td><?= h($boxes->payment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Boxes', 'action' => 'view', $boxes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Boxes', 'action' => 'edit', $boxes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Boxes', 'action' => 'delete', $boxes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $boxes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
