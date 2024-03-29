<?php include_once("header.php");?>

<section ng-controller="destaque-controller">

	<div class="container" id="destaque-produtos-container">
		
<!--
		<div id="destaque-produtos" class="carousel slide" data-ride="carousel">
			
		  <div class="carousel-inner">
			
			<div class="carousel-item active" ng-repeat="produto in produtos">
			  	<img src="./img/produtos/{{produto.foto_principal}}" class="d-block" alt="{{produto.nome_prod_longo}}"> 
			  
				<div class="col-sm-6 col-descricao">
					<h2>{{nome_prod_longo}}</h2>
					<div class="box-valor">
						<div class="text-noboleto text-arial-cinza">no boleto</div>
						<div class="text-por text-arial-cinza">por</div>
						<div class="text-reais text-roxo">R$</div>
						<div class="text-valor text-roxo">{{produto.preco}}</div>
						<div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
						<div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
						<div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>
					</div>
					<a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a> 
				</div>

			</div>			
			  
		  </div>
			
		  <a class="carousel-control-prev" href="#destaque-produtos" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
			
		  <a class="carousel-control-next" href="#destaque-produtos" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="false"></span>
			<span class="sr-only">Next</span>
		  </a>
			
		</div>
-->	

		<div id="destaque-produto">

			<div class="item row" ng-repeat="produto in produtos">

				<div class="col-sm-6 col-imagem">
					<a href="produto-{{produto.id_prod}}">
				  	<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}"> 
					</a>	
				</div>
				
				<div class="col-sm-6 col-descricao">
					<h2>{{produto.nome_prod_longo}}</h2>
					<div class="box-valor">
						<div class="text-noboleto text-arial-cinza">no boleto</div>
						<div class="text-por text-arial-cinza">por</div>
						<div class="text-reais text-roxo">R$</div>
						<!--<div class="texto-valor-total">-->
						<div class="text-valor text-roxo">{{produto.preco}}</div>
						<div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
						<!--</div>-->
						<div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
						<div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>
					</div>
					<a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a> 
				</div>

			</div>
			
		</div>

		<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
		<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>
				
	</div>

	<div id="promocoes" class="container">
	
		<div class="row">

			<div class="col-md-2">
				<div class="box-promocao box-1">
					<p>escolha por desconto</p>
				</div>
			</div>
			
			<div class="col-md-10">
			
				<div class="row-fluid d-flex"> 
					
					<div class="col-md-3">
						
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">40</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>		
					</div>
					
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">60</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>			
					</div>
					
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">80</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>			
					</div>
						
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">85</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>

				</div>
				
			</div>
	
<!--
			<div class="col-md-2 col-md-offset-1">
					<div class="box-promocao box-1">
						<p>escolha por desconto</p>
					</div>
				</div>
				<div class="col-md-2 box-promocao"> 
					<div class="text-ate">até</div>
					<div class="text-numero">40</div>
					<div class="text-porcento">%</div>
					<div class="text-off">off</div>
				</div>
				<div class="col-md-2 box-promocao"> 
					<div class="text-ate">até</div>
					<div class="text-numero">60</div>
					<div class="text-porcento">%</div>
					<div class="text-off">off</div>
				</div>
				<div class="col-md-2 box-promocao"> 
					<div class="text-ate">até</div>
					<div class="text-numero">80</div>
					<div class="text-porcento">%</div>
					<div class="text-off">off</div>
				</div>
				<div class="col-md-2 box-promocao"> 
					<div class="text-ate">até</div>
					<div class="text-numero">85</div>
					<div class="text-porcento">%</div>
					<div class="text-off">off</div>
				</div>	

		</div>
-->	
	</div>
	
	<div id="mais-buscados" class="container text-center">
	
		<div class="row title-default-roxo d-block">
			<h2>os mais buscados</h2>
			<hr>
		</div>
		
		<div class="row">
			<div class="col-md-3" ng-repeat="produto in buscados">
				<div class="box-produto-info">
					<a href="produto-{{produto.id_prod}}">
						<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class="produto-img">
						<h3>{{produto.nome_prod_longo}}</h3>
						<div class="estrelas" data-score="{{produto.media}}"></div>
						<div class="text-qtd-reviews text-arial-cinza">{{produto.total_reviews}}</div>
						<div class="text-valor text-roxo">R$ {{produto.total}}</div>
						<div class="text-parcelado text-arial-cinza">{{produto.parcelas}}x de R$ {{produto.parcela}} sem juros</div>
					</a>	
				</div>
			</div>
		</div>
		
	</div>
	
</section>

<?php include_once("footer.php");?>

<script>

angular.module("shop", []).controller("destaque-controller", function($scope, $http){
	
	$scope.produtos = [];

	var initCarousel = function(){
		
		$("#destaque-produtos").owlCarousel({
	 
	      	autoPlay: 5000,
	      	items : 1,
	      	singleItem: true,
	 
	  	});

	  	var owlDestaque = $("#destaque-produtos").data('owlCarousel');

	  	$('#btn-destaque-prev').on("click", function(){
	  		owlDestaque.prev();
	  	});

	  	$('#btn-destaque-next').on("click", function(){
	  		owlDestaque.next();
	  	});

	};
	
	$http({
  		method: 'GET',
  		url: 'produtos'
		}).then(function successCallback(response) {
    	// this callback will be called asynchronously
    	// when the response is available
		$scope_produtos = response.data;
		
		setTimeout(initCarousel, 1000);
		
  		}, function errorCallback(response) {
    	// called asynchronously if an error occurs
    	// or server returns response with an error status.
  		});
	
		
	var initEstrelas = function(){
		
		$('.estrelas').each(function(){
	  	
			$(this).raty({
		  		starHalf    : 'lib/raty/lib/images/star-half.png',   	// The name of the half star image.
				starOff     : 'lib/raty/lib/images/star-off.png',       // Name of the star image off.
				starOn      : 'lib/raty/lib/images/star-on.png',
				score		: parseFloat($(this).data("score"))
		  	});
	  	});
	};
	

	$http({
		method: 'GET',
		url: 'produtos-mais-buscados'
		}).then(function sucessCallback(response) {
			
			$scope.buscados = response.data;
		
		setTimeout(initEstrelas, 1000);
		
		}, function errorCallback(response) {
		
		});
	
	/*
	$scope.produtos.push({
		nome_prod_longo: "Smartphone Motorola Moto X Play Dual Chip Desbloqueado Android 5.1",
		foto_principal: "moto-x.png",
		preco: "1.259",
		centavos: "10",
		parcelas: "8",
		parcela: "174,88",
		total: "1.399,00"
	});

	$scope.produtos.push({
		nome_prod_longo: "IPhone 6",
		foto_principal: "iphone2.jpg",
		preco: "2.659",
		centavos: "10",
		parcelas: "8",
		parcela: "374,88",
		total: "3.399,00"
	});
	*/
});

</script>
	