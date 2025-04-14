@component('mail::message')
# Jawaban dari Masjid Al-Ikhlas

Halo {{ $contact->name ?? 'Saudara' }},

Berikut adalah jawaban atas pertanyaan atau pesan Anda:

{{ $answer }}

Terima kasih telah menghubungi kami.

Salam hormat,  
**Masjid Al-Ikhlas | Buana Citra Ciwastra**
@endcomponent
