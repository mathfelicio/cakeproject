<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $type->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $type->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="types form col-md-10 columns content">
    <?= $this->Form->create($type) ?>
    <fieldset>
        <legend><?= 'Edit Type' ?></legend>
        <?php
            echo $this->Form->input('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
