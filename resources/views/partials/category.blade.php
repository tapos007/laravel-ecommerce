<!-- Sidebar Start-->
<aside class="col-lg-3">
    <!-- Category-->
    <div class="sidebar-nav">
        <h2 class="heading2"><span>Categories</span></h2>
        <ul class="metismenu" id="menu">
            @if(count($categories)>0)
                @foreach($categories as $category)
                    <li>
                        <a aria-expanded="false" href="{{route('shop.categories',[$category->id])}}">{{$category->name}}<span class="fa arrow fa-fw"></span></a>
                        @if(count($category->children)>0)
                            <ul>
                                @foreach($category->children as $subCategory)

                                    <li>
                                        <a href="{{route('shop.categories',[$category->id,$subCategory->id])}}">{{$subCategory->name}}</a>

                                    </li>
                                @endforeach

                            </ul>
                        @endif

                    </li>
                @endforeach
            @endif


        </ul>
    </div>

</aside>
<!-- Sidebar End-->