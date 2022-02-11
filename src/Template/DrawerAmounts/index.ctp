<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DrawerAmount[]|\Cake\Collection\CollectionInterface $drawerAmounts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Drawer Amount'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Drawers'), ['controller' => 'Drawers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Drawer'), ['controller' => 'Drawers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="drawerAmounts index large-9 medium-8 columns content">
    <h3><?= __('Drawer Amounts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('drawer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('one') ?></th>
                <th scope="col"><?= $this->Paginator->sort('two') ?></th>
                <th scope="col"><?= $this->Paginator->sort('five') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ten') ?></th>
                <th scope="col"><?= $this->Paginator->sort('twenty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fifty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hundred') ?></th>
                <th scope="col"><?= $this->Paginator->sort('twohundred') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fivehundred') ?></th>
                <th scope="col"><?= $this->Paginator->sort('twothousand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drawerAmounts as $drawerAmount): ?>
            <tr>
                <td><?= $this->Number->format($drawerAmount->id) ?></td>
                <td><?= $drawerAmount->has('drawer') ? $this->Html->link($drawerAmount->drawer->id, ['controller' => 'Drawers', 'action' => 'view', $drawerAmount->drawer->id]) : '' ?></td>
                <td><?= $this->Number->format($drawerAmount->one) ?></td>
                <td><?= $this->Number->format($drawerAmount->two) ?></td>
                <td><?= $this->Number->format($drawerAmount->five) ?></td>
                <td><?= $this->Number->format($drawerAmount->ten) ?></td>
                <td><?= $this->Number->format($drawerAmount->twenty) ?></td>
                <td><?= $this->Number->format($drawerAmount->fifty) ?></td>
                <td><?= $this->Number->format($drawerAmount->hundred) ?></td>
                <td><?= $this->Number->format($drawerAmount->twohundred) ?></td>
                <td><?= $this->Number->format($drawerAmount->fivehundred) ?></td>
                <td><?= $this->Number->format($drawerAmount->twothousand) ?></td>
                <td><?= $this->Number->format($drawerAmount->total_amount) ?></td>
                <td><?= h($drawerAmount->created) ?></td>
                <td><?= h($drawerAmount->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $drawerAmount->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $drawerAmount->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $drawerAmount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drawerAmount->id)]) ?>
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
