@props([
    'subtitle' => null,
])
<header>
    <h3>
        @if($subtitle)
            {{ $subtitle }}
        @endif
    </h3>
    <div class="right-block">
        <i class="fi fi-rs-issue-loupe"></i>
        <i class="fi fi-rs-envelope"></i>
        <i class="fi fi-rs-bell"></i>
        <i class="fi fi-rs-circle-user"></i>
    </div>
</header>
