@props([
    'formtitle' => null,
    'formsubtitle' => null
])
@if($formtitle)
    <div class="title-block">
        <h1>{{ __($formtitle) }}</h1>
        @if($formsubtitle)
            <p>{{ __($formsubtitle) }}</p>
        @endif
    </div>
@endif
