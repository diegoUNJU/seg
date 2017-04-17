<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Boxes'), ['controller' => 'Boxes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Box'), ['controller' => 'Boxes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payments view large-9 medium-8 columns content">
    <h3><?= h($payment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $payment->has('client') ? $this->Html->link($payment->client->id, ['controller' => 'Clients', 'action' => 'view', $payment->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($payment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Import') ?></th>
            <td><?= $this->Number->format($payment->import) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($payment->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Box Id') ?></th>
            <td><?= $this->Number->format($payment->box_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Pay') ?></th>
            <td><?= h($payment->date_pay) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Boxes') ?></h4>
        <?php if (!empty($payment->boxes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Payment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($payment->boxes as $boxes): ?>
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
