@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	
	
        <div class="col-md-8 col-md-offset-1">
			@include('client.partials.error')
		 <a href=" {{Route('client.index') }} " class="btn btn-danger pull-right">Listado</a>
            <div class="panel panel-default">
			<br><br>
              <form action="{{Route('client.update',$client->ci) }}" method="POST" class="">
			  
			  {{csrf_field()}}
			  {{method_field('PUT')}}
			  
			    <div class="form-group">
				 <label for="ci">Cedula:</label>
				 <input type="text" name="ci" class="form-control" value="{{ $client->ci }}"/>
				</div>
				
			    <div class="form-group">
				 <label for="name">Nombre:</label>
				 <input type="text" name="name" class="form-control" value="{{ $client->name  }}"/>
				</div>
				
				 <div class="form-group">
				 <label for="address">Direccion:</label>
				 <input type="text" name="address" class="form-control" value="{{ $client->address }}"/>
				</div>
				
				 <div class="form-group">
				 <label for="phone">Telefono:</label>
				 <input type="text" name="phone" class="form-control" value="{{ $client->phone  }}"/>
				</div>
				
				 <div class="form-group col-lg-offset-5">
				 <input type="submit" class="btn btn-lg btn-success">
				</div>
				
			 </form>
	  
            </div>
        </div>
		<div class="col-sm-3">
		 	@include('client.partials.aside')
		</div>
    </div>
</div>
@endsection
