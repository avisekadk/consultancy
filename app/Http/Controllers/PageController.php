<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index(){
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create(){
        return view('admin.pages.create');
    }

    public function store(Request $request){
        $validation = $request->validate([
            'order'=>'required|integer',
            'status'=>'required',
            'title'=>'required|min:3|max:200',
            'short_description'=>'nullable',
            'description'=>'nullable',
            'image_1'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'image_2'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'banner_image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'slug'=>'required|unique:pages,slug',
            'seo_title'=>'nullable',
            'seo_schema'=>'nullable',
            'meta_keywords'=>'nullable',
            'meta_description'=>'nullable',
        ]);
        
        if($request->hasFile('image_1')){
            $filepath = $request->file('image_1')->store('page','public');
            $validation['image_1']=$filepath;
        }
        if($request->hasFile('image_2')){
            $filepath = $request->file('image_2')->store('page','public');
            $validation['image_2']=$filepath;
        }
        if($request->hasFile('banner_image')){
            $filepath = $request->file('banner_image')->store('page','public');
            $validation['banner_image']=$filepath;
        }
        
        Page::create($validation);
        return redirect()->route('admin.pages.index')->with('success', 'Page successfully created.');
    }

    public function show(string $id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.view', compact('page'));
    }

    public function destroy(string $id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page successfully deleted.');
    }

    public function edit(string $id)
    {
        $edit = Page::findOrFail($id);
        return view('admin.pages.edit', compact('edit'));
    }

    public function update(Request $request, string $id){
        $validation = $request->validate([
            'order'=>'required|integer',
            'status'=>'required',
            'title'=>'required|min:3|max:200',
            'short_description'=>'nullable',
            'description'=>'nullable',
            'image_1'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'image_2'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'banner_image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'slug'=>'required|unique:pages,slug,'.$id,
            'seo_title'=>'nullable',
            'seo_schema'=>'nullable',
            'meta_keywords'=>'nullable',
            'meta_description'=>'nullable',
        ]);
        
        $page = Page::findorFail($id);
        
        if($request->hasFile('image_1')){
            if($page->image_1 && Storage::disk('public')->exists($page->image_1)){
                Storage::disk('public')->delete($page->image_1);
            }
            $filepath = $request->file('image_1')->store('page','public');
            $validation['image_1']=$filepath;
        }
        
        if($request->hasFile('image_2')){
            if($page->image_2 && Storage::disk('public')->exists($page->image_2)){
                Storage::disk('public')->delete($page->image_2);
            }
            $filepath = $request->file('image_2')->store('page','public');
            $validation['image_2']=$filepath;
        }
        
        if($request->hasFile('banner_image')){
            if($page->banner_image && Storage::disk('public')->exists($page->banner_image)){
                Storage::disk('public')->delete($page->banner_image);
            }
            $filepath = $request->file('banner_image')->store('page','public');
            $validation['banner_image']=$filepath;
        }
        
        $page->update($validation);
        return redirect()->route('admin.pages.index')->with('success', 'Page successfully updated.');
    }
}