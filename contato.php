<div class="container">
	<h1>
		Entre em Contato
	</h1>

	<ul class="breadcrumb">
		<li>
			<a href="home">Página Inicial</a>
		</li>
		<li>
			Contato
		</li>
	</ul>
 
	<div class="row">
		<div class="col-md-9 col-sm-9 col-xs-12">
			<p>* Campos Obrigatórios</p>
			<form method="post" name="form1" novalidate>
				<div class="control-group">
					<label class="control-label" for="nome">
						* Nome:
					</label>
					<div class="controls">
						<input type="text" placeholder="Digite seu Nome" 
						class="form-control" required data-validation-required-message="Preencha o Nome">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="telefone">
						* Telefone:
					</label>
					<div class="controls">
						<input type="tel" placeholder="Digite seu Telefone" data-mask="(99) 9999-9999?9" 
						class="form-control" required data-validation-required-message="Preencha o Telefone">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="email">
						* E-mail:
					</label>
					<div class="controls">
						<input type="email" placeholder="Digite seu E-mail" required data-validation-email-message="Preencha com email válido"
						class="form-control" required data-validation-required-message="Preencha o E-mail">
					</div>
				</div>

				<button type="submit" class="btn btn-success">
					Enviar
				</button>
			</form>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<h2>Outros meios de contato:</h2>
			<p>
				Facebook: www.facebook.com/facebook<br>
				E-mail: email@gmail.com<br>
				Telefone: (0800) 011-1406
			</p>
		</div>
	</div>

</div>