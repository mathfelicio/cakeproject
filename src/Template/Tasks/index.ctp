<?= $this->Html->script('jquery.min') ?>
<?= $this->Html->script('jquery-ui.min') ?>
<?= $this->Html->css('loading') ?>
<?= $this->Html->script('loading') ?>

<div class="row">
<div class="tasks index col-md-12 columns content">

    <!-- Button trigger modal -->
    <?=
        $this->Html->link(
            __('Add New Task'),
            ['controller' => 'Tasks', 'action' => 'add'], 
            [
                'class' => 'btn btn-primary pull-right',
                'data-toggle' => 'modal',
                'data-target' => '#addNewTaskModal'
            ]
        );
    ?>

    <!-- Modal -->
    <div class="modal fade" id="addNewTaskModal" tabindex="-1" role="dialog" 
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div id="loader"></div>
            </div>
        </div>
    </div>

    <h3>Tasks</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('type_id') ?></th>
                <th><?= $this->Paginator->sort('state_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= $this->Number->format($task->id) ?></td>
                <td><?= $task->has('type') ? $this->Html->link($task->type->title, ['controller' => 'Types', 'action' => 'view', $task->type->id]) : '' ?></td>
                <td><?= $task->has('state') ? $this->Html->link($task->state->title, ['controller' => 'States', 'action' => 'view', $task->state->id]) : '' ?></td>
                <td><?= h($task->title) ?></td>
                <td><?= h($task->created) ?></td>
                <td><?= h($task->modified) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $task->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $task->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete the task with the id of # {0}?', $task->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
         {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>

