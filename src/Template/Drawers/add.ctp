<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Drawer $drawer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Drawers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Drawer Amounts'), ['controller' => 'DrawerAmounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Drawer Amount'), ['controller' => 'DrawerAmounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="drawers form large-9 medium-8 columns content">
    <?= $this->Form->create($drawer) ?>
    <fieldset>
        <legend><?= __('Add Drawer') ?></legend>
        <?php
            echo $this->Form->control('date');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
