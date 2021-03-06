@extends('layouts.home')

@section('container')

{{-- first section --}}
<section style="padding-top: 7rem;">
    <div class="bg-holder">
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img
                    class="pt-7 pt-md-0 hero-img"
                    src="assets/img/hero/hero-img.png" alt="hero-header" />
            </div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                <h4 class="fw-bold text-danger mb-3">Best Destinations
                    around
                    the world</h4>
                <h1 class="hero-title">Travel, enjoy and live a new and full
                    life</h1>
                <p class="mb-4 fw-medium">Built Wicket longer admire do
                    barton
                    vanity itself do in it.<br
                        class="d-none d-xl-block" />Preferred to sportsmen
                    it
                    engrossed listening. Park gate<br
                        class="d-none d-xl-block" />sell they west hard for
                    the.
                </p>
                <div class="text-center text-md-start"> <a
                        class="btn btn-info btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow"
                        href="/login" role="button">Find out more</a>
                    <div class="w-100 d-block d-md-none"></div><a href="#!"
                        role="button" data-bs-toggle="modal"
                        data-bs-target="#popupVideo"><span
                            class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow">
                            <img src="assets/img/hero/play.svg" width="15"
                                alt="paly" /></span></a><span
                        class="fw-medium">Play Demo</span>
                    <div class="modal fade" id="popupVideo" tabindex="-1"
                        aria-labelledby="popupVideo" aria-hidden="true">
                        <div
                            class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <iframe class="rounded"
                                    style="width:100%;max-height:500px;"
                                    height="500px"
                                    src="https://www.youtube.com/embed/aKtb7Y3qOck?t=37"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- first section --}}

@endsection
