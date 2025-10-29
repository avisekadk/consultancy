<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CountryController extends Controller
{
    public function index(){
        $countries = Country::all();
        return view('admin.countries.index', compact('countries'));
    }

    public function create(){
        return view('admin.countries.create');
    }

    public function store(Request $request){
    $validation = $request->validate([
        'order'=>'required|integer',
        'status'=>'required',
        'title'=>'required|min:3|max:200',
        'slug'=>'required|unique:countries,slug',
        'short_description'=>'nullable',
        'description'=>'nullable',
        'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',  
        'image_1'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        'seo_title'=>'nullable',
        'seo_schema'=>'nullable',
        'meta_keywords'=>'nullable',
        'meta_description'=>'nullable',
    ]);
    
    if($request->hasFile('image')){
        $filepath = $request->file('image')->store('country','public');
        $validation['image']=$filepath;
    }
    if($request->hasFile('image_1')){
        $filepath = $request->file('image_1')->store('country','public');
        $validation['image_1']=$filepath;
    }

    Country::create($validation);
    return redirect()->route('admin.countries.index')->with('success', 'Country successfully created.');
}

    public function show(string $id)
    {
        $country = Country::findOrFail($id);
        return view('admin.countries.view', compact('country'));
    }

    public function destroy(string $id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        return redirect()->route('admin.countries.index')->with('success', 'Country successfully deleted.');
    }

    public function edit(string $id)
    {
        $edit = Country::findOrFail($id);
        return view('admin.countries.edit', compact('edit'));
    }

    public function update(Request $request, string $id){
    $validation = $request->validate([
        'order'=>'required|integer',
        'status'=>'required',
        'title'=>'required|min:3|max:200',
        'slug'=>'required|unique:countries,slug,'.$id,
        'short_description'=>'nullable',
        'description'=>'nullable',
        'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',  
        'image_1'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120', 
        'seo_title'=>'nullable',
        'seo_schema'=>'nullable',
        'meta_keywords'=>'nullable',
        'meta_description'=>'nullable',
    ]);
    
    $country = Country::findorFail($id);
    
    if($request->hasFile('image')){
        if($country->image && Storage::disk('public')->exists($country->image)){
            Storage::disk('public')->delete($country->image);
        }
        $filepath = $request->file('image')->store('country','public');
        $validation['image']=$filepath;
    }
    
    if($request->hasFile('image_1')){
        if($country->image_1 && Storage::disk('public')->exists($country->image_1)){
            Storage::disk('public')->delete($country->image_1);
        }
        $filepath = $request->file('image_1')->store('country','public');
        $validation['image_1']=$filepath;
    }
    
    $country->update($validation);
    return redirect()->route('admin.countries.index')->with('success', 'Country successfully updated.');
}
}