@extends('layouts.frontend')
@php
    $pageTitle = 'Branches';
@endphp
@section('page_title')
    {{ $pageTitle }}
@endsection

@section('css')
@endsection

@section('style')
@endsection

@section('content')

    <div class="page-content">

        @include('partials.frontend.inner-banner')

        <div class="bg-gradient-1">
            <div class="section-full">
                <div class="container">
                    <div class="text-center py-4">
                        <p class="text-uppercase font-34 text-white mb-0">Branches</p>
                    </div>
                </div>
            </div>
            <div class="section-full bg-white py-5">
                <div class="container">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="dlab-thu m"><img src="{{ asset('assets/common/images/branch-head-office.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-sm-5">
                                    <p class="text-uppercase font-20 mt-3 mt-sm-0 fw-bold mb-4 text-primary">Colombo (Head office)</p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-location-pin me-3"></i>
                                        320A, T.B Jaya mawatha, Colombo 10, Sri Lanka.
                                    </p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-email me-3"></i>
                                        <a href="mailto:info@magcitylk.com">info@magcitylk.com</a>
                                    </p>
                                    <p class="font-16 mb-0 fw-medium">
                                        <i class="ti-mobile me-3"></i>
                                        <a href="tel:+94114734020">0114734020</a>
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-3 mt-sm-0">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.722476095078!2d79.86020524261237!3d6.923741270169149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25912420dfabd%3A0xcc0a94fa1c5209d6!2sMag%20City%20Colombo!5e0!3m2!1sen!2sus!4v1784740415066!5m2!1sen!2sus" style="border:0; width:100%; height:180px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="dlab-thu m"><img src="{{ asset('assets/common/images/branch-galle.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-sm-5">
                                    <p class="text-uppercase font-20 mt-3 mt-sm-0 fw-bold mb-4 text-primary">Galle</p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-location-pin me-3"></i>
                                        4 Hirimbura Cross road, Galle 80000, Sri Lanka
                                    </p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-email me-3"></i>
                                        <a href="mailto:galle@magcitylk.com">galle@magcitylk.com</a>
                                    </p>
                                    <p class="font-16 mb-0 fw-medium">
                                        <i class="ti-mobile me-3"></i>
                                        <a href="tel:+94912228388">0912228388</a>
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-3 mt-sm-0">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.537533351868!2d80.2153397762013!3d6.057991328395316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173dbce1a2f1b%3A0xb474ee4ab26504c2!2sMag%20City%20Galle!5e0!3m2!1sen!2sus!4v1784743107192!5m2!1sen!2sus" style="border:0; width:100%; height:180px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="dlab-thu m"><img src="{{ asset('assets/common/images/branch-nugegoda.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-sm-5">
                                    <p class="text-uppercase font-20 mt-3 mt-sm-0 fw-bold mb-4 text-primary">Nugegoda</p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-location-pin me-3"></i>
                                        344, Old Kottawa road, Nugegoda, 10250, Sri Lanka
                                    </p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-email me-3"></i>
                                        <a href="mailto:nugegoda@magcitylk.com">nugegoda@magcitylk.com</a>
                                    </p>
                                    <p class="font-16 mb-0 fw-medium">
                                        <i class="ti-mobile me-3"></i>
                                        <a href="tel:+94112199799">0112199799</a>
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-3 mt-sm-0">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2027645239455!2d79.908679376203!3d6.866288919082461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b5c8629ad7d%3A0xeb578bf49153ce1d!2sMag%20City%20Nugegoda!5e0!3m2!1sen!2sus!4v1784743603001!5m2!1sen!2sus" style="border:0; width:100%; height:180px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="dlab-thu m"><img src="{{ asset('assets/common/images/branch-ratmalana.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-sm-5">
                                    <p class="text-uppercase font-20 mt-3 mt-sm-0 fw-bold mb-4 text-primary">Ratmalana</p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-location-pin me-3"></i>
                                        652, Galle Road, Ratmalana, 10390, Sri Lanka
                                    </p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-email me-3"></i>
                                        <a href="mailto:ratmalana@magcitylk.com">ratmalana@magcitylk.com</a>
                                    </p>
                                    <p class="font-16 mb-0 fw-medium">
                                        <i class="ti-mobile me-3"></i>
                                        <a href="tel:+94112626333">0112626333</a>
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-3 mt-sm-0">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.668906690564!2d79.87931997620286!3d6.810067519764346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae245e889c5abf5%3A0x19c1ef1ce1da1def!2sMag%20City%20Ratmalana!5e0!3m2!1sen!2sus!4v1784743710677!5m2!1sen!2sus" style="border:0; width:100%; height:180px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="dlab-thu m"><img src="{{ asset('assets/common/images/branch-gatambe.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-sm-5">
                                    <p class="text-uppercase font-20 mt-3 mt-sm-0 fw-bold mb-4 text-primary">Gatambe</p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-location-pin me-3"></i>
                                        964, Peradeniya Road, Gatambe, 2000, Sri Lanka
                                    </p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-email me-3"></i>
                                        <a href="mailto:gatambe@magcitylk.com">gatambe@magcitylk.com</a>
                                    </p>
                                    <p class="font-16 mb-0 fw-medium">
                                        <i class="ti-mobile me-3"></i>
                                        <a href="tel:+94812388699">0812388699</a>
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-3 mt-sm-0">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7352094413773!2d80.6023597762041!3d7.270943314023966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3698df8caed81%3A0xf1fd4492f91bc374!2sMag%20City%20Gatambe!5e0!3m2!1sen!2sus!4v1784743821458!5m2!1sen!2sus" style="border:0; width:100%; height:180px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 my-3">
                            <h2 class="text-uppercase">Our subsidiaries </h2>
                            <div class="dlab-separator-outer ">
                                <div class="dlab-separator bg-secondry style-skew"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="dlab-thu m"><img src="{{ asset('assets/common/images/branch-kandy.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-sm-5">
                                    <p class="text-uppercase font-20 mt-3 mt-sm-0 fw-bold mb-4 text-primary">CARS Body Shop - Kandy</p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-location-pin me-3"></i>
                                        04, William Gopallawa Mawatha, Kandy 20000, Sri Lanka
                                    </p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-email me-3"></i>
                                        <a href="mailto:carskandy@magcitylk.com">carskandy@magcitylk.com</a>
                                    </p>
                                    <p class="font-16 mb-0 fw-medium">
                                        <i class="ti-mobile me-3"></i>
                                        <a href="tel:+94715853092">0715853092</a>
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-3 mt-sm-0">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5738607902244!2d80.63019197620409!3d7.289228113789185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae368828204b25b%3A0x64b56c18cefcb9a9!2sCARS%20Body%20Shop%20Kandy!5e0!3m2!1sen!2sus!4v1784744056314!5m2!1sen!2sus" style="border:0; width:100%; height:180px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="dlab-thu m"><img src="{{ asset('assets/common/images/branch-pallekale.jpg') }}" alt=""></div>
                                </div>
                                <div class="col-sm-5">
                                    <p class="text-uppercase font-20 mt-3 mt-sm-0 fw-bold mb-4 text-primary">CARS Body Shop - Pallekele</p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-location-pin me-3"></i>
                                        125, Kandy Industrial Zone, Pallekele 60622, Sri Lanka.
                                    </p>
                                    <p class="font-16 mb-2 fw-medium">
                                        <i class="ti-email me-3"></i>
                                        <a href="mailto:carspallekele@magcitylk.com">carspallekele@magcitylk.com</a>
                                    </p>
                                    <p class="font-16 mb-0 fw-medium">
                                        <i class="ti-mobile me-3"></i>
                                        <a href="tel:+94768256645">0768256645</a>
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-3 mt-sm-0">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.670762634934!2d80.72003317620401!3d7.2782522139302115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3613558f0dd59%3A0x9cb0bfe29f920bf!2sCars%20Body%20Shop%20Pallekele!5e0!3m2!1sen!2sus!4v1784744147294!5m2!1sen!2sus" style="border:0; width:100%; height:180px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

@section('footer-cta')
    @include('partials.frontend.footer-cta')
@endsection

@section('js')
@endsection

@section('script')
    <script>
        $(document).ready(function (){
        });
    </script>
@endsection
