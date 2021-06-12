---
title: 'main::lang.cart.title'
layout: default
permalink: /cart
'[localBox]': null
'[cartBox]':
    showCartItemThumb: 1
    cartItemThumbWidth: !!float 720
    cartItemThumbHeight: !!float 300
    checkStockCheckout: 1
    pageIsCheckout: 0
    pageIsCart: 1
    hideZeroOptionPrices: 0
    checkoutPage: checkout/checkout
    localBoxAlias: localBox
---
<div class="container">
    <div class="row py-4">
        <div class="col col-lg-6 m-auto">
            <div class="cart-buttons">
                <a
                    class="btn btn-link btn-block btn-md"
                    href="{{ restaurant_url('local/menus') }}"
                >@lang('igniter.cart::default.text_add_more_items')</a>
            </div>

            @partial('cartBox::container')
        </div>
    </div>
</div>