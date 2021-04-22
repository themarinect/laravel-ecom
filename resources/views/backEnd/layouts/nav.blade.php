<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Admin Dashboard</a>
    <ul>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Add New Category</a></li>
                <li><a href="{{route('category.index')}}">Category List</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Products</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Add New Products</a></li>
                <li><a href="{{route('product.index')}}">Product List</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Coupons</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">Add New Coupon</a></li>
                <li><a href="{{route('coupon.index')}}">Coupon List</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->
