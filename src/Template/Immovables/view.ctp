<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Immovable'), ['action' => 'edit', $immovable->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Immovable'), ['action' => 'delete', $immovable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $immovable->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Immovables'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Immovable'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="immovables view large-9 medium-8 columns content">
    <h3><?= h($immovable->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($immovable->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($immovable->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($immovable->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Policy Id') ?></th>
            <td><?= $this->Number->format($immovable->policy_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Id') ?></th>
            <td><?= $this->Number->format($immovable->client_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Clients') ?></h4>
        <?php if (!empty($immovable->clients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bar Code') ?></th>
                <th scope="col"><?= __('Number Client') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Dni') ?></th>
                <th scope="col"><?= __('Adress') ?></th>
                <th scope="col"><?= __('Mobil') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Immovable Id') ?></th>
                <th scope="col"><?= __('Payment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($immovable->clients as $clients): ?>
            <tr>
                <td><?= h($clients->id) ?></td>
                <td><?= h($clients->bar_code) ?></td>
                <td><?= h($clients->number_client) ?></td>
                <td><?= h($clients->first_name) ?></td>
                <td><?= h($clients->last_name) ?></td>
                <td><?= h($clients->dni) ?></td>
                <td><?= h($clients->adress) ?></td>
                <td><?= h($clients->mobil) ?></td>
                <td><?= h($clients->email) ?></td>
                <td><?= h($clients->immovable_id) ?></td>
                <td><?= h($clients->payment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Clients', 'action' => 'view', $clients->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clients', 'action' => 'edit', $clients->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clients', 'action' => 'delete', $clients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clients->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
