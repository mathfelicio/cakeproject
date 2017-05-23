<?= $this->Html->css('loginPasswordValidator'); ?>
<?= $this->Html->script('jquery.min') ?>
<?= $this->Html->script('loginPasswordValidator'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<div class="search-box">
				<div class="caption">
					<h3>Login</h3>
				</div>
                    <?= $this->Flash->render() ?>
                    <?= $this->Form->create(__('Login'), ['class' => 'loginForm']); ?>
                        <div class="input-group">
                            <?= $this->Form->control('Usuário', ['id' => 'name', 'class' => 'form-control', 'type' => 'text']); ?>
                            <?= $this->Form->control('Senha', ['id'=> 'paw', 'class' => 'form-control', 'type' => 'password']); ?>
                            <?= $this->Form->button(__('Entrar'), ['id' => 'submit', 'class' => 'btn btn-primary btn-hover form-control', 'type' => 'submit']); ?>                
                        </div>
                    <?= $this->Form->end();?>
            </div>
		</div>
		<div class="col-md-4">
			<div class="aro-pswd_info">
				<div id="pswd_info">
					<h4>Lembre dos requerimentos de sua senha</h4>
					<ul>
						<li id="letter" class="invalid">No mínimo <strong>uma letra</strong></li>
						<li id="capital" class="invalid">No mínimo <strong>uma letra maiúscula</strong></li>
						<li id="number" class="invalid">No mínimo <strong>um número</strong></li>
						<li id="length" class="invalid">Possua no mínimo <strong>8 caracteres</strong></li>
						<li id="space" class="invalid">Que<strong> utilize [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

