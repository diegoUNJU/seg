<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Police'), ['action' => 'edit', $police->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Police'), ['action' => 'delete', $police->id], ['confirm' => __('Are you sure you want to delete # {0}?', $police->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Polices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Police'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="polices view large-9 medium-8 columns content">
    <h3><?= h($police->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($police->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($police->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($police->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($police->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Immovable Id') ?></th>
            <td><?= $this->Number->format($police->immovable_id) ?></td>
        </tr>
    </table>
</div>
