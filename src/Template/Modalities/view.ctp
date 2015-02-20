<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Modality'), ['action' => 'edit', $modality->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Modality'), ['action' => 'delete', $modality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modality->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Modalities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modality'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members Modalities'), ['controller' => 'MembersModalities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Members Modality'), ['controller' => 'MembersModalities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="modalities view large-10 medium-9 columns">
    <h2><?= h($modality->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($modality->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($modality->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($modality->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($modality->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($modality->description)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related MembersModalities') ?></h4>
    <?php if (!empty($modality->members_modalities)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Member Id') ?></th>
            <th><?= __('Modality Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($modality->members_modalities as $membersModalities): ?>
        <tr>
            <td><?= h($membersModalities->id) ?></td>
            <td><?= h($membersModalities->member_id) ?></td>
            <td><?= h($membersModalities->modality_id) ?></td>
            <td><?= h($membersModalities->created) ?></td>
            <td><?= h($membersModalities->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'MembersModalities', 'action' => 'view', $membersModalities->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'MembersModalities', 'action' => 'edit', $membersModalities->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MembersModalities', 'action' => 'delete', $membersModalities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membersModalities->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Members') ?></h4>
    <?php if (!empty($modality->members)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Person Id') ?></th>
            <th><?= __('Member Number') ?></th>
            <th><?= __('Member Since') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($modality->members as $members): ?>
        <tr>
            <td><?= h($members->id) ?></td>
            <td><?= h($members->person_id) ?></td>
            <td><?= h($members->member_number) ?></td>
            <td><?= h($members->member_since) ?></td>
            <td><?= h($members->created) ?></td>
            <td><?= h($members->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Members', 'action' => 'view', $members->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Members', 'action' => 'edit', $members->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Members', 'action' => 'delete', $members->id], ['confirm' => __('Are you sure you want to delete # {0}?', $members->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
