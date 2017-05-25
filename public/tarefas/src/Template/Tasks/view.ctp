<div class="tasks view col-lg-10 col-md-12">
    <h3>Task name: <?= h($task->title) ?></h3>
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
            <th>Id</th>
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
                <th>Username</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($task->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id], ['class'=>'btn btn-default btn-xs']) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id], ['class'=>'btn btn-primary btn-xs']) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete the user with the id of # {0}?', $users->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
