<?php namespace TeachMe\Http\Controllers;

use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

use Illuminate\Auth\Guard;
use Illuminate\Support\Facades\Redirect;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use TeachMe\Entities\Ticket;


class TicketsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function latest()
	{
           $tickets = Ticket::orderBy('id','DESC')->paginate();
             return view('tickes.listar',compact('tickets'));
	}

	public function popular()
	{
            return view('tickes.popular');
	}
        
        
        public function open()
	{
            dd('open');
	}
        
        public function closed()
	{
            dd('closed');
	}
        
         public function datails($id, Guard $auth)
	{
             $ticket =Ticket::findOrFail($id);
             $user = $auth->user();
            return view('tickes.details',compact('ticket','user'));
	}
        
       public function create()
	{
		return view('tickes.create');
	}
        
        
        public function store(Request $request, Guard $auth)
	{
          $this->validate($request, [
            'title' => 'required|max:120',
            
              ]);
             $ticket = $auth->user()->tickets()->create([
                  'title'   =>$request->get('title'),
                  'status'  => 'open'
              ]);
              
              flash::success("Desea Crear Una Nueva Solicitud");
               return redirect()->back();
              
	}
    
        
}
