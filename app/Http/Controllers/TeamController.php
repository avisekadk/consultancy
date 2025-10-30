<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }

    public function create(){
        return view('admin.teams.create');
    }

    public function store(Request $request){
        $validation = $request->validate([
            'order'=>'required|integer',
            'status'=>'required',
            'name'=>'required|min:3|max:200',
            'position'=>'required',
            'description'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'facebook'=>'nullable',
            'twitter'=>'nullable',
            'instagram'=>'nullable',
            'whatsapp'=>'nullable',
            'email'=>'nullable|email',
        ]);
        
        if($request->hasFile('image')){
            $filepath = $request->file('image')->store('team','public');
            $validation['image']=$filepath;
        }
        
        Team::create($validation);
        return redirect()->route('admin.teams.index')->with('success', 'Team member successfully created.');
    }

    public function show(string $id)
    {
        $team = Team::findOrFail($id);
        return view('admin.teams.view', compact('team'));
    }

    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->route('admin.teams.index')->with('success', 'Team member successfully deleted.');
    }

    public function edit(string $id)
    {
        $edit = Team::findOrFail($id);
        return view('admin.teams.edit', compact('edit'));
    }

    public function update(Request $request, string $id){
        $validation = $request->validate([
            'order'=>'required|integer',
            'status'=>'required',
            'name'=>'required|min:3|max:200',
            'position'=>'required',
            'description'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'facebook'=>'nullable',
            'twitter'=>'nullable',
            'instagram'=>'nullable',
            'whatsapp'=>'nullable',
            'email'=>'nullable|email',
        ]);
        
        $team = Team::findorFail($id);
        
        if($request->hasFile('image')){
            if($team->image && Storage::disk('public')->exists($team->image)){
                Storage::disk('public')->delete($team->image);
            }
            $filepath = $request->file('image')->store('team','public');
            $validation['image']=$filepath;
        }
        
        $team->update($validation);
        return redirect()->route('admin.teams.index')->with('success', 'Team member successfully updated.');
    }
}