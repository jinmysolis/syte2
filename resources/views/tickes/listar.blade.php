@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <h1>
                    Solicitudes Populares
                    <a href="{{route('tickets.create')}}" class="btn btn-primary">
                        Nueva solicitud                    </a>
                </h1>

                <p class="label label-info news">
                    Hay  {{ $tickets->total()}} Solicitudes Recientes               </p>

                  		   
                
                  @foreach($tickets as $ticket)
                    @include('tickes.partials.items',compact('ticket'))
                  @endforeach
                <div class="text-center">
                    {!! $tickets->render()!!}
                </div>
            </div>

            <hr>

          

        </div>
    </div>
</div>

@endsection



<!--@include('partials.menu')-->