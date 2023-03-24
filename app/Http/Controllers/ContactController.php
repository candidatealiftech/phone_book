<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\Emailbook;
use App\Models\Phonebook;

class ContactController extends Controller
{
    public function private_page (){
        return view ('private.private-page');
    }

    public function logout (){
        Auth::logout();
        return redirect ('/');
    }

    public function addcontact (){
        return view ('private.add-contact');
    }

    public function savecontact (Request $request, $user){
        $savecontact = Contact::create([
            'name' => $request['name'],
            'surname' => $request['surname'],
            'lastname' => $request['lastname'],
            'date' => $request['date'],
            'user_id' => $user
        ]);

        if ($savecontact == true){
            return redirect ('private-page');
        } else {
            return redirect()->back();
        }
    }

    public function viewcontacts ($user){
        $contact = Contact::where('user_id', $user)->where('user_id', auth()->user()->id)->get();
        return view ('private.view-contacts', compact ('contact'));
    }

    public function delete_contact ($id) {
        $contact = Contact::where('id', $id)->delete();
        $emailbook = Emailbook::where('id', $id)->delete();
        $phonebook = Phonebook::where('id', $id)->delete();

        return redirect ('private-page');
    }

    public function update_contact ($id){
        $update_contact = Contact::find ($id);
        return view ('private.update-contact', compact ('update_contact')); 
    }

    public function update_save_contact (Request $request, $id){
        $edit = Contact::findOrFail($id);
        $edit->name = $request->input('name');
        $edit->surname = $request->input('surname');
        $edit->lastname = $request->input('lastname');
        $edit->save();
        return redirect('private-page');
    }

    public function update_phone ($id){
        $update_phone = Phonebook::find ($id);
        return view ('private.update-phone', compact ('update_phone')); 
    }

    public function update_save_phone (Request $request, $id){
        $edit = Phonebook::findOrFail($id);
        $edit->phone_number = $request->input('phone_number');
        $edit->save();
        return redirect('private-page');
    }

    public function update_email ($id){
        $update_email = Emailbook::find ($id);
        return view ('private.update-email', compact ('update_email')); 
    }

    public function update_save_email (Request $request, $id){
        $edit = Emailbook::findOrFail($id);
        $edit->email_address = $request->input('email_address');
        $edit->save();
        return redirect('private-page');
    }

    public function add_phone ($id){
        $contact = Contact::find($id);
        $phone_result = Phonebook::where('contact_id', $id)->where('contact_id', $id)->get();
        return view ('private.add-phone', compact('contact', 'phone_result'));
    }

    public function phone_save (Request $request, $id) {
        $phone = Phonebook::create([
            'phone_number' => $request['phone_number'],
            'contact_id' => $id
        ]);
        return redirect()->back();
    }

    public function delete_phone ($id){
        $delete_phone = Phonebook::where('id', $id)->delete();
        return redirect()->back();
    }

    public function add_email ($id){
        $contact = Contact::find($id);
        $email_result = Emailbook::where('contact_id', $id)->where('contact_id', $id)->get();
        return view ('private.add-email', compact('contact', 'email_result'));
    }

    public function email_save (Request $request, $id) {
        $email = Emailbook::create([
            'email_address' => $request['email_address'],
            'contact_id' => $id
        ]);
        return redirect()->back();
    }

    public function delete_email ($id){
        $delete_email = Emailbook::where('id', $id)->delete();
        return redirect()->back();
    }

    public function search (Request $request){
        $search = $request->search;
        $search_name = Contact::where ('name', 'LIKE', '%' . $search . '%')->where('user_id', auth()->user()->id)->get();
        $search_email = Emailbook::where ('email_address', 'LIKE', '%' . $search . '%')->where('contact_id', auth()->user()->id)->get();
        $search_phone = Phonebook::where ('phone_number', 'LIKE', '%' . $search . '%')->where('contact_id', auth()->user()->id)->get();
        return view ('private.search', compact ('search_name', 'search_email', 'search_phone'));
    }
}
