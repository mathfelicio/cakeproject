<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Task']), ['action' => 'edit', $task->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Task']), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Tasks']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Task']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Types']), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Type']), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['States']), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['State']), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tasks view col-lg-10 col-md-9">
    <h3><?= h($task->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Type</th>
            <td><?= $task->has('type') ? $this->Html->link($task->type->title, ['controller' => 'Types', 'action' => 'view', $task->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th>State</th>
            <td><?= $task->has('state') ? $this->Html->link($task->state->title, ['controller' => 'States', 'action' => 'view', $task->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?= h($task->title) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($task->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($task->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($task->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Users']) ?></h4>
        <?php if (!empty($task->users)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($task->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
