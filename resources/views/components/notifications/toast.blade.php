@if ($errors->any() || session('success')|| session('warning')|| session('status'))
    <div role="alert" tabindex="-1" x-data="{ isOpen: false }" x-cloak x-show="isOpen"
         x-init="$nextTick(() => { isOpen = !isOpen }); setTimeout(() => isOpen = !isOpen, 8000);"
         x-transition.duration.300ms>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                @if ($loop->first)
                    @php $style_css = 'top: 20px;'; @endphp
                @else
                    @php $style_css = 'top: '.(30 * $loop->iteration).'px;'; @endphp
                @endif
                <div role="alert" class="toast alert" style="@php echo $style_css; @endphp">
                    <i class="fi fi-ss-triangle-warning"></i>
                    {{ $error }}
                </div>
            @endforeach
        @endif
        @if (session('success'))
            <div role="alert" class="toast success top-5">
                <i class="fi fi-ss-check-circle"></i>
                {{ session('success') }}
            </div>
        @endif
        @if (session('warning'))
            <div role="alert" class="toast warning top-5">
                <i class="fi fi-ss-triangle-warning"></i>
                {{ session('warning') }}
            </div>
        @endif
        @if (session('status'))
            <div role="alert" class="toast info top-5">
                <i class="fi fi-ss-info"></i>
                {{ session('status') }}
            </div>
        @endif
    </div>
@endif
