<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LoanItem $loanItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Loan Item'), ['action' => 'edit', $loanItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Loan Item'), ['action' => 'delete', $loanItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loanItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Loan Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Loan Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Loans'), ['controller' => 'Loans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Loan'), ['controller' => 'Loans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Qualities'), ['controller' => 'Qualities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quality'), ['controller' => 'Qualities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Containers'), ['controller' => 'Containers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Container'), ['controller' => 'Containers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="loanItems view large-9 medium-8 columns content">
    <h3><?= h($loanItem->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Loan') ?></th>
            <td><?= $loanItem->has('loan') ? $this->Html->link($loanItem->loan->id, ['controller' => 'Loans', 'action' => 'view', $loanItem->loan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($loanItem->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $loanItem->has('type') ? $this->Html->link($loanItem->type->id, ['controller' => 'Types', 'action' => 'view', $loanItem->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quality') ?></th>
            <td><?= $loanItem->has('quality') ? $this->Html->link($loanItem->quality->id, ['controller' => 'Qualities', 'action' => 'view', $loanItem->quality->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Container') ?></th>
            <td><?= $loanItem->has('container') ? $this->Html->link($loanItem->container->id, ['controller' => 'Containers', 'action' => 'view', $loanItem->container->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($loanItem->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($loanItem->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($loanItem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gross') ?></th>
            <td><?= $this->Number->format($loanItem->Gross) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Net') ?></th>
            <td><?= $this->Number->format($loanItem->Net) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($loanItem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($loanItem->modified) ?></td>
        </tr>
    </table>
</div>
