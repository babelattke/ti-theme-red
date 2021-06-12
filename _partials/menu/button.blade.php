<button
    class="btn btn-cart{{ $menuItemObject->mealtimeIsNotAvailable ? ' disabled' : '' }} glow-button"
    @if (!$menuItemObject->mealtimeIsNotAvailable)
    @if ($menuItemObject->hasOptions)
    data-cart-control="load-item"
    data-menu-id="{{ $menuItem->menu_id }}"
    data-quantity="{{ $menuItem->minimum_qty }}"
    @else
    data-request="{{ $updateCartItemEventHandler }}"
    data-request-data="menuId: '{{ $menuItem->menu_id }}', quantity: '{{ $menuItem->minimum_qty }}'"
    data-replace-loading="fa fa-spinner fa-spin"
    @endif
    @else
    title="{{ implode("\r\n", $menuItemObject->mealtimeTitles) }}"
    @endif
>
@if ($menuItemObject->mealtimeIsNotAvailable)
<i class="fa fa-clock-o"></i>
@else
{!! $menuItemObject->menuPrice > 0 ? currency_format($menuItemObject->menuPrice) : lang('main::lang.text_free') !!}
@endif
</button>