<x-mail::layout>
    {{-- Header --}}
    <x-slot:header>
        <x-mail::header :url="config('app.url')">
            LOGO
        </x-mail::header>
    </x-slot:header>

    # <div class="header-mail">Merhaba!</div>

    Bu maili Hesabınız için bir şifre sıfırlama isteği yaptığınız için alıyorsunuz.

    <x-mail::button :url="$url">>
        Şifremi Yenile
    </x-mail::button>

    Şifre Yenileme Talebinde Bulunmadıysanız işlem yapmanız gerek yoktur.

    Teşekkürler,<br>
      Ayşe TAŞ
    <x-slot:subcopy>
        <x-mail::subcopy>
            Şifremi Yenile butonuna tıklamada sorun yaşıyorsanız aşağıdaki URL'yi kopyalayıp web tarayıcınıza yapıştırın:
            [{{ $url }}]({{ $url }})
        </x-mail::subcopy>
    </x-slot:subcopy>

    {{-- Footer --}}
    <x-slot:footer>
        <x-mail::footer>
            © {{ date('Y') }} Ayşe TAŞ.
        </x-mail::footer>
    </x-slot:footer>
</x-mail::layout>
