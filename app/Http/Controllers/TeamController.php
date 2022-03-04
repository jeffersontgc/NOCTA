<?php

namespace App\Http\Controllers;
use App\Http\Requests\TeamCreateRequest;
use App\Models\Team;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class TeamController extends Controller
{
 
    public function loginview()
    {
      return view('auth.login');
    }

    public function index()
    {
        $teams = Team::paginate();
        return view('team', compact('teams'));
    }

    public function WelcomeView()
    {
        
        return view('welcome');
    }
    
    public function viewExample()
    {       
        $products = Categoria::all();
        $categoriaid = Producto::all();
        return view('mexico', compact('products','categoriaid'));
    }


    public function viewCategory($id)
    {
        $category = Categoria::where('id', $id)->with('productos')->first();
        return view('detailsProducts', compact('category'));
    }


    public function createClub(TeamCreateRequest $request)
    {

        $teams = Team::create($request->all());
        $teams->save();
        return redirect()->back();
    }


    public function details(Request $request, $id)
    {
        $teams = Team::findOrFail($id);

        return view('details', compact('teams'));
    }

    public function updateTeam(Request $request, $id)
    {

        $teams = Team::findOrFail($id);
        $teams->nombre =  $request->nombre;
        $teams->estadio =  $request->estadio;
        $teams->fundacion =  $request->fundacion;
        $teams->jugadores =  $request->jugadores;
        
        $teams->save();
       return redirect()->back();
    }
    public function deleteTeam(Request $request, $id)
    {
        $teams=Team::find($id);
        $teams->delete($id);
        return redirect()->back();
    }


 
}


