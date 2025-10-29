<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    public function create(){
        return view('admin.courses.create');
    }

    public function store(Request $request){
        $validation = $request->validate([
            'order'=>'required|integer',
            'status'=>'required',
            'title'=>'required|min:3|max:200',
            'slug'=>'required|unique:courses,slug',
            'short_description'=>'nullable',
            'description'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'seo_title'=>'nullable',
            'seo_schema'=>'nullable',
            'meta_keywords'=>'nullable',
            'meta_description'=>'nullable',
        ]);
        
        if($request->hasFile('image')){
            $filepath = $request->file('image')->store('course','public');
            $validation['image']=$filepath;
        }
        
        Course::create($validation);
        return redirect()->route('admin.courses.index')->with('success', 'Course successfully created.');
    }

    public function show(string $id)
    {
        $course = Course::findOrFail($id);
        return view('admin.courses.view', compact('course'));
    }

    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Course successfully deleted.');
    }

    public function edit(string $id)
    {
        $edit = Course::findOrFail($id);
        return view('admin.courses.edit', compact('edit'));
    }

    public function update(Request $request, string $id){
        $validation = $request->validate([
            'order'=>'required|integer',
            'status'=>'required',
            'title'=>'required|min:3|max:200',
            'slug'=>'required|unique:courses,slug,'.$id,
            'short_description'=>'nullable',
            'description'=>'nullable',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'seo_title'=>'nullable',
            'seo_schema'=>'nullable',
            'meta_keywords'=>'nullable',
            'meta_description'=>'nullable',
        ]);
        
        $course = Course::findorFail($id);
        
        if($request->hasFile('image')){
            if($course->image && Storage::disk('public')->exists($course->image)){
                Storage::disk('public')->delete($course->image);
            }
            $filepath = $request->file('image')->store('course','public');
            $validation['image']=$filepath;
        }
        
        $course->update($validation);
        return redirect()->route('admin.courses.index')->with('success', 'Course successfully updated.');
    }
}