<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Modalities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Members Modalities'), ['controller' => 'MembersModalities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Members Modality'), ['controller' => 'MembersModalities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="modalities form large-10 medium-9 columns">
    <?= $this->Form->create($modality); ?>
    <fieldset>
        <legend><?= __('Add Modality') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('members._ids', ['options' => $members]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
