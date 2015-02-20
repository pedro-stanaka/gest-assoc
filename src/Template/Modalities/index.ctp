<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Modality'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Members Modalities'), ['controller' => 'MembersModalities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Members Modality'), ['controller' => 'MembersModalities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="modalities index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($modalities as $modality): ?>
        <tr>
            <td><?= $this->Number->format($modality->id) ?></td>
            <td><?= h($modality->name) ?></td>
            <td><?= h($modality->created) ?></td>
            <td><?= h($modality->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $modality->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modality->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modality->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
