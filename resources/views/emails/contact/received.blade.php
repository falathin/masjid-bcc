@component('mail::message')
# Terima Kasih!

Halo {{ $contact->name ?? 'Saudara' }},

Terima kasih telah menghubungi Masjid Al-Ikhlas. Kami telah menerima pesan Anda dengan detail sebagai berikut:

- **Email:** {{ $contact->email }}
- **Judul:** {{ $contact->subject }}
- **Pesan:**  
  {{ $contact->message }}

Kami akan menghubungi Anda jika diperlukan.

Salam hormat,  
**Masjid Al-Ikhlas**
@endcomponent