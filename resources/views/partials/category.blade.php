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
    <!--  Best Seller -->
    <div class="sidewidt">
        <h2 class="heading2"><span>Best Seller</span></h2>
        <ul class="bestseller">
            <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product"
                     title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
            </li>
            <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product"
                     title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
            </li>
            <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product"
                     title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
            </li>
        </ul>
    </div>
    <!-- Latest Product -->
    <div class="sidewidt">
        <h2 class="heading2"><span>Latest Products</span></h2>
        <ul class="bestseller">
            <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product"
                     title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
            </li>
            <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product"
                     title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
            </li>
            <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product"
                     title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
            </li>
        </ul>
    </div>
    <!--  Must have -->
    <div class="sidewidt">
        <h2 class="heading2"><span>Must have</span></h2>
        <div class="flexslider" id="mainslider">
            <ul class="slides">
                <li>
                    <img src="img/product1.jpg" alt=""/>
                </li>
                <li>
                    <img src="img/product2.jpg" alt=""/>
                </li>
            </ul>
        </div>
    </div>
</aside>
<!-- Sidebar End-->