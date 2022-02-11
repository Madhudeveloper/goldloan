<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Loan $loan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Loan'), ['action' => 'edit', $loan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Loan'), ['action' => 'delete', $loan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Loans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Loan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schemes'), ['controller' => 'Schemes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scheme'), ['controller' => 'Schemes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Loan Items'), ['controller' => 'LoanItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Loan Item'), ['controller' => 'LoanItems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="loans view large-9 medium-8 columns content">
    <h3><?= h($loan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $loan->has('customer') ? $this->Html->link($loan->customer->name, ['controller' => 'Customers', 'action' => 'view', $loan->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Application No') ?></th>
            <td><?= h($loan->application_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scheme') ?></th>
            <td><?= $loan->has('scheme') ? $this->Html->link($loan->scheme->id, ['controller' => 'Schemes', 'action' => 'view', $loan->scheme->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($loan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($loan->Amount) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Loan Items') ?></h4>
        <?php if (!empty($loan->loan_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Loan Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col"><?= __('Gross') ?></th>
                <th scope="col"><?= __('Net') ?></th>
                <th scope="col"><?= __('Quality Id') ?></th>
                <th scope="col"><?= __('Container Id') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($loan->loan_items as $loanItems): ?>
            <tr>
                <td><?= h($loanItems->id) ?></td>
                <td><?= h($loanItems->loan_id) ?></td>
                <td><?= h($loanItems->Description) ?></td>
                <td><?= h($loanItems->type_id) ?></td>
                <td><?= h($loanItems->Gross) ?></td>
                <td><?= h($loanItems->Net) ?></td>
                <td><?= h($loanItems->quality_id) ?></td>
                <td><?= h($loanItems->container_id) ?></td>
                <td><?= h($loanItems->image) ?></td>
                <td><?= h($loanItems->location) ?></td>
                <td><?= h($loanItems->created) ?></td>
                <td><?= h($loanItems->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LoanItems', 'action' => 'view', $loanItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LoanItems', 'action' => 'edit', $loanItems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LoanItems', 'action' => 'delete', $loanItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loanItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
