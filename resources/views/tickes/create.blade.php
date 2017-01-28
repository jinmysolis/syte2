@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Nueva Solicitud</h1>
            
     @include('partials.error') 
     
     {!!Form::open(['route'=>'tickets.store','method'=>'POST'])!!}

    
          {!! Form::label('title', 'Título') !!}
            {!!
                Form::textarea('title', null, [
                    'rows'  => 2,
                    'class' => 'form-control',
                    'placeholder' => 'Describe brevemente de qué quieres que se trata el tutorial'
                ])
            !!}
      
 
    <div class="form-group">
    <center><button type="submit" class="btn btn-info btn-lg">Agregar Solicitud</button></center>
    </div>

   {!!Form::close()!!}
            
            
            
            
            
        </div>
    </div>
    
</div>


@endsection