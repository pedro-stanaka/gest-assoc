<div class="row">
    <div class="col-md-2">
        <h3><?= __('Actions') ?></h3>
        <ul class="side-nav">
            <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        </ul>
    </div>
    <div class="members index col-md-10">
        <table cellpadding="0" cellspacing="0" class="table table-bordered">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('member_number') ?></th>
                <th><?= $this->Paginator->sort('member_since') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('updated') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($members as $member): ?>
                <tr>
                    <td>
                        <?= $member->has('person') ? $this->Html->link($member->person->name, ['controller' => 'People', 'action' => 'view', $member->person->id]) : '' ?>
                    </td>
                    <td><?= h($member->member_number) ?></td>
                    <td><?= h($member->member_since) ?></td>
                    <td><?= h($member->created) ?></td>
                    <td><?= h($member->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $member->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $member->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?>
                    </td>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')); ?>
                <?= $this->Paginator->numbers(); ?>
                <?= $this->Paginator->next(__('next') . ' >'); ?>
            </ul>
            <p><?= $this->Paginator->counter(); ?></p>
        </div>
    </div>
</div>
