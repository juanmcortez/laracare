@if ($errors->any() || session('success')|| session('warning')|| session('status'))
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div role="alert" class="toast alert top-@php echo (5 * $loop->iteration); @endphp">
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
@endif
