<ul>
    @foreach($blog_categories as $menuItem)
        <li class="ty-menu__item cm-menu-item-responsive  menu-level-">
            <div class="ty-menu__submenu-item-header">
                <a href="{{ route('frontend.blog.blogWithCate', [$menuItem->slug]) }}" class="ty-menu__item-link">{{$menuItem -> name}}</a>
            </div>
        </li>
    @endforeach
</ul>
