<?= $this->Html->script('jquery.min'); ?>

<div class="col-sm-5" style="padding-bottom: 20px">
<div class="modal-body">
  
    <div class="modal-header">
        <h4 class="modal-title" id="addNewTaskModal">
            Create New Task
        </h4>
    </div>

    <?= $this->Form->create() ?>

        <div class="form-group">
            <div class="col-sm-10">
                <?= 
                    $this->Form->input('type_id', 
                        ['options' => $types, 'class' => 'form-control', 'id' => 'typesInput',
                        'label' => ['text' => __('Type:'), 'class' => 'col-sm-2 control-label']]
                    );
                ?>
                
                <script>
                    var spanIcon = $(
                        "<a href='#' id='toggleTypeModalBtn'>" 
                            + "<span class='glyphicon glyphicon-plus pull-right'></span>" +
                        "</a>"
                    );
                    
                    $('#typesInput').after(spanIcon);
                </script>
            </div>
        </div>         
        
        <div class="form-group">
            <div class="col-sm-10">
                <?= 
                    $this->Form->input('state_id',
                            ['options' => $states, 'class' => 'form-control', 'id' => 'statesInput',
                            'label' => ['text' => __('State:'), 'class' => 'col-sm-2 control-label']]
                        );
                ?>    
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-10">
                <?= 
                    $this->Form->input('title',
                        ['class' => 'form-control', 'id' => 'titleInput',
                        'label' => ['text' => __('Title:'), 'class' => 'col-sm-2 control-label']]
                    );
                ?>    
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-10">
                <?= 
                    $this->Form->input('users._ids', ['options' => $users, 
                    'label'=> ['text' => __('Users:'), 'class' => 'col-sm-2 control-label'],
                    'type' => 'select', 'multiple' => 'multiple', 
                    'class' => 'form-control js-states js-example-basic-multiple', 'id' => 'id_label_multiple']
                    );
                ?>    
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>    
            </div>
        </div>
    <?= $this->Form->end() ?>   
    
     <script>
        $('#toggleTypeModalBtn').click(function(){
            var formData = {
                'type' : $('#typesInput').val(),
                'state': $('#statesInput').val(),
                'title': $('#titleInput').val(),
                'users': $('#id_label_multiple').val(),
            };

            console.log(formData);
        });
    </script>  
</div>
</div>

<?= $this->Html->css('select2'); ?>
<?= $this->Html->script('select2'); ?>
<script>$(".modal-content nav").hide();</script>
<script type="text/javascript">$('#id_label_multiple').select2();</script>

