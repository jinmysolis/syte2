  <div data-id="25" class="well well-sm request">
                    <h4 class="list-title">
                       {{$ticket->title}}
                        <span class="label label-info absolute"> {{ trans('tickets.status.'. $ticket->status) }}</span>

                    </h4>
      
        @if (Auth::check())
                    <p>
                         <a href="{{route('tickets.destroy',$ticket->id)}}" onclick="return confirm('Seguro desea eliminar')"class="btn btn-warning glyphicon glyphicon-trash"></a>

                        <a href="#" class="btn btn-hight btn-unvote hide">
                            <span class="glyphicon glyphicon-thumbs-down"></span> No votar
                        </a>

                        <a href="{{ route('tickets.datails',$ticket)}}">
                            <span class="votes-count">{{$ticket->voters()->count()}} votos</span>
                            - <span class="comments-count">{{$ticket->comments()->count()}} comentarios</span>.
                            <a href="{{route('tickets.destroy',$ticket->id)}}" onclick="return confirm('Seguro desea eliminar')"class="btn btn-warning glyphicon glyphicon-trash"></a>
                        </a>
                         </p>
         @endif
                    <p class="date-t"><span class="glyphicon glyphicon-time"></span>  {{$ticket->created_at->format('d/m/y h:ia')}}</p>
                    Hecho por {{$ticket->author->name}}
                     </p>
                </div> 