<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Drawer $drawer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Drawer'), ['action' => 'edit', $drawer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Drawer'), ['action' => 'delete', $drawer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drawer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Drawers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drawer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Drawer Amounts'), ['controller' => 'DrawerAmounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drawer Amount'), ['controller' => 'DrawerAmounts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="drawers view large-9 medium-8 columns content">
    <h3><?= h($drawer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($drawer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($drawer->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($drawer->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($drawer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($drawer->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Drawer Amounts') ?></h4>
        <?php if (!empty($drawer->drawer_amounts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Drawer Id') ?></th>
                <th scope="col"><?= __('One') ?></th>
                <th scope="col"><?= __('Two') ?></th>
                <th scope="col"><?= __('Five') ?></th>
                <th scope="col"><?= __('Ten') ?></th>
                <th scope="col"><?= __('Twenty') ?></th>
                <th scope="col"><?= __('Fifty') ?></th>
                <th scope="col"><?= __('Hundred') ?></th>
                <th scope="col"><?= __('Twohundred') ?></th>
                <th scope="col"><?= __('Fivehundred') ?></th>
                <th scope="col"><?= __('Twothousand') ?></th>
                <th scope="col"><?= __('Total Amount') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($drawer->drawer_amounts as $drawerAmounts): ?>
            <tr>
                <td><?= h($drawerAmounts->id) ?></td>
                <td><?= h($drawerAmounts->drawer_id) ?></td>
                <td><?= h($drawerAmounts->one) ?></td>
                <td><?= h($drawerAmounts->two) ?></td>
                <td><?= h($drawerAmounts->five) ?></td>
                <td><?= h($drawerAmounts->ten) ?></td>
                <td><?= h($drawerAmounts->twenty) ?></td>
                <td><?= h($drawerAmounts->fifty) ?></td>
                <td><?= h($drawerAmounts->hundred) ?></td>
                <td><?= h($drawerAmounts->twohundred) ?></td>
                <td><?= h($drawerAmounts->fivehundred) ?></td>
                <td><?= h($drawerAmounts->twothousand) ?></td>
                <td><?= h($drawerAmounts->total_amount) ?></td>
                <td><?= h($drawerAmounts->created) ?></td>
                <td><?= h($drawerAmounts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DrawerAmounts', 'action' => 'view', $drawerAmounts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DrawerAmounts', 'action' => 'edit', $drawerAmounts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DrawerAmounts', 'action' => 'delete', $drawerAmounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drawerAmounts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
