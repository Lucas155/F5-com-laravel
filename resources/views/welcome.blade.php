<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>F5</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    </head>
    <body>
    @extends('layouts.header')

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           

	<main>
		<section class="container banner">
			<div class="row">
				<div class="col-12 col-sm-5 center-text">
					<h1>A F5 nasceu para facilitar a venda e compra de 	eletrônicos</h1>
					<h2>Dê o seu lance!</h2>
				</div>
				<div class="col-12 col-sm-7">
					<img src="img/banner.png" alt="Ilustração de pessoas com eletrônicos" title="Dê o seu lance" class="img-fluid">
				</div>
			</div>
		</section>
		<section class="container">
			<div class="row">
				<div class="col-12 col-sm-4">
					<div class="card">
						<div class="time">
								<p><i class="far fa-clock"></i>Oferta acaba em <b>02h30m02s</b></p>
						</div>
						<div class="img">
							<div class="tag usado">Usado</div>
							<img src="img/134186808_1GG.png" class="img-fluid img-product" alt="Celular" title="Celular">
						</div>
						<div class="info">
							<h2>Smartphone Motorola Moto G7 Play</h2>
							<a href="#" class="btn">Dê seu lance</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4">
					<div class="card">
						<div class="time">
								<p><i class="far fa-clock"></i>Oferta acaba em <b>02h30m02s</b></p>
						</div>
						<div class="img">
							<div class="tag novo">Novo</div>
							<img src="img/134186808_1GG.png" class="img-fluid img-product" alt="Celular" title="Celular">
						</div>
						<div class="info">
							<h2>Smartphone Motorola Moto G7 Play</h2>
							<a href="#" class="btn">Dê seu lance</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4">
					<div class="card">
						<div class="time">
								<p><i class="far fa-clock"></i>Oferta acaba em <b>02h30m02s</b></p>
						</div>
						<div class="img">
							<div class="tag novo">Novo</div>
							<img src="img/134186808_1GG.png" class="img-fluid img-product" alt="Celular" title="Celular">
						</div>
						<div class="info">
							<h2>Smartphone Motorola Moto G7 Play</h2>
							<a href="#" class="btn">Dê seu lance</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4">
					<div class="card">
						<div class="time">
								<p><i class="far fa-clock"></i>Oferta acaba em <b>02h30m02s</b></p>
						</div>
						<div class="img">
							<div class="tag novo">Novo</div>
							<img src="img/134186808_1GG.png" class="img-fluid img-product" alt="Celular" title="Celular">
						</div>
						<div class="info">
							<h2>Smartphone Motorola Moto G7 Play</h2>
							<a href="#" class="btn">Dê seu lance</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4">
					<div class="card">
						<div class="time">
								<p><i class="far fa-clock"></i>Oferta acaba em <b>02h30m02s</b></p>
						</div>
						<div class="img">
							<div class="tag usado">Usado</div>
							<img src="img/134186808_1GG.png" class="img-fluid img-product" alt="Celular" title="Celular">
						</div>
						<div class="info">
							<h2>Smartphone Motorola Moto G7 Play</h2>
							<a href="#" class="btn">Dê seu lance</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-4">
					<div class="card">
						<div class="time">
								<p><i class="far fa-clock"></i>Oferta acaba em <b>02h30m02s</b></p>
						</div>
						<div class="img">
							<div class="tag novo">Novo</div>
							<img src="img/134186808_1GG.png" class="img-fluid img-product" alt="Celular" title="Celular">
						</div>
						<div class="info">
							<h2>Smartphone Motorola Moto G7 Play</h2>
							<a href="#" class="btn">Dê seu lance</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="container-fluid questions">
			<div class="container">
				<h3>Como funciona</h3>
				<div id="accordion">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Como compro um produto?
								</button>
							</h5>
						</div>
				
						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Como vendo um produto?
								</button>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Como dou uma lance?
								</button>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Um produto tem limite de preço?
								</button>
							</h5>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
    
    </body>
</html>