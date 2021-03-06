<div class="types view col-lg-10 col-md-9">
    <h3><?= h($type->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Title</th>
            <td><?= h($type->title) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($type->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($type->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($type->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Tasks']) ?></h4>
        <?php if (!empty($type->tasks)): ?>
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
            <?php foreach ($type->tasks as $tasks): ?>
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
