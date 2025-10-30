<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Branch;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Course;
use App\Models\Page;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $aboutPage = Page::where('slug', 'about-us')->where('status', 1)->first();
        $courses = Course::where('status', 1)->orderBy('order')->limit(6)->get();
        $services = Service::where('status', 1)->orderBy('order')->get();
        $countries = Country::where('status', 1)->orderBy('order')->get();
        $blogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->get();
        $teams = Team::where('status', 1)->orderBy('order')->get();
        $branches = Branch::where('status', 1)->orderBy('order')->get();

        return view('frontend.home', compact('aboutPage', 'courses', 'services', 'countries', 'blogs', 'teams', 'branches'));
    }

    public function about()
    {

        $page = Page::where('slug', 'about-us')->where('status', 1)->first();
        
        if (!$page) {
            $page = Page::where('status', 1)->first();
        }
        
        if (!$page) {
            abort(404, 'About page not found');
        }
        
        $teams = Team::where('status', 1)->orderBy('order')->get();
        
        return view('frontend.about', compact('page', 'teams'));
    }

    public function courses()
    {
        $courses = Course::where('status', 1)->orderBy('order')->get();
        
        return view('frontend.courses', compact('courses'));
    }

    public function courseDetail($slug)
    {
        $course = Course::where('slug', $slug)->where('status', 1)->firstOrFail();
        $relatedCourses = Course::where('status', 1)
            ->where('id', '!=', $course->id)
            ->orderBy('order')
            ->limit(3)
            ->get();
        
        return view('frontend.course-detail', compact('course', 'relatedCourses'));
    }

    public function services()
    {
        $services = Service::where('status', 1)->orderBy('order')->get();
        
        return view('frontend.services', compact('services'));
    }

    public function serviceDetail($slug)
    {
        $service = Service::where('slug', $slug)->where('status', 1)->firstOrFail();
        $relatedServices = Service::where('status', 1)
            ->where('id', '!=', $service->id)
            ->orderBy('order')
            ->limit(3)
            ->get();
        
        return view('frontend.service-detail', compact('service', 'relatedServices'));
    }

    public function countries()
    {
        $countries = Country::where('status', 1)->orderBy('order')->get();
        
        return view('frontend.countries', compact('countries'));
    }

    public function countryDetail($slug)
    {
        $country = Country::where('slug', $slug)->where('status', 1)->firstOrFail();
        $relatedCountries = Country::where('status', 1)
            ->where('id', '!=', $country->id)
            ->orderBy('order')
            ->limit(3)
            ->get();
        
        return view('frontend.country-detail', compact('country', 'relatedCountries'));
    }

    public function blogs()
    {
        $blogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->paginate(9);
        
        return view('frontend.blogs', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 1)->firstOrFail();
        
        $blog->increment('views');
        
        $recentBlogs = Blog::where('status', 1)
            ->where('id', '!=', $blog->id)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        
        return view('frontend.blog-detail', compact('blog', 'recentBlogs'));
    }

    public function branches()
    {
        $branches = Branch::where('status', 1)->orderBy('order')->get();
        
        return view('frontend.branches', compact('branches'));
    }

    public function contact()
    {
        $courses = Course::where('status', 1)->orderBy('order')->get();
        $branches = Branch::where('status', 1)->orderBy('order')->get();
        
        return view('frontend.contact', compact('courses', 'branches'));
    }

    public function contactStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'course' => 'required',
            'message' => 'required',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->where('status', 1)->firstOrFail();
        
        return view('frontend.page', compact('page'));
    }
}