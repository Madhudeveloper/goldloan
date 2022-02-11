<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerDocument $customerDocument
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Document'), ['action' => 'edit', $customerDocument->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Document'), ['action' => 'delete', $customerDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerDocument->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Document'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerDocuments view large-9 medium-8 columns content">
    <h3><?= h($customerDocument->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($customerDocument->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($customerDocument->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('No') ?></th>
            <td><?= h($customerDocument->no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerDocument->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customerDocument->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customerDocument->modified) ?></td>
        </tr>
    </table>
</div>
