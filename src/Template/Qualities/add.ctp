<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quality $quality
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Qualities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Loan Items'), ['controller' => 'LoanItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Loan Item'), ['controller' => 'LoanItems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="qualities form large-9 medium-8 columns content">
    <?= $this->Form->create($quality) ?>
    <fieldset>
        <legend><?= __('Add Quality') ?></legend>
        <?php
            echo $this->Form->control('quality');
            echo $this->Form->control('percentage');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
