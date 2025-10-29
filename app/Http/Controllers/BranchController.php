<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(){
        $branches = Branch::all();
        return view('admin.branches.index', compact('branches'));
    }

    public function create(){
        return view('admin.branches.create');
    }

    public function store(Request $request){
        $validation = $request->validate([
            'order'=>'required|integer',
            'status'=>'required',
            'title'=>'required|min:3|max:200',
            'short_description'=>'nullable',
            'description'=>'nullable',
            'email'=>'required|email',
            'phone'=>'required',
            'location'=>'nullable',
            'map'=>'nullable',
            'seo_title'=>'nullable',
            'seo_schema'=>'nullable',
            'meta_keywords'=>'nullable',
            'meta_description'=>'nullable',
        ]);
        Branch::create($validation);
        return redirect()->route('admin.branches.index')->with('success', 'Branch successfully created.');
    }

    public function show(string $id)
    {
        $branch = Branch::findOrFail($id);
        return view('admin.branches.view', compact('branch'));
    }

    public function destroy(string $id)
    {
        $branch = Branch::findOrFail($id);
        $branch->delete();
        return redirect()->route('admin.branches.index')->with('success', 'Branch successfully deleted.');
    }

    public function edit(string $id)
    {
        $edit = Branch::findOrFail($id);
        return view('admin.branches.edit', compact('edit'));
    }

    public function update(Request $request, string $id){
        $validation = $request->validate([
            'order'=>'required|integer',
            'status'=>'required',
            'title'=>'required|min:3|max:200',
            'short_description'=>'nullable',
            'description'=>'nullable',
            'email'=>'required|email',
            'phone'=>'required',
            'location'=>'nullable',
            'map'=>'nullable',
            'seo_title'=>'nullable',
            'seo_schema'=>'nullable',
            'meta_keywords'=>'nullable',
            'meta_description'=>'nullable',
        ]);
        $branch = Branch::findorFail($id);
        $branch->update($validation);
        return redirect()->route('admin.branches.index')->with('success', 'Branch successfully updated.');
    }
}