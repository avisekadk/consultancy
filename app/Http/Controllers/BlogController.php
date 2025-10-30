<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create(){
        return view('admin.blogs.create');
    }

    public function store(Request $request){
        $validation = $request->validate([
            'title'=>'required|min:3|max:200',
            'short_description'=>'nullable',
            'description'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'featured_image_1'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'featured_image_2'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'views'=>'nullable|integer',
            'order'=>'required|integer',
            'status'=>'required',
            'slug'=>'required|unique:blogs,slug',
            'seo_title'=>'nullable',
            'seo_schema'=>'nullable',
            'meta_keywords'=>'nullable',
            'meta_description'=>'nullable',
        ]);
        
        if($request->hasFile('image')){
            $filepath = $request->file('image')->store('blog','public');
            $validation['image']=$filepath;
        }
        if($request->hasFile('featured_image_1')){
            $filepath = $request->file('featured_image_1')->store('blog','public');
            $validation['featured_image_1']=$filepath;
        }
        if($request->hasFile('featured_image_2')){
            $filepath = $request->file('featured_image_2')->store('blog','public');
            $validation['featured_image_2']=$filepath;
        }
        
        Blog::create($validation);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog successfully created.');
    }

    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.view', compact('blog'));
    }

    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog successfully deleted.');
    }

    public function edit(string $id)
    {
        $edit = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('edit'));
    }

    public function update(Request $request, string $id){
        $validation = $request->validate([
            'title'=>'required|min:3|max:200',
            'short_description'=>'nullable',
            'description'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'featured_image_1'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'featured_image_2'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'views'=>'nullable|integer',
            'order'=>'required|integer',
            'status'=>'required',
            'slug'=>'required|unique:blogs,slug,'.$id,
            'seo_title'=>'nullable',
            'seo_schema'=>'nullable',
            'meta_keywords'=>'nullable',
            'meta_description'=>'nullable',
        ]);
        
        $blog = Blog::findorFail($id);
        
        if($request->hasFile('image')){
            if($blog->image && Storage::disk('public')->exists($blog->image)){
                Storage::disk('public')->delete($blog->image);
            }
            $filepath = $request->file('image')->store('blog','public');
            $validation['image']=$filepath;
        }
        
        if($request->hasFile('featured_image_1')){
            if($blog->featured_image_1 && Storage::disk('public')->exists($blog->featured_image_1)){
                Storage::disk('public')->delete($blog->featured_image_1);
            }
            $filepath = $request->file('featured_image_1')->store('blog','public');
            $validation['featured_image_1']=$filepath;
        }
        
        if($request->hasFile('featured_image_2')){
            if($blog->featured_image_2 && Storage::disk('public')->exists($blog->featured_image_2)){
                Storage::disk('public')->delete($blog->featured_image_2);
            }
            $filepath = $request->file('featured_image_2')->store('blog','public');
            $validation['featured_image_2']=$filepath;
        }
        
        $blog->update($validation);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog successfully updated.');
    }
}