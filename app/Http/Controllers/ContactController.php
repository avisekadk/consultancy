<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact'));
    }

    public function create(){
        return view('admin.contact.create');
    }

    public function store(Request $request){
        $validation = $request->validate([
            'name'=>'required|min:3|max:100',
            'email'=>'required|email',
            'phone'=>'required',
            'city'=>'required',
            'course'=>'required',
            'message'=>'required',
        ]);
        Contact::create($validation);
        return redirect()->route('admin.contact.index')->with('success', 'Contact successfully created.');
    }

    public function show(string $id)
    {
        $inquiry = Contact::findOrFail($id);
        return view('admin.contact.view', compact('inquiry'));
    }

    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.contact.index')->with('success', 'Contact successfully deleted.');
    }

    public function edit(string $id)
    {
        $edit = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('edit'));
    }

    public function update(Request $request, string $id){
        $validation = $request->validate([
            'name'=>'required|min:3|max:100',
            'email'=>'required|email',
            'phone'=>'required',
            'city'=>'required',
            'course'=>'required',
            'message'=>'required',
        ]);
        $contact = Contact::findorFail($id);
        $contact->update($validation);
        return redirect()->route('admin.contact.index')->with('success', 'Contact successfully updated.');
    }
}