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
                                    <th>Type</th>
                                    <th>Quantity</th>
                                    <th>status</th>
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
                                        <td class=" first-row">{{ $card->type }}</td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{ $card->quantity }}" />
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-price first-row">Pending meunggu vendor mengirim barang</td>


                                    </tr>
                                @empty
                                <td class="total-price first-row">
                                            tidak ada card</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

@endsection
