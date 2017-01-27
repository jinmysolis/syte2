<?php namespace TeachMe\Http\Controllers;

use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

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
        
         public function datails($id)
	{
             $ticket =Ticket::findOrFail($id);
            return view('tickes.details',compact('ticket'));
	}
        
       

}
