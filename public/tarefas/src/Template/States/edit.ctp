<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $state->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $state->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'States'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="states form col-md-12 columns content">
    <?= $this->Form->create($state) ?>
    <fieldset>
        <legend><?= 'Edit State' ?></legend>
        <?php
            echo $this->Form->input('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
