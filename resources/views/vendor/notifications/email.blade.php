<x-mail::message>
{{-- Greeting --}}
@if (! empty($greeting))
# <span class="text-2xl font-semibold text-green-700">{{ $greeting }}</span>
@else
@if ($level === 'error')
# <span class="text-2xl font-semibold text-red-600">@lang('Whoops!')</span>
@else
# <span class="text-2xl font-semibold text-gray-800">@lang('Hello!')</span>
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
<p class="text-base text-gray-700 leading-relaxed">
    {{ $line }}
</p>
@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    $color = match ($level) {
        'success' => 'green',
        'error' => 'red',
        default => 'blue',
    };
?>
<x-mail::button :url="$actionUrl" color="{{ $color }}">
    <span class="text-lg font-medium">{{ $actionText }}</span>
</x-mail::button>
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
<p class="text-base text-gray-700 leading-relaxed mt-4">
    {{ $line }}
</p>
@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
<p class="mt-6 text-gray-800 font-semibold">{{ $salutation }}</p>
@else
<p class="mt-6 text-gray-800 font-semibold">@lang('Regards'),<br>{{ config('app.name') }}</p>
@endif

{{-- Subcopy --}}
@isset($actionText)
<x-slot:subcopy>
<p class="text-sm text-gray-600">
    @lang(
        "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
        'into your web browser:',
        [
            'actionText' => $actionText,
        ]
    )
</p>
<p class="break-all text-blue-600 underline mt-2">
    <a href="{{ $actionUrl }}">{{ $displayableActionUrl }}</a>
</p>
</x-slot:subcopy>
@endisset
</x-mail::message>