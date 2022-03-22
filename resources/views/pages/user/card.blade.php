@extends('layouts.home')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cards as $card)
                                    <tr>
                                        <td class="cart-pic first-row">
                                            <img src="{{ url('users/img/cart-page/product-1.jpg') }}" alt="" />
                                        </td>
                                        <td class="cart-title first-row">
                                            <h5>{{ $card->name }}</h5>
                                        </td>
                                        <td class="p-price first-row">{{ $card->type }}</td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{ $card->quantity }}" />
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @empty
                                <td class="total-price first-row">
                                            tidak ada card</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <button href="#" id="proceeed" class="proceed-btn">PROCEED TO CHECK OUT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <script>
document.addEventListener('DOMContentLoaded',(c) => {

    $('button#proceeed').on('click',() => {
        let count = localStorage.getItem('count') ? parseInt(localStorage.getItem('count')): 0;

             count += 1;
        console.log(count);
        window.localStorage.setItem('count',count);

    });
});

    </script>
@endsection
