<x-mail::layout>
    {{-- Header --}}
    <x-slot:header>
        <x-mail::header :url="config('app.url')">
            LOGO
        </x-mail::header>
    </x-slot:header>
    # <div class="header-mail">Merhaba!</div>
    Email adresinizi doğrulamak için lütfen aşağıdaki düğmeyi tıklayın.

    <x-mail::button :url="$url">
        Mail Adresimi Doğrula
    </x-mail::button>
    Email adresinizi doğrulamak için lütfen aşağıdaki düğmeyi tıklayın.
    Teşekkürler,<br>
    Ayşe TAŞ
    {{-- Footer --}}
    <x-slot:footer>
        <x-mail::footer>
            © {{ date('Y') }} Ayşe TAŞ.
        </x-mail::footer>
    </x-slot:footer>
</x-mail::layout>
