<div id="menu{{ $menuItem->menu_id }}" class="menu-item panel">
    <div class="d-flex flex-row">
        @if ($showMenuImages == 1 AND $menuItemObject->hasThumb)
        <div class="col-3 p-0 mr-3 menu-item-image align-self-center"
            style="
                    background: url('{{ $menuItem->hasMedia('thumb') ? 
                        $menuItem->getThumb()
                        : 
                        uploads_url($this->theme->no_image_category)
                    }}') no-repeat center center;                    
                    background-size: cover;
                    width: {{$menuImageWidth}}px;
                    height: {{$menuImageHeight}}px;
            ">
            @if ($menuItemObject->specialIsActive)
                <div class="ribbon down">
                    <div class="content">
                        <i  class="fa fa-star"
                            title="{!! sprintf(lang('igniter.local::default.text_end_elapsed'), $menuItemObject->specialDaysRemaining) !!}">
                        </i>
                    </div>
                </div>
            @endif
        </div>
        @endif

        <div class="menu-content flex-grow-1 ">
            <h6 class="menu-name">{{ $menuItem->menu_name }}</h6>
            <p class="menu-desc text-muted mb-0">
                {!! nl2br($menuItem->menu_description) !!}
            </p>
            <div class="d-flex flex-wrap pull-right allergens">
                @partial('menu/allergens', ['menuItem' => $menuItem, 'menuItemObject' => $menuItemObject])
            </div>
        </div>
        <div class="menu-detail d-flex justify-content-end col-2 p-0">   

            @isset ($updateCartItemEventHandler)
                <div class="menu-button mr-3">
                    @partial('menu/button', ['menuItem' => $menuItem, 'menuItemObject' => $menuItemObject ])
                </div>
            @endisset
        </div>
    </div>
    
</div>
