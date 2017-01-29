<?php namespace TeachMe\Http\Controllers;

use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Auth\Guard;
use TeachMe\Entities\TicketCommet;
use TeachMe\Entities\Ticket;
use Illuminate\Support\Facades\Redirect;


class CommentsController extends Controller {

    public function submit($id,Request $request, Guard $auth)
    {
        $this->validate($request, [
            'comment' => 'required|max:250',
            'link' => 'url'
        ]);
        
       $comment= new TicketCommet($request->only(['comment','link']));
       $comment->user_id = $auth->id();
       
       $ticket= Ticket::findOrFail($id);
       $ticket-> comments()->save($comment);
       
       session()->flash('success', 'Tu comentario fue guardado exitosamente');
       return redirect()->back();
    }

}
