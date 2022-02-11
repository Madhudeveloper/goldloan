<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QualityAmount $qualityAmount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quality Amount'), ['action' => 'edit', $qualityAmount->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quality Amount'), ['action' => 'delete', $qualityAmount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qualityAmount->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quality Amounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quality Amount'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Qualities'), ['controller' => 'Qualities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quality'), ['controller' => 'Qualities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="qualityAmounts view large-9 medium-8 columns content">
    <h3><?= h($qualityAmount->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Quality') ?></th>
            <td><?= $qualityAmount->has('quality') ? $this->Html->link($qualityAmount->quality->quality, ['controller' => 'Qualities', 'action' => 'view', $qualityAmount->quality->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($qualityAmount->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Todvalue') ?></th>
            <td><?= $this->Number->format($qualityAmount->todvalue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Percentage') ?></th>
            <td><?= $this->Number->format($qualityAmount->percentage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($qualityAmount->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($qualityAmount->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($qualityAmount->modified) ?></td>
        </tr>
    </table>
</div>
