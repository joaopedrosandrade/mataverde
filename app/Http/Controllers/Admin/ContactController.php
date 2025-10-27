<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        $unreadCount = Contact::where('is_read', false)->count();
        
        return view('admin.contacts.index', compact('contacts', 'unreadCount'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        
        // Marcar como lido
        if (!$contact->is_read) {
            $contact->update(['is_read' => true]);
        }
        
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Mensagem excluída com sucesso!');
    }
}
