<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerDocument[]|\Cake\Collection\CollectionInterface $customerDocuments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer Document'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerDocuments index large-9 medium-8 columns content">
    <h3><?= __('Customer Documents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerDocuments as $customerDocument): ?>
            <tr>
                <td><?= $this->Number->format($customerDocument->id) ?></td>
                <td><?= h($customerDocument->name) ?></td>
                <td><?= h($customerDocument->image) ?></td>
                <td><?= h($customerDocument->no) ?></td>
                <td><?= h($customerDocument->created) ?></td>
                <td><?= h($customerDocument->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customerDocument->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerDocument->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerDocument->id)]) ?>
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
