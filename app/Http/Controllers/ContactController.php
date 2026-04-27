<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\CompanyInfo;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    // Display contact page
    public function index()
    {
        $companyInfo = CompanyInfo::where('is_active', true)->first();
        return view('contact', compact('companyInfo'));
    }

    public function send(Request $request)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan ke database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Kirim email notification
        try {
            Mail::send('emails.contact-notification', [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'messageContent' => $request->message,
            ], function ($mail) use ($request) {
                $mail->to('info@abegroup.co.id')
                     ->subject('Pesan Baru dari Hubungi Kami: ' . $request->subject)
                     ->replyTo($request->email);
            });
        } catch (\Exception $e) {
            // Log error but continue with success message
            \Log::error('Email sending failed: ' . $e->getMessage());
        }

        return redirect()->route('contact')->with('success', 'Pesan Anda berhasil dikirim! Tim kami akan segera menghubungi Anda.');
    }

    // Untuk admin lihat pesan
    public function adminIndex()
    {
        $messages = Contact::latest()->paginate(20);
        return view('admin.messages', compact('messages'));
    }

    public function delete($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();

        return back()->with('success', 'Pesan berhasil dihapus');
    }

    public function deleteAll()
    {
        Contact::truncate();
        return back()->with('success', 'Semua pesan berhasil dihapus');
    }
}