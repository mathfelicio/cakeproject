<div class="col-sm-5" style="padding-bottom: 20px">
<div class="modal-body">
    <div class="modal-header">
        <h4 class="modal-title" id="addNewTaskModal">
            Create New User
        </h4>
    </div>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <?php
            echo $this->Form->input('username', ['class' => 'form-control',
                                                    'label' => ['text' => __('Username:'), 'class' => 'col-sm-2 control-label']
                                                ]
                                   );
    
            echo $this->Form->input('role', ['class' => 'form-control',
                                                'label' => ['text' => __('Role:'), 'class' => 'col-sm-2 control-label']
                                            ]
                                   );
    
            echo $this->Form->input('password', ['class' => 'form-control',
                                                    'label' => ['text' => __('Password:'), 'class' => 'col-sm-2 control-label']
                                                ]
                                   );
    
            echo $this->Form->input('tasks._ids', ['options' => $tasks, 
                        'label'=> ['text' => __('Tasks:'), 'class' => 'col-sm-2 control-label'],
                        'type' => 'select', 'multiple' => 'multiple', 
                        'class' => 'form-control js-states js-example-basic-multiple', 'id' => 'id_label_multiple']
                        );
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div>

<?= $this->Html->script('jquery.min'); ?>
<?= $this->Html->css('select2'); ?>
<?= $this->Html->script('select2'); ?>
<script>$(".modal-content nav").hide();</script>
<script type="text/javascript">
  $('#id_label_multiple').select2();
</script>