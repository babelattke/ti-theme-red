---
title: 'main::lang.local.menus.title'
permalink: '/:location?local/menus/:category?'
description: ''
layout: local
'[localMenu]':
    isGrouped: 1
    collapseCategoriesAfter: !!float 5
    menusPerPage: !!float 200
    showMenuImages: 1
    menuImageWidth: !!float 95
    menuImageHeight: !!float 80
    menuCategoryWidth: !!float 1240
    menuCategoryHeight: !!float 256
    defaultLocationParam: local
    localNotFoundPage: home
    hideMenuSearch: 1
    forceRedirect: 1
---
@partial('nav/local_tabs', ['activeTab' => 'menus'])

<div class="">
    <div class="bg-white border-bottom px-3 d-block d-lg-none">
        @partial('categories::mobile')
    </div>

    @partial('menu/default') 
</div>