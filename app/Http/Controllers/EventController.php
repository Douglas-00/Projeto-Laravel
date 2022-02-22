<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class EventController extends Controller
{
    public function index(){

        $search = request('search');
       
        if($search){
            $events = Event::where([
                ['title','like','%' .$search. '%']
            ])->get();
        }else{
            $events = Event::All();
        }
        
        


        return view('welcome',['events' => $events,'search' => $search]);

    }
    public function create(){
        //Criar o retorno da view em uma pasta 
        return view('events.create');
    }
    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->image = $request->image;
        $event->itens = $request->itens;

       
    
        if($request->hasFile('image') && $request->file('image')->isValid()){
            
            //$requestImage = $request->file('image');
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            
            $requestImage->move(public_path('img/events'),$imageName);

            
            $event->image = $imageName;
            
        }
        
       
        $event->save();
 
        return redirect('/')->with('msg','Evento criado com Sucesso!');
    }

    public function show($id){
        $event = Event::findOrFail($id);
        
        

        return view('events.show',['event'=>$event]);
    }
}
