@extends('clients.index')

@section('body')
@include('clients.layout.block.header')
<section id="popular-books" class="bookshelf">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center">
                    <h2 class="section-title">Popular Books</h2>
                </div>

                <ul class="tabs">
                    <a href="{{ route('clients.books.getBooksByGenre', 'all') }}" style="text-decoration-line: none;">
                        <li class="active tab" data-tab-target="all-genre">All Genre</li>
                    </a>
                    @if(!empty($list_TL))
                    @foreach($list_TL as $key => $theloai)
                    <a href="{{ route('clients.books.getBooksByGenre',$theloai->MaTL) }}"
                        style="text-decoration-line: none;">
                        <li class="tab">{{ $theloai->TenTL }}</li>
                    </a>
                    @endforeach
                    @endif
                </ul>
                <div class="tab-content">
                    <div id="all-genre" data-tab-content class="active">
                        <div class="row">
                            @if(!empty($all_book))
                            @foreach($all_book as $key => $book)
                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="{{asset('assets/images/'.$book->Anh)}}" alt="Books" class="product-item">
                                    <!-- Blade Template -->
                                    <button type="button" class="add-to-cart" data-product-id="{{ $book->MaSach }}"
                                        data-product-name="{{ $book->TenSach }}"
                                        data-product-price="{{ $book->GiaSach }}">
                                        Add to Cart
                                    </button>

                                    <figcaption>
                                        <h3>{{$book->TenSach}}</h3>
                                        <p>{{$book->TenTG}}</p>
                                        <div class="item-price">$ {{$book->GiaSach}}</div>
                                    </figcaption>
                                </figure>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.addEventListener('click', function(event) {
                        if (event.target.classList.contains('add-to-cart')) {
                            const productId = event.target.getAttribute('data-product-id');
                            const productName = event.target.getAttribute('data-product-name');

                            // Send Ajax request to add the product to the cart
                            axios.post('http://localhost:8000/book/add-to-cart', {
                                    product_id: productId,
                                    product_name: productName,
                                })
                                .then(function(response) {
                                    alert(response.data.message);
                                })
                                .catch(function(error) {
                                    console.error('Error adding to cart:', error);
                                });
                        }
                    });
                });
                </script>
                <div class="btn-wrap" style="text-align: right;">
                    <a href="{{route('clients.bookcase')}}" class="btn btn-outline-accent btn-accent-arrow">View All<i
                            class="icon icon-ns-arrow-right"></i></a>
                </div>
            </div>
            <!--inner-tabs-->
        </div>
    </div>
</section>

<section id="best-selling" class="leaf-pattern-overlay">
    <div class="corner-pattern-overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="row">

                    <div class="col-md-6">
                        <figure class="products-thumb">
                            <img src="{{asset('assets/images/single-image.jpg')}}" alt="book" class="single-image">
                        </figure>
                    </div>

                    <div class="col-md-6">
                        <div class="product-entry">
                            <h2 class="section-title divider">Best Selling Book</h2>

                            <div class="products-content">
                                <div class="author-name">By Timbur Hood</div>
                                <h3 class="item-title">Birds gonna be happy</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet,
                                    libero ipsum enim pharetra hac.</p>
                                <div class="item-price">$ 45.00</div>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-accent-arrow">shop it now <i
                                            class="icon icon-ns-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- / row -->

            </div>

        </div>
    </div>
</section>

<section id="subscribe">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="row">

                    <div class="col-md-6">

                        <div class="title-element">
                            <h2 class="section-title divider">Subscribe to our newsletter</h2>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="subscribe-content" data-aos="fade-up">
                            <p>Sed eu feugiat amet, libero ipsum enim pharetra hac dolor sit amet, consectetur. Elit
                                adipiscing enim pharetra hac.</p>
                            <form id="form">
                                <input type="text" name="email" placeholder="Enter your email addresss here">
                                <button class="btn-subscribe">
                                    <span>send</span>
                                    <i class="icon icon-send"></i>
                                </button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection