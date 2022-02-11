<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QualityAmount $qualityAmount
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Quality Amounts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Qualities'), ['controller' => 'Qualities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quality'), ['controller' => 'Qualities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="qualityAmounts form large-9 medium-8 columns content">
    <?= $this->Form->create($qualityAmount) ?>
    <fieldset>
        <legend><?= __('Add Quality Amount') ?></legend>
        <?php
            echo $this->Form->control('quality_id', ['options' => $qualities]);
            echo $this->Form->control('date');
            echo $this->Form->control('todvalue');
            echo $this->Form->control('percentage');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
