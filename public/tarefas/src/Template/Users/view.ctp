<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['User']), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['User']), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Tasks']), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Task']), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view col-lg-10 col-md-9">
    <h3><?= h($user->email) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Email</th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($user->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($user->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Tasks']) ?></h4>
        <?php if (!empty($user->tasks)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Type Id</th>
                <th>State Id</th>
                <th>Title</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->tasks as $tasks): ?>
            <tr>
                <td><?= h($tasks->id) ?></td>
                <td><?= h($tasks->type_id) ?></td>
                <td><?= h($tasks->state_id) ?></td>
                <td><?= h($tasks->title) ?></td>
                <td><?= h($tasks->created) ?></td>
                <td><?= h($tasks->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tasks', 'action' => 'view', $tasks->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tasks', 'action' => 'edit', $tasks->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tasks', 'action' => 'delete', $tasks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tasks->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
