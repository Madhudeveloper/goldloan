<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LoanItem $loanItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Loan Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Loans'), ['controller' => 'Loans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Loan'), ['controller' => 'Loans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Qualities'), ['controller' => 'Qualities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quality'), ['controller' => 'Qualities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Containers'), ['controller' => 'Containers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Container'), ['controller' => 'Containers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="loanItems form large-9 medium-8 columns content">
    <?= $this->Form->create($loanItem) ?>
    <fieldset>
        <legend><?= __('Add Loan Item') ?></legend>
        <?php
            echo $this->Form->control('loan_id', ['options' => $loans]);
            echo $this->Form->control('Description');
            echo $this->Form->control('type_id', ['options' => $types]);
            echo $this->Form->control('Gross');
            echo $this->Form->control('Net');
            echo $this->Form->control('quality_id', ['options' => $qualities]);
            echo $this->Form->control('container_id', ['options' => $containers]);
            echo $this->Form->control('image');
            echo $this->Form->control('location');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
