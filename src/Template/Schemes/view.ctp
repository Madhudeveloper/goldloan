<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Scheme $scheme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Scheme'), ['action' => 'edit', $scheme->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Scheme'), ['action' => 'delete', $scheme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scheme->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schemes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scheme'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Loans'), ['controller' => 'Loans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Loan'), ['controller' => 'Loans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schemes view large-9 medium-8 columns content">
    <h3><?= h($scheme->scheme_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Scheme Name') ?></th>
            <td><?= h($scheme->scheme_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($scheme->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratepergram') ?></th>
            <td><?= $this->Number->format($scheme->ratepergram) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thirty') ?></th>
            <td><?= $this->Number->format($scheme->thirty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sixty') ?></th>
            <td><?= $this->Number->format($scheme->sixty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ninety') ?></th>
            <td><?= $this->Number->format($scheme->ninety) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Onetwenty') ?></th>
            <td><?= $this->Number->format($scheme->onetwenty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Onefifty') ?></th>
            <td><?= $this->Number->format($scheme->onefifty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Oneeighty') ?></th>
            <td><?= $this->Number->format($scheme->oneeighty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($scheme->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($scheme->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Loans') ?></h4>
        <?php if (!empty($scheme->loans)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Application No') ?></th>
                <th scope="col"><?= __('Scheme Id') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Interest') ?></th>
                <th scope="col"><?= __('Tobepaid') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($scheme->loans as $loans): ?>
            <tr>
                <td><?= h($loans->id) ?></td>
                <td><?= h($loans->customer_id) ?></td>
                <td><?= h($loans->application_no) ?></td>
                <td><?= h($loans->scheme_id) ?></td>
                <td><?= h($loans->Amount) ?></td>
                <td><?= h($loans->status) ?></td>
                <td><?= h($loans->interest) ?></td>
                <td><?= h($loans->tobepaid) ?></td>
                <td><?= h($loans->created) ?></td>
                <td><?= h($loans->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Loans', 'action' => 'view', $loans->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Loans', 'action' => 'edit', $loans->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Loans', 'action' => 'delete', $loans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loans->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
