<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function rechercheSalle(Request $request)
    {
        //Methode de recherche multi-critere
/*
         $validatedData = $request->validate([
        'numero' => 'nullable',
        'nbr_places' => 'nullable',
        'type' => 'nullable',
    ]);*/

$nb =30;

    if ($request->numero == null) {
        # code...
            if ($request->get('nbr_places') == "plus de 30") {

             $salles = \DB::table('salles')->where(['nbr_places','>',$nb],['type_salle',$request->get('type')])->get();
              return view('page3',['salles' => $salles]);

            }elseif ($request->get('nbr_places') == "moins de 30") {
                # code...
                $salles = \DB::table('salles')->where(['nbr_places','<',$nb],['type_salle',$request->get('type')])->get();
                 return view('page3',['salles' => $salles]);
            }
        }else{
                $salles = \DB::table('salles')->where('numero',$request->get('numero'))->get();

             return view('page3',['salles' => $salles]);

        }

      //   return view('page3',['salles' => $salles]);
    }

/*        $salles = \DB::table('salles')->where('numero',$request->get('numero'))->get();

         return view('page3',['salles' => $salles]);*/


    public function index(Request $request)
    {
        //
        $num = $request->input('nbr_places');
        $type =$request->input('type'); 

      //  if ($request->input('nbr_places') =="plus de 30") {
            # code...
          //  $place = 30;
       //   $salles = \DB::select('select *from salles where nbr_places > 30 or type_salle =TP');
          $salles = \DB::table('salles')->where('nbr_places', '>',$num )->orWhere('type_salle', '=',$type)->get();
      return view('page3',['salles' => $salles]);
       // }
       // else{

         //    $salles = \DB::select('select * from salles where nbr_places >30 or type_salle = '.$request->input('type'));
     // return view('page3',['salles' => $salles]);
      //  }
 

        }

/*        if ($request->get('nbr_places') == "plus de 30") {
               $salles = \DB::table('salles')->where(['nbr_places','>',30],['type_salle',$request->get('type')])->get();
               var_dump($salles);
            return view('page3',['salles' => $salles]);

            # code...
        } else {*/
            # code...
/*            $salles = \DB::table('salles')->where('nbr_places','<',30)->get();
            return view('page3',['salles' => $salles]);*/
       // }
        



//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
