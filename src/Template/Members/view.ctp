<div class="row">
    <div class="col-md-2 actions columns large-2 medium-3">
        <h3><?= __('Actions') ?></h3>
        <ul class="side-nav">
            <li><?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id]) ?> </li>
            <li><?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?> </li>
            <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?> </li>
            <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        </ul>
    </div>
    <div class="col-md-10 view">
        <h2><?= h($member->name) ?></h2>

        <div class="row">
            <div class="col-md-6">
                <h6 class="subheader"><?= __('Person') ?></h6>
                <p><?= $member->has('person') ? $this->Html->link($member->person->name, ['controller' => 'People', 'action' => 'view', $member->person->id]) : '' ?></p>
                <h6 class="subheader"><?= __('Member Number') ?></h6>

                <p><?= h($member->member_number) ?></p>
            </div>
            <div class="col-md-2 columns numbers end">
                <h6 class="subheader"><?= __('Id') ?></h6>

                <p><?= $this->Number->format($member->id) ?></p>
            </div>
            <div class="col-md-2 columns dates end">
                <h6 class="subheader"><?= __('Member Since') ?></h6>

                <p><?= h($member->member_since) ?></p>
                <h6 class="subheader"><?= __('Created') ?></h6>

                <p><?= h($member->created) ?></p>
                <h6 class="subheader"><?= __('Updated') ?></h6>

                <p><?= h($member->updated) ?></p>
            </div>
        </div>
    </div>

</div>
