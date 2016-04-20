@extends('templates.administrador')

@section('navegacion')
	<div class="row">
		<div id="navegacion" class="col s12">
			<a href="/administrador" class="breadcrumb left">Menú principal</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h5><b>Menú principal</b></h5>
		</div>
	</div>
@stop
@section('content')
<div class="row">
	<div class="col s12 m6 l6">
		<a href="/administrador/libros" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3 class="color-item"><b><i class="fa fa-users"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong class="color-item">Usuarios</strong>
						</h5>
						<h6 class="color-subitem">Módulo de usuarios</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/administrador/ventas" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i class="fa fa-cutlery" aria-hidden="true"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Platillos</strong>
						</h5>
						<h6>Módulo de platillos</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/administrador/usuarios" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i class="fa fa-cutlery"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Postres</strong>
						</h5>
						<h6>Módulo de postres</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/administrador/configuracion" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i class="fa fa-cutlery"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Bebidas</strong>
						</h5>
						<h6>Módulo de bebidas</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/" class="item" target="_blank">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i class="fa fa-cutlery"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Ofertas</strong>
						</h5>
						<h6>Módulo de ofertas</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
		<div class="col s12 m6 l6">
		<a href="/" class="item" target="_blank">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i class="fa fa-cutlery"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Paquetes</strong>
						</h5>
						<h6>Módulo de paquetes</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
</div>
<div class="row">
	<div class="col s12">
		<center>
			<p>Derechos reservados - 2016</p>
		</center>
	</div>
</div>
@stop