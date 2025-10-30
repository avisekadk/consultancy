<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create(){
        return view('admin.services.create');
    }

    public function store(Request $request){
        $validation = $request->validate([
            'order'=>'required|integer',
            'status'=>'required',
            'title'=>'required|min:3|max:200',
            'slug'=>'required|unique:services,slug',
            'short_description'=>'nullable',
            'description'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'image_1'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'seo_title'=>'nullable',
            'seo_schema'=>'nullable',
            'meta_keywords'=>'nullable',
            'meta_description'=>'nullable',
        ]);
        
        if($request->hasFile('image')){
            $filepath = $request->file('image')->store('service','public');
            $validation['image']=$filepath;
        }
        if($request->hasFile('image_1')){
            $filepath = $request->file('image_1')->store('service','public');
            $validation['image_1']=$filepath;
        }
        
        Service::create($validation);
        return redirect()->route('admin.services.index')->with('success', 'Service successfully created.');
    }

    public function show(string $id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.view', compact('service'));
    }

    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service successfully deleted.');
    }

    public function edit(string $id)
    {
        $edit = Service::findOrFail($id);
        return view('admin.services.edit', compact('edit'));
    }

    public function update(Request $request, string $id){
        $validation = $request->validate([
            'order'=>'required|integer',
            'status'=>'required',
            'title'=>'required|min:3|max:200',
            'slug'=>'required|unique:services,slug,'.$id,
            'short_description'=>'nullable',
            'description'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'image_1'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'seo_title'=>'nullable',
            'seo_schema'=>'nullable',
            'meta_keywords'=>'nullable',
            'meta_description'=>'nullable',
        ]);
        
        $service = Service::findorFail($id);
        
        if($request->hasFile('image')){
            if($service->image && Storage::disk('public')->exists($service->image)){
                Storage::disk('public')->delete($service->image);
            }
            $filepath = $request->file('image')->store('service','public');
            $validation['image']=$filepath;
        }
        
        if($request->hasFile('image_1')){
            if($service->image_1 && Storage::disk('public')->exists($service->image_1)){
                Storage::disk('public')->delete($service->image_1);
            }
            $filepath = $request->file('image_1')->store('service','public');
            $validation['image_1']=$filepath;
        }
        
        $service->update($validation);
        return redirect()->route('admin.services.index')->with('success', 'Service successfully updated.');
    }
}