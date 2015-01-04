<?php
/**
 * @var $this Cake\View\View
 */
?>

<div class="row">
    <div class="actions col-md-2">
        <h3><?= __('Actions') ?></h3>
        <ul class="side-nav">
            <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        </ul>
    </div>
    <div class="users form col-md-10">
        <?
        $this->Form->templates(\Cake\Core\Configure::read('Templates')['small']);
        echo $this->Form->create($user);
        ?>
        <fieldset>
            <legend><?= __('Add User') ?></legend>
            <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('recovery_email');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Save')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
