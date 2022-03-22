<?php

namespace App\Http\Controllers;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //
    public function index(){
        $formation = Formation::all();
        return view('formation.index',[
            'formation' => $formation
        ]);
}
public function inscription(){
    $formation = Formation::all();
    return view('formation.inscription',[
        'formation' => $formation
    ]);  
}
public function create(){

    return view('formation.create');  
}
public function createEnregistre(Request $request){
    
     $insert = new Formation;
 
     $insert->titre = $request->titre;

     $insert->resume = $request->resume;

     $insert->description = $request->description;

     $insert->save();
}
}


//     /**
//      * Show the form for creating a new formation.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function creat()
//     {
//         $formation = Formation::all();
//          return view('create'); 

//     }


//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */

//     public function store(Request $request)
//     {
//         //

//     $validatedData = $request->validate([
//         'titre' => 'required|max:25',
//         'resume' => 'required',
//         'description' => 'required',

//     ]);
// }



//     $formation = formation::create($validatedData);

//     return redirect('/formation')->with('titre', 'resume','description');




//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */

//     public function show($id)   
//     {
//         //
//     }


//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }


//     /**
//      * Update the specified formation in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */

//     public function update(Request $request, $id)
//     {
//         //
//     }


//     /**
//      * Remove the specified formation from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }




