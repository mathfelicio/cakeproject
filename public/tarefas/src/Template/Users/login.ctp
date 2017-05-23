<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-5 text-center">
			<?= $this->Flash->render() ?>
			<?= $this->Form->create(__('login'), ['class' => 'loginForm text-center']); ?>
				<div class="input-group">
					<?= $this->Form->control('Usuário', ['id' => 'name', 'class' => 'form-control', 'type' => 'text']); ?>
					<?= $this->Form->control('Senha', ['id'=> 'paw', 'class' => 'form-control', 'type' => 'password']); ?>
					<?= $this->Form->button(__('Entrar'), ['id' => 'submit', 'class' => 'btn btn-primary btn-hover form-control', 'type' => 'submit']); ?>                
				</div>
			<?= $this->Form->end();?>
		</div>
	</div>
</div>

