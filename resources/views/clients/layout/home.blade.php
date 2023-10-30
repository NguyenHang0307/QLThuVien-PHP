@extends('clients.index')

@section('body')
<section id="popular-books" class="bookshelf">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center">
                    <h2 class="section-title">Popular Books</h2>
                </div>

                <ul class="tabs">
                    <li data-tab-target="#all-genre" class="active tab">All Genre</li>
                    <li data-tab-target="#business" class="tab">Business</li>
                    <li data-tab-target="#technology" class="tab">Technology</li>
                    <li data-tab-target="#romantic" class="tab">Romantic</li>
                    <li data-tab-target="#adventure" class="tab">Adventure</li>
                    <li data-tab-target="#fictional" class="tab">Fictional</li>
                </ul>

                <div class="tab-content">
                    <div id="all-genre" data-tab-content class="active">
                        <div class="row">

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item1.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Portrait photography</h3>
                                        <p>Adam Silber</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item2.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Once upon a time</h3>
                                        <p>Klien Marry</p>
                                        <div class="item-price">$ 35.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item3.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Tips of simple lifestyle</h3>
                                        <p>Bratt Smith</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item4.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Just felt from outside</h3>
                                        <p>Nicole Wilson</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item5.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Peaceful Enlightment</h3>
                                        <p>Marmik Lama</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item6.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Great travel at desert</h3>
                                        <p>Sanchit Howdy</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item7.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Life among the pirates</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item8.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Simple way of piece life</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                        </div>

                    </div>
                    <div id="business" data-tab-content>
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item2.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Peaceful Enlightment</h3>
                                        <p>Marmik Lama</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item4.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Great travel at desert</h3>
                                        <p>Sanchit Howdy</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item6.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Life among the pirates</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item8.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Simple way of piece life</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                        </div>
                    </div>

                    <div id="technology" data-tab-content>
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item1.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Peaceful Enlightment</h3>
                                        <p>Marmik Lama</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item3.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Great travel at desert</h3>
                                        <p>Sanchit Howdy</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item5.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Life among the pirates</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item7.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Simple way of piece life</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div id="romantic" data-tab-content>
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item1.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Peaceful Enlightment</h3>
                                        <p>Marmik Lama</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item3.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Great travel at desert</h3>
                                        <p>Sanchit Howdy</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item5.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Life among the pirates</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item7.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Simple way of piece life</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div id="adventure" data-tab-content>
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item5.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Life among the pirates</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item7.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Simple way of piece life</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div id="fictional" data-tab-content>
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item5.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Life among the pirates</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="col-md-3">
                                <figure class="product-style">
                                    <img src="images/tab-item7.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                    <figcaption>
                                        <h3>Simple way of piece life</h3>
                                        <p>Armor Ramsey</p>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

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
                            <img src="images/single-image.jpg" alt="book" class="single-image">
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
                                    <a href="#" class="btn-accent-arrow">shop it now <i class="icon icon-ns-arrow-right"></i></a>
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