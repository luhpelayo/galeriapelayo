@extends('store.templatePublic')

@section('content')

<div style="background-color: #ffffff">
	<div class="container" style="-webkit-box-shadow: 0px 0px 32px -2px rgba(0,0,0,0.08);
-moz-box-shadow: 0px 0px 32px -2px rgba(0,0,0,0.08);
box-shadow: 0px 0px 32px -2px rgba(0,0,0,0.08); background-color: #FFF">
	<div class="row">
		<div class="col-xs-12">
			<h3>Photo</h3>
			<div class="divider-md pull-left"></div>
		</div>
	</div>
	<br>
	<div class="row">
		<div id="col-container-noticias" class="col-xs-12">
			
			<div class="col-xs-12 col-sm-12">
				<div class="panel panel-default resizable-col-events">
				  	<div class="panel-body resizable-panel">
				
                        <br>
					    @if(isset($pho->path))
						
						<img href="{{route('indexphoto',$pho->id)}}" style="padding: 10px;" src="{{ asset($pho->path) }}" alt="" >
						@endif
						<br>
				    	<h3>{{ $pho->title }}</h3>
                        
						
						
						<br>
						<br>
						<a href="{{ route('gallery') }}">VER NOTICIAS</a>
						<br>
						<br>
				  	</div>
				</div>
				<a class="show-more-link col-xs-12 hide" data-active="false"><h6 >Mostrar más <i class="fa fa-angle-double-down" aria-hidden="true"></i></h6></a>
			</div>	
					
		</div>
	</div>
	<br><br>
	<br><br>
	<br><br>
	</div>
</div>

@stop