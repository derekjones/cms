<li class="{{ $item->isActive() ? 'current' : '' }}">
    <a href="{{ $item->url() }}">
        <i>@svg($item->icon())</i><span>{{ __($item->name()) }}</span>
        <updates-badge class="ml-1"></updates-badge>
    </a>
</li>
