<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QualityAmount[]|\Cake\Collection\CollectionInterface $qualityAmounts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Quality Amount'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Qualities'), ['controller' => 'Qualities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quality'), ['controller' => 'Qualities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="qualityAmounts index large-9 medium-8 columns content">
    <h3><?= __('Quality Amounts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quality_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('todvalue') ?></th>
                <th scope="col"><?= $this->Paginator->sort('percentage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($qualityAmounts as $qualityAmount): ?>
            <tr>
                <td><?= $this->Number->format($qualityAmount->id) ?></td>
                <td><?= $qualityAmount->has('quality') ? $this->Html->link($qualityAmount->quality->quality, ['controller' => 'Qualities', 'action' => 'view', $qualityAmount->quality->id]) : '' ?></td>
                <td><?= h($qualityAmount->date) ?></td>
                <td><?= $this->Number->format($qualityAmount->todvalue) ?></td>
                <td><?= $this->Number->format($qualityAmount->percentage) ?></td>
                <td><?= h($qualityAmount->created) ?></td>
                <td><?= h($qualityAmount->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $qualityAmount->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $qualityAmount->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $qualityAmount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qualityAmount->id)]) ?>
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
