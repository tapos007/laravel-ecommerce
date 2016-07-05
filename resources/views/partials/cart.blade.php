<ul class="nav topcart pull-left">

    <li class="dropdown hover carticon "><a href="#" class="dropdown-toggle"> Shopping Cart <span
                    class="label label-orange font14">{{ Cart::count()}} item(s)</span> - ${{Cart::subtotal()}} <b class="caret"></b></a>
        @if(count(Cart::content())==0)

        @else
            <ul class="dropdown-menu topcartopen ">

                <li>
                    <table>
                        <tbody>
                        @foreach(Cart::content() as $row)
                            <tr>
                                <td class="image"><a href="product.html"><img width="50" height="50"
                                                                              src="{{asset('images/thurmb_image/'.$row->id.".jpg")}}" alt="product"
                                                                              title="{{$row->name}}"></a></td>
                                <td class="name"><a href="product.html">{{$row->name}}</a></td>
                                <td class="quantity">x&nbsp;{{$row->qty}}</td>
                                <td class="total">${{number_format($row->price,2)}}</td>
                                <td class="remove"><i class="icon-remove"></i></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td class="textright"><b>Sub-Total:</b></td>
                            <td class="textright">${{Cart::subtotal()}}</td>
                        </tr>
                        <tr>
                            <td class="textright"><b>VAT (15%):</b></td>
                            <td class="textright">${{(preg_replace('/[,]/', '', Cart::subtotal())) * 0.15}}</td>
                        </tr>
                        <tr>
                            <td class="textright"><b>Total:</b></td>
                            <td class="textright">${{(preg_replace('/[,]/', '', Cart::subtotal())) * 0.15 + (preg_replace('/[,]/', '', Cart::subtotal()))}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="well pull-right buttonwrap"><a class="btn btn-orange" href="#">View Cart</a> <a
                                class="btn btn-orange" href="#">Checkout</a></div>
                </li>
            </ul>
        @endif
    </li>
</ul>