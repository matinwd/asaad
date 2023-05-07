<x-mail::message>
    {{-- Greeting --}}
    # Join To Finomate
    {{-- Intro Lines --}}
    Hello, dear {{ $guestName }}
    Your friend {{ $userName }} has invited you to join {{ config('app.name') }}


    {{-- Subcopy --}}
    <x-slot:subcopy>
        <x-mail::button :url="$url" color="success">
            Sign Up
        </x-mail::button>

        @lang(
            "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
            'into your web browser:',
            [
                'actionText' => 'Sign Up',
            ]
        ) <span class="break-all">
        **[SignUp]({{ $url }})**</span>
    </x-slot:subcopy>
</x-mail::message>
