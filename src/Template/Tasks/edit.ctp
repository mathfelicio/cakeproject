<?= $this->Html->script('jquery.min'); ?>
<?= $this->Html->css('select2'); ?>
<?= $this->Html->script('select2'); ?>
   

<div class="tasks form col-md-12 columns content">
    <?= $this->Form->create($task, ['controller' => 'Tasks'], ['class' => 'form-horizontal']) ?>
    <fieldset>
        <legend><?= 'Edit Task' ?></legend>
        <?php
            echo $this->Form->input('type_id', ['options' => $types, 'class' => 'form-control', 'label' => ['text' => __('Type:'), 'class' => 'col-sm-2 control-label']]);
    
            echo $this->Form->input('state_id', ['options' => $states, 'class' => 'form-control', 'label' => ['text' => __('State:'), 'class' => 'col-sm-2 control-label']]);
    
            echo $this->Form->input('title',
                        ['class' => 'form-control',
                        'label' => ['text' => __('Title:'), 'class' => 'col-sm-2 control-label']]);
                         
            echo $this->Form->input('users._ids', ['options' => $users, 
                'label'=> ['text' => __('Users:'), 'class' => 'col-sm-2 control-label'],
                'type' => 'select', 'multiple' => 'multiple', 
                'class' => 'form-control js-states js-example-basic-multiple', 'id' => 'id_label_multiple']
                );
        ?>
    </fieldset>
    <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-danger'])?>
    
    <?= $this->Form->button(__('Submit'), ['class' =>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>


<script type="text/javascript">
  $('#id_label_multiple').select2();
</script>