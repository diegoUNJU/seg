<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Police'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="polices index large-9 medium-8 columns content">
    <h3><?= __('Polices') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('immovable_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($polices as $police): ?>
            <tr>
                <td><?= $this->Number->format($police->id) ?></td>
                <td><?= h($police->name) ?></td>
                <td><?= $this->Number->format($police->cost) ?></td>
                <td><?= h($police->description) ?></td>
                <td><?= $this->Number->format($police->immovable_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $police->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $police->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $police->id], ['confirm' => __('Are you sure you want to delete # {0}?', $police->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
