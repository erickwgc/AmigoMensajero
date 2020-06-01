@extends("../layout/plantilla")
@section("cabecera")
    @include("../boletin/menu")
    <h2 style="color: white;">ESTA ES LA VISTA DE CREAR BOLETIN </h2> 
@endsection
<!--
@foreach($cartas as $carta)
    @foreach($carta as $detalles)
        
    @endforeach
@endforeach
-->



@section("contenido")
<!----->

@foreach($cartas as $carta)
    @foreach($carta as $detalles)
        <h1>{{$detalles->contenido}}</h1>        
    @endforeach
@endforeach










<body data-spy="scroll" data-offset="11" data-target="#myScrollspy">
<div class="container">
    <h1>Bootstrap Scrollspy</h1>
    <p class="lead"><i>Scroll this page and see how the nav items are highlighted automatically based on the scroll position.</i></p>
    

    <div class="row">
    
        <div class="col-sm-3" id="myScrollspy">
            <div class="list-group">
                <a class="list-group-item list-group-item-action active" href="#section1">Section One</a>
                <a class="list-group-item list-group-item-action" href="#section2">Section Two</a>
                <a class="list-group-item list-group-item-action" href="#section3">Section Three</a>
                <a class="list-group-item list-group-item-action" href="#section4">Section Four</a>
                <a class="list-group-item list-group-item-action" href="#section5">Section Five</a>
        </div>
        

    </div>
        <div class="col-sm-4"  style="width: 10px" data-spy="scroll" data-target="#list-example" data-offset="0" class="myScrollspy" >
          
			<div id="section1">
				<h2>Section One</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,</p>
            </div>
	
    		<hr>
			
            <div id="section2">
				<h2>Section Two</h2>
				<p>Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus</p>
            </div>
			
            <hr>
			<div id="section3">
				<h2>Section Three</h2>
                 <p>Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus</p>  
      
            </div>
			<hr>
			
            <div id="section4">
				<h2>Section Four</h2>
                <p>Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus</p>
           </div>
		
        	<hr>
		
        	<div id="section5">
				<h2>Section Five</h2>
                <p>Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus</p>
        
           </div>

		</div>
    </div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection

