@extends('layouts.app')

@section('title')
    Kadooku
@endsection

@section('content')
<div class="page-content page-home">
    <section class="store-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-in">
                    <div
                        id="storeCarousel"
                        class="carousel slide"
                        data-ride="carousel"
                    >
                        <ol class="carousel-indicators">
                            <li
                                data-target="#storeCarousel"
                                data-slide-to="0"
                                class="active"
                            ></li>
                            <li
                                data-target="#storeCarousel"
                                data-slide-to="1"
                            ></li>
                            <li
                                data-target="#storeCarousel"
                                data-slide-to="2"
                            ></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img
                                    src="images/banner.jpg"
                                    class="d-block w-100"
                                    alt="Carousel Image"
                                />
                            </div>
                            <div class="carousel-item">
                                <img
                                    src="images/banner.jpg"
                                    class="d-block w-100"
                                    alt="Carousel Image"
                                />
                            </div>
                            <div class="carousel-item">
                                <img
                                    src="images/banner.jpg"
                                    class="d-block w-100"
                                    alt="Carousel Image"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="store-trend-categories">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h4>Trend Categories</h4>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-6 col-md-3 col-lg-2"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <a class="component-categories d-block" href="#">
                        <div class="categories-image">
                            <img
                                src="images/categories-weddings.svg"
                                alt="Wedding"
                                class="w-100"
                            />
                        </div>
                        <p class="categories-text">
                            Wedding
                        </p>
                    </a>
                </div>
                <div
                    class="col-6 col-md-3 col-lg-2"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <a class="component-categories d-block" href="#">
                        <div class="categories-image">
                            <img
                                src="images/categories-birthday.svg"
                                alt="Birthday Categories"
                                class="w-100"
                            />
                        </div>
                        <p class="categories-text">
                            Birthday
                        </p>
                    </a>
                </div>
                <div
                    class="col-6 col-md-3 col-lg-2"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <a class="component-categories d-block" href="#">
                        <div class="categories-image">
                            <img
                                src="images/caregories-graduation.svg"
                                alt="Graduation Categories"
                                class="w-100"
                            />
                        </div>
                        <p class="categories-text">
                            Graduation
                        </p>
                    </a>
                </div>
                <div
                    class="col-6 col-md-3 col-lg-2"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >
                    <a class="component-categories d-block" href="#">
                        <div class="categories-image">
                            <img
                                src="images/categories-relationship.svg"
                                alt="Special Categories"
                                class="w-100"
                            />
                        </div>
                        <p class="categories-text">
                            Relationship
                        </p>
                    </a>
                </div>
                <div
                    class="col-6 col-md-3 col-lg-2"
                    data-aos="fade-up"
                    data-aos-delay="500"
                >
                    <a class="component-categories d-block" href="#">
                        <div class="categories-image">
                            <img
                                src="images/categories-baby.svg"
                                alt="Baby Categories"
                                class="w-100"
                            />
                        </div>
                        <p class="categories-text">
                            Baby
                        </p>
                    </a>
                </div>
                <div
                    class="col-6 col-md-3 col-lg-2"
                    data-aos="fade-up"
                    data-aos-delay="600"
                >
                    <a class="component-categories d-block" href="#">
                        <div class="categories-image">
                            <img
                                src="images/categories-hempers.svg"
                                alt="Hempers Categories"
                                class="w-100"
                            />
                        </div>
                        <p class="categories-text">
                            Hempers
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="store-new-products">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>New Products</h5>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <a
                        class="component-products d-block"
                        href="/details.html"
                    >
                        <div class="products-thumbnail">
                            <div
                                class="products-image"
                                style="background-image: url('images/apple-watch.jpg');"
                            ></div>
                        </div>
                        <div class="products-text">
                            Apple Watch 4
                        </div>
                        <div class="products-price">
                            $890
                        </div>
                    </a>
                </div>
                <div
                    class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <a
                        class="component-products d-block"
                        href="/details.html"
                    >
                        <div class="products-thumbnail">
                            <div
                                class="products-image"
                                style="background-image: url('images/orange-bogota.jpg');"
                            ></div>
                        </div>
                        <div class="products-text">
                            Orange Bogotta
                        </div>
                        <div class="products-price">
                            $94,509
                        </div>
                    </a>
                </div>
                <div
                    class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <a
                        class="component-products d-block"
                        href="/details.html"
                    >
                        <div class="products-thumbnail">
                            <div
                                class="products-image"
                                style="background-image: url('images/sofa.jpg');"
                            ></div>
                        </div>
                        <div class="products-text">
                            Sofa Ternyaman
                        </div>
                        <div class="products-price">
                            $1,409
                        </div>
                    </a>
                </div>
                <div
                    class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >
                    <a
                        class="component-products d-block"
                        href="/details.html"
                    >
                        <div class="products-thumbnail">
                            <div
                                class="products-image"
                                style="background-image: url('images/bubuk-maketi.jpg');"
                            ></div>
                        </div>
                        <div class="products-text">
                            Bubuk Maketti
                        </div>
                        <div class="products-price">
                            $225
                        </div>
                    </a>
                </div>
                <div
                    class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="500"
                >
                    <a
                        class="component-products d-block"
                        href="/details.html"
                    >
                        <div class="products-thumbnail">
                            <div
                                class="products-image"
                                style="background-image: url('images/tatakan-gelas.jpg');"
                            ></div>
                        </div>
                        <div class="products-text">
                            Tatakan Gelas
                        </div>
                        <div class="products-price">
                            $45,184
                        </div>
                    </a>
                </div>
                <div
                    class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="600"
                >
                    <a
                        class="component-products d-block"
                        href="/details.html"
                    >
                        <div class="products-thumbnail">
                            <div
                                class="products-image"
                                style="background-image: url('images/mavic.jpg');"
                            ></div>
                        </div>
                        <div class="products-text">
                            Mavic Kawe
                        </div>
                        <div class="products-price">
                            $503
                        </div>
                    </a>
                </div>
                <div
                    class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="700"
                >
                    <a
                        class="component-products d-block"
                        href="/details.html"
                    >
                        <div class="products-thumbnail">
                            <div
                                class="products-image"
                                style="background-image: url('images/sneaker.jpg');"
                            ></div>
                        </div>
                        <div class="products-text">
                            Black Edition Nike
                        </div>
                        <div class="products-price">
                            $70,482
                        </div>
                    </a>
                </div>
                <div
                    class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="800"
                >
                    <a
                        class="component-products d-block"
                        href="/details.html"
                    >
                        <div class="products-thumbnail">
                            <div
                                class="products-image"
                                style="background-image: url('images/boneka.jpg');"
                            ></div>
                        </div>
                        <div class="products-text">
                            Monkey Toys
                        </div>
                        <div class="products-price">
                            $783
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
    
@endsection