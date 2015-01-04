<?php
/**
 * @var $member \App\Model\Entity\Member
 */
?>

<div class="members form col-md-10">
    <?= $this->Form->create($member); ?>
    <?php $this->Form->templates(\Cake\Core\Configure::read('Templates')['small']); ?>
    <fieldset>
        <legend><?= __('Personal data') ?></legend>
        <div class="row">
            <div class="col-md-12">
                <?= $this->Form->input('person.name') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <?= $this->Form->input('person.gender', ['options' => ['m' => _('Male'), 'f' => _('Female')], 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4 form-group">
                <?= $this->Form->input('person.birth_date', ['type' => 'text']); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $this->Form->input('person.cpf') ?>
            </div>
            <div class="col-md-4">
                <?= $this->Form->input('person.rg') ?>
            </div>
            <div class="col-md-4">
                <?= $this->Form->input('person.orgao_expedidor', ['label' => _('Emitter Organ')]); ?>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend><?= _('Address Information') ?></legend>
        <div class="row">
            <div class="col-md-10">
                <?= $this->Form->input('person.address'); ?>
            </div>
            <div class="col-md-2">
                <?= $this->Form->input('person.number'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->Form->input('person.complement'); ?>
            </div>
            <div class="col-md-6">
                <?= $this->Form->input('person.cep', ['label' => _('Zip code')]); ?>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Membership information</legend>
        <div class="row">
            <div class="col-md-6">
                <?= $this->Form->input('member_number'); ?>
            </div>
            <div class="col-md-6">
                <?= $this->Form->input('member_since', ['type' => 'text']); ?>
            </div>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Save member')) ?>
    <?= $this->Form->end() ?>
</div>