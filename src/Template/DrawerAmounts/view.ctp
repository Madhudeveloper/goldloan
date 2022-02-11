<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DrawerAmount $drawerAmount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Drawer Amount'), ['action' => 'edit', $drawerAmount->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Drawer Amount'), ['action' => 'delete', $drawerAmount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drawerAmount->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Drawer Amounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drawer Amount'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Drawers'), ['controller' => 'Drawers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drawer'), ['controller' => 'Drawers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="drawerAmounts view large-9 medium-8 columns content">
    <h3><?= h($drawerAmount->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Drawer') ?></th>
            <td><?= $drawerAmount->has('drawer') ? $this->Html->link($drawerAmount->drawer->id, ['controller' => 'Drawers', 'action' => 'view', $drawerAmount->drawer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($drawerAmount->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('One') ?></th>
            <td><?= $this->Number->format($drawerAmount->one) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Two') ?></th>
            <td><?= $this->Number->format($drawerAmount->two) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Five') ?></th>
            <td><?= $this->Number->format($drawerAmount->five) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ten') ?></th>
            <td><?= $this->Number->format($drawerAmount->ten) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twenty') ?></th>
            <td><?= $this->Number->format($drawerAmount->twenty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fifty') ?></th>
            <td><?= $this->Number->format($drawerAmount->fifty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hundred') ?></th>
            <td><?= $this->Number->format($drawerAmount->hundred) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twohundred') ?></th>
            <td><?= $this->Number->format($drawerAmount->twohundred) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fivehundred') ?></th>
            <td><?= $this->Number->format($drawerAmount->fivehundred) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twothousand') ?></th>
            <td><?= $this->Number->format($drawerAmount->twothousand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Amount') ?></th>
            <td><?= $this->Number->format($drawerAmount->total_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($drawerAmount->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($drawerAmount->modified) ?></td>
        </tr>
    </table>
</div>
