<ul class="social-icons list-inline">
    @foreach ($socialIcons = $this->theme->social ?? [] as $icon)
        <li>
            <a
                class="p-2 {{ array_get($icon, 'class') }}"
                target="_blank"
                title="{{ array_get($icon, 'title') }}"
                href="{{ array_get($icon, 'url') }}"
                style="color: {{ array_get($icon, 'color') }}">
            </a>
        </li>
    @endforeach
</ul>
