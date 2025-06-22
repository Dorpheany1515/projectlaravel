@extends('frontend.layout')
@section('title')
    News Blog
@endsection
@section('content')
    <main class="shop news-blog">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">
                            NEWS BLOG
                        </h3>
                    </div>
                </div>
                <div class="row">
                    @for ($i = 0; $i < 1; $i++)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 px-4 mt-3">
                            <figure>
                                <div class="thumbnail">
                                    <a href="/article">
                                        <img src="https://www.currentaffairs.org/hs-fs/hubfs/briefingpromo-178-V1.jpg?width=2000&height=1333&name=briefingpromo-178-V1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5 class="title">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h5>
                                </div>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 px-4 mt-3">
                            <figure>
                                <div class="thumbnail">
                                    <a href="/article">
                                        <img src="https://www.currentaffairs.org/hs-fs/hubfs/briefingpromo-180-V2.jpg?width=2000&height=1333&name=briefingpromo-180-V2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5 class="title">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h5>
                                </div>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 px-4 mt-3">
                            <figure>
                                <div class="thumbnail">
                                    <a href="/article">
                                        <img src="https://www.currentaffairs.org/hs-fs/hubfs/briefingpromo-182-V1.jpg?width=2000&height=1333&name=briefingpromo-182-V1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5 class="title">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h5>
                                </div>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 px-4 mt-3">
                            <figure>
                                <div class="thumbnail">
                                    <a href="/article">
                                        <img src="https://www.currentaffairs.org/hs-fs/hubfs/briefingpromo-184-V1.jpg?width=2000&height=1333&name=briefingpromo-184-V1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5 class="title">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h5>
                                </div>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 px-4 mt-3">
                            <figure>
                                <div class="thumbnail">
                                    <a href="/article">
                                        <img src="https://www.currentaffairs.org/hs-fs/hubfs/briefingpromo-185-V1.jpg?width=2000&height=1333&name=briefingpromo-185-V1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5 class="title">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h5>
                                </div>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 px-4 mt-3">
                            <figure>
                                <div class="thumbnail">
                                    <a href="/article">
                                        <img src="https://www.currentaffairs.org/hubfs/WP-Larson-Online-Image3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5 class="title">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h5>
                                </div>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 px-4 mt-3">
                            <figure>
                                <div class="thumbnail">
                                    <a href="/article">
                                        <img src="https://www.currentaffairs.org/hubfs/Online%20Article%20Images/Rosenfeld-Online-Image1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5 class="title">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h5>
                                </div>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 px-4 mt-3">
                            <figure>
                                <div class="thumbnail">
                                    <a href="/article">
                                        <img src="https://www.currentaffairs.org/hubfs/dmurray.jpg" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5 class="title">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h5>
                                </div>
                            </figure>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
    </main>
@endsection
