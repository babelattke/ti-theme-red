<div class="menu-items">
    @forelse ($menuItems as $menuItemObject)
        @partial('menu/item', ['menuItem' => $menuItemObject->model, 'menuItemObject' => $menuItemObject])
    @empty
        <p>@lang('igniter.local::default.text_empty')</p>
    @endforelse
</div>
