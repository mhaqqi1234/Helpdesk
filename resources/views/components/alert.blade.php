@props(['type' => 'info'])

<div class="alert alert-{{ $type }} alert-dismissible fade show">
    {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>