<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactReceived;
use App\Mail\ContactAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Tampilkan form contact untuk guest
    public function create()
    {
        return view('contact');
    }

    // Simpan pesan dan kirim email konfirmasi ke guest
    public function store(Request $request)
    {
        $data = $request->validate([
            'email'   => 'required|email',
            'name'    => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($data);

        Mail::to($contact->email)->send(new ContactReceived($contact));

        return redirect()->back()->with('success', 'Pesan Anda telah dikirim. Terima kasih!');
    }

    public function index(Request $request)
    {
        $query = Contact::query();
    
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('email', 'LIKE', "%{$search}%")
                  ->orWhere('name', 'LIKE', "%{$search}%")
                  ->orWhere('subject', 'LIKE', "%{$search}%")
                  ->orWhere('message', 'LIKE', "%{$search}%");
            });
        }
    
        $contacts = $query->latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }    

    // Form untuk menjawab pesan dari guest
    public function answerForm(Contact $contact)
    {
        return view('admin.contacts.answer', compact('contact'));
    }

    // Kirim email jawaban ke guest dan hapus data setelah jawaban terkirim
    public function sendAnswer(Request $request, Contact $contact)
    {
        $data = $request->validate([
            'answer' => 'required|string',
        ]);

        // Kirim email jawaban ke guest
        Mail::to($contact->email)->send(new ContactAnswer($contact, $data['answer']));

        // Hapus data contact karena sudah dijawab
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Jawaban telah dikirim dan pesan telah dihapus.');
    }

    // Hapus pesan
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Pesan berhasil dihapus.');
    }
}