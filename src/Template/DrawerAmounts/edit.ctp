<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DrawerAmount $drawerAmount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $drawerAmount->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $drawerAmount->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Drawer Amounts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Drawers'), ['controller' => 'Drawers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Drawer'), ['controller' => 'Drawers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="drawerAmounts form large-9 medium-8 columns content">
    <?= $this->Form->create($drawerAmount) ?>
    <fieldset>
        <legend><?= __('Edit Drawer Amount') ?></legend>
        <?php
            echo $this->Form->control('drawer_id', ['options' => $drawers]);
            echo $this->Form->control('one');
            echo $this->Form->control('two');
            echo $this->Form->control('five');
            echo $this->Form->control('ten');
            echo $this->Form->control('twenty');
            echo $this->Form->control('fifty');
            echo $this->Form->control('hundred');
            echo $this->Form->control('twohundred');
            echo $this->Form->control('fivehundred');
            echo $this->Form->control('twothousand');
            echo $this->Form->control('total_amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
