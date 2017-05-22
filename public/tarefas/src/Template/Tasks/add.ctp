<div class="modal-header">
    <h4 class="modal-title" id="addNewTaskModal">
        Create New Task
    </h4>
</div>

<?= $this->Form->create($task, ['controller' => 'Tasks'], ['id' => 'addModalForm', 'role' => 'form']) ?>
    <?= $this->Form->input('type_id', ['options' => $types]);?>
    <?= $this->Form->input('state_id', ['options' => $states]);?>
    <?= $this->Form->input('title');?>
    <?= $this->Form->input('users._ids', ['options' => $users]);?>
    <?= $this->Form->button(__('Submit'), ['']) ?>
<?= $this->Form->end() ?>     

