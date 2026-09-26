@extends('layouts.frontend')
@php
    $pageTitle = 'Branches';
@endphp
@section('page_title')
    {{ $pageTitle }}
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/css/branches-map.css') }}">
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

                    <div class="card">
                        <div class="stripe"></div>
                        <div class="layout">

                            <!-- ===================== MAP ===================== -->
                            <div class="map-side">
                                <div class="map-toolbar">
                                    <div class="map-title">Sri Lanka<small>Schematic — not to scale</small></div>
                                    <div class="seg" id="filterSeg">
                                        <button data-filter="all" class="active"><span class="swatch"></span>All</button>
                                        <button data-filter="main"><span class="swatch"></span>Mag City</button>
                                        <button data-filter="subsidiary"><span class="swatch"></span>Group</button>
                                    </div>
                                </div>

                                <div class="map-stage">
                                    <div class="map-clip">
                                        <svg class="map" id="slMap" viewBox="0 0 380 570" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <filter id="landShadow" x="-30%" y="-30%" width="160%" height="160%">
                                                    <feDropShadow dx="0" dy="6" stdDeviation="8" flood-color="#0B3D91" flood-opacity="0.12"/>
                                                </filter>
                                                <filter id="pinShadow" x="-60%" y="-60%" width="220%" height="220%">
                                                    <feDropShadow dx="0" dy="2" stdDeviation="2" flood-color="#0F1420" flood-opacity="0.35"/>
                                                </filter>
                                            </defs>

                                            <g transform="translate(24,16)">
                                                <path class="land" d="M 76.15,18.12 L 88.72,18.81 L 102.13,18.47 L 111.52,20.28 L 127.63,40.6 L 171.46,77.01 L 195.3,114.02 L 197.47,122.12 L 200.79,129.12 L 206.51,131.04 L 211.33,134.24 L 235.15,169.96 L 237.9,177.03 L 237.5,184.81 L 238.91,190.6 L 245.14,193.49 L 252.91,195.01 L 257.99,200.38 L 264.44,228.9 L 264.44,237.8 L 266.24,241.62 L 296.25,286.01 L 297.99,291.41 L 297.67,295.45 L 298.53,298.94 L 304.34,306.79 L 313.41,327.93 L 318.03,332.73 L 323.54,351.21 L 323.91,386.56 L 321.88,402.28 L 316.27,421.43 L 309.63,440.15 L 302.43,453.67 L 292.58,465.11 L 258.92,489.42 L 249.28,494.31 L 205.45,509.55 L 173.15,523.97 L 143.3,527.89 L 113.43,519.92 L 90.93,501.0 L 79.41,473.12 L 71.53,444.08 L 60.07,411.78 L 51.27,312.04 L 47.07,284.16 L 40.25,248.64 L 40.93,233.25 L 45.74,218.48 L 45.73,250.86 L 50.15,254.87 L 53.47,250.71 L 56.48,217.18 L 58.96,203.0 L 70.85,166.06 L 71.09,159.51 L 69.04,145.62 L 69.16,138.65 L 86.94,112.73 L 91.49,97.65 L 93.94,82.22 L 92.97,65.54 L 89.75,49.11 L 104.1,54.35 L 112.0,60.07 L 120.04,63.94 L 126.58,61.96 L 134.47,61.89 L 128.85,52.94 L 112.15,44.69 L 84.45,39.6 L 75.78,33.07 L 72.45,27.4 L 74.15,20.77 L 76.15,18.12 Z"/>
                                                <path class="islet" d="M 74.48,42.14 L 66.28,43.57 L 59.82,34.79 L 58.28,31.05 L 59.97,28.45 L 61.76,27.14 L 63.88,27.56 L 66.94,35.74 L 74.48,42.14 Z"/>
                                                <path class="islet" d="M 62.09,118.66 L 65.87,128.65 L 55.07,121.81 L 47.97,116.15 L 45.46,111.55 L 60.15,116.68 L 62.09,118.66 Z"/>

                                                <!-- compass -->
                                                <g transform="translate(300,26)">
                                                    <line class="compass-line" x1="0" y1="14" x2="0" y2="0"/>
                                                    <polygon points="0,-4 3,3 -3,3" fill="#9AA1AC"/>
                                                    <text class="compass" x="0" y="26" text-anchor="middle">N</text>
                                                </g>

                                                <g id="pinLayer"></g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="pin-popup" id="pinPopup"></div>
                                    <div class="zoom-controls">
                                        <button type="button" class="zoom-btn" id="zoomIn" aria-label="Zoom in">+</button>
                                        <button type="button" class="zoom-btn" id="zoomOut" aria-label="Zoom out">&minus;</button>
                                        <button type="button" class="zoom-btn reset" id="zoomReset" aria-label="Reset zoom">&#8635;</button>
                                    </div>
                                </div>
                            </div>

                            <!-- ===================== LIST ===================== -->
                            <div class="list-side">
                                <div class="list-head">
                                    <h2>All locations</h2>
                                    <span class="count" id="locCount"></span>
                                </div>
                                <ul class="loc-list" id="locList"></ul>
                            </div>

                        </div>
                    </div>

                    <div class="card mt-5 mb-4">
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
                                        964, Peradeniya Road, Gatambe, 20000, Sri Lanka
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
        /* ---------------- DATA ---------------- */
        const locations = [
            { id:1, name:"Colombo — Head Office", type:"main", x:60.62, y:398.24,
                addr:"320A, T.B. Jaya Mawatha, Colombo 10", phone:"+94 11 473 4020", email:"info@magcitylk.com" },
            { id:2, name:"Nugegoda", type:"main", x:65.25, y:407.08,
                addr:"344, Old Kottawa Road, Nugegoda 10250", phone:"+94 11 219 9799", email:"nugegoda@magcitylk.com" },
            { id:3, name:"Ratmalana", type:"main", x:63.42, y:412.77,
                addr:"652, Galle Road, Ratmalana 10390", phone:"+94 11 262 6333", email:"ratmalana@magcitylk.com" },
            { id:4, name:"Galle", type:"main", x:108.84, y:518.83,
                addr:"4, Hirimbura Cross Road, Galle 80000", phone:"+94 91 222 8388", email:"galle@magcitylk.com" },
            { id:5, name:"Gatambe", type:"main", x:150.84, y:355.83,
                addr:"964, Peradeniya Road, Gatambe 20000", phone:"+94 81 238 8699", email:"gatambe@magcitylk.com" },
            { id:6, name:"Kandy — CARS Body Shop", type:"subsidiary", x:162.38, y:350.59,
                addr:"04, William Gopallawa Mawatha, Kandy 20000", phone:"+94 71 585 3092", email:"carskandy@carsbodyshoplk.com" },
            { id:7, name:"Pallekele — CARS Body Shop", type:"subsidiary", x:171.78, y:351.68,
                addr:"125, Kandy Industrial Zone, Pallekele 60622", phone:"+94 76 825 6645", email:"carspallekele@carsbodyshoplk.com" },
        ];

        const PIN_D = "M12 0C5.4 0 0 5.4 0 12c0 9 12 20 12 20s12-11 12-20C24 5.4 18.6 0 12 0z";
        const PIN_SCALE = 0.62; // overall pin ~ 14.9 wide, 19.8 tall

        const pinLayer = document.getElementById('pinLayer');
        const popup = document.getElementById('pinPopup');
        const locList = document.getElementById('locList');
        const locCount = document.getElementById('locCount');
        const seg = document.getElementById('filterSeg');
        const svg = document.getElementById('slMap');
        let activeId = null;
        let filter = 'all';

        function buildPin(loc){
            const g = document.createElementNS('http://www.w3.org/2000/svg','g');
            g.setAttribute('class', 'pin ' + loc.type);
            g.dataset.id = loc.id;

            const tx = (loc.x - 12 * PIN_SCALE).toFixed(2);
            const ty = (loc.y - 24 * PIN_SCALE).toFixed(2);

            const ring = document.createElementNS('http://www.w3.org/2000/svg','circle');
            ring.setAttribute('class','ring');
            ring.setAttribute('cx', loc.x); ring.setAttribute('cy', loc.y - 4); ring.setAttribute('r', 9);

            const shape = document.createElementNS('http://www.w3.org/2000/svg','path');
            shape.setAttribute('class','pin-shape');
            shape.setAttribute('d', PIN_D);
            shape.setAttribute('transform', `translate(${tx},${ty}) scale(${PIN_SCALE})`);

            const num = document.createElementNS('http://www.w3.org/2000/svg','text');
            num.setAttribute('class','pin-num');
            num.setAttribute('x', loc.x);
            num.setAttribute('y', loc.y - 4 + 3.5);
            num.textContent = loc.id;

            g.appendChild(ring); g.appendChild(shape); g.appendChild(num);

            g.addEventListener('mouseenter', ()=> showPopup(loc));
            g.addEventListener('mouseleave', scheduleHidePopup);
            g.addEventListener('click', (e)=>{ e.stopPropagation(); setActive(loc.id); });

            return g;
        }

        // Pin coordinates are authored in the <g transform="translate(24,16)"> space,
        // so add that fixed offset to get absolute viewBox coordinates before
        // converting to screen pixels via the root SVG's CTM.
        const GROUP_OFFSET = { x: 24, y: 16 };
        const stageEl = document.querySelector('.map-stage');
        let hidePopupTimer = null;

        function popupContent(loc){
            const mapsUrl = 'https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent(loc.name.replace('—','-') + ', ' + loc.addr);
            return `
    ${loc.type==='subsidiary' ? '<span class="pp-pill">Group company</span>' : ''}
    <p class="pp-name">${loc.name}</p>
    <p class="pp-addr">${loc.addr}</p>
    <div class="pp-row">
      <a class="pp-btn call" href="tel:${loc.phone.replace(/\s+/g,'')}">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3.5c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.4 0 .8-.2 1L6.6 10.8z"/></svg>
        Call
      </a>
      <a class="pp-btn dir" href="${mapsUrl}" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C7.6 2 4 5.6 4 10c0 5.5 7 11.5 7.3 11.7.2.2.5.3.7.3s.5-.1.7-.3C13 21.5 20 15.5 20 10c0-4.4-3.6-8-8-8zm0 11c-1.7 0-3-1.3-3-3s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3z"/></svg>
        Directions
      </a>
    </div>`;
        }

        // Popup is anchored once, at the pin's fixed map coordinate — not re-positioned
        // on every mousemove — so it stays put instead of drifting as the cursor moves.
        function positionPopup(loc){
            popup.style.setProperty('--shift-x', '0px');
            const pt = svg.createSVGPoint();
            pt.x = loc.x + GROUP_OFFSET.x;
            pt.y = loc.y + GROUP_OFFSET.y - 28; // just above the pin tip
            const ctm = svg.getScreenCTM();
            const screenPt = pt.matrixTransform(ctm);
            const stageRect = stageEl.getBoundingClientRect();
            popup.style.left = (screenPt.x - stageRect.left) + 'px';
            popup.style.top = (screenPt.y - stageRect.top) + 'px';

            // Nudge horizontally if the card would spill outside the map panel.
            requestAnimationFrame(()=>{
                const popRect = popup.getBoundingClientRect();
                let shiftX = 0;
                if(popRect.left < stageRect.left) shiftX = stageRect.left - popRect.left + 8;
                else if(popRect.right > stageRect.right) shiftX = stageRect.right - popRect.right - 8;
                popup.style.setProperty('--shift-x', shiftX + 'px');
            });
        }

        function showPopup(loc){
            clearTimeout(hidePopupTimer);
            popup.innerHTML = popupContent(loc);
            positionPopup(loc);
            popup.classList.add('show');
        }
        function hidePopup(){ popup.classList.remove('show'); }
        function scheduleHidePopup(){
            hidePopupTimer = setTimeout(()=>{ if(activeId == null) hidePopup(); }, 160);
        }
        // Keep the popup open while the cursor is over the card itself.
        popup.addEventListener('mouseenter', ()=> clearTimeout(hidePopupTimer));
        popup.addEventListener('mouseleave', scheduleHidePopup);

        function visibleLocations(){
            return locations.filter(l => filter === 'all' || l.type === filter);
        }

        function renderPins(){
            pinLayer.innerHTML = '';
            locations.forEach(loc=>{
                const pin = buildPin(loc);
                const isVisible = filter === 'all' || loc.type === filter;
                if(!isVisible) pin.classList.add('dim');
                if(loc.id === activeId) pin.classList.add('active');
                pinLayer.appendChild(pin);
            });
        }

        function renderList(){
            const visible = visibleLocations();
            locCount.textContent = visible.length + (visible.length===1 ? ' location' : ' locations');
            locList.innerHTML = '';
            visible.forEach((loc)=>{
                const li = document.createElement('li');
                li.className = 'loc' + (loc.type==='subsidiary' ? ' subsidiary' : '') + (loc.id===activeId ? ' active' : '');
                li.dataset.id = loc.id;
                const mapsUrl = 'https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent(loc.name.replace('—','-') + ', ' + loc.addr);
                li.innerHTML = `
      <div class="num">${loc.id}</div>
      <div class="body">
        ${loc.type==='subsidiary' ? '<span class="pill">Group company</span>' : ''}
        <p class="name">${loc.name}</p>
        <p class="addr">${loc.addr}</p>
        <div class="row">
          <a class="btn call" href="tel:${loc.phone.replace(/\s+/g,'')}">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.9 21 3 13.1 3 3.5c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.4 0 .8-.2 1L6.6 10.8z"/></svg>
            ${loc.phone}
          </a>
          <a class="btn dir" href="${mapsUrl}" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C7.6 2 4 5.6 4 10c0 5.5 7 11.5 7.3 11.7.2.2.5.3.7.3s.5-.1.7-.3C13 21.5 20 15.5 20 10c0-4.4-3.6-8-8-8zm0 11c-1.7 0-3-1.3-3-3s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3z"/></svg>
            Directions
          </a>
        </div>
      </div>`;
                li.addEventListener('click', ()=> setActive(loc.id));
                locList.appendChild(li);
            });
        }

        function setActive(id){
            activeId = (activeId === id) ? null : id;
            renderPins();
            document.querySelectorAll('.loc').forEach(el=>{
                el.classList.toggle('active', Number(el.dataset.id) === activeId);
            });
            if(activeId){
                const el = document.querySelector('.loc[data-id="'+activeId+'"]');
                if(el) el.scrollIntoView({ behavior:'smooth', block:'nearest' });
                const loc = locations.find(l=>l.id===activeId);
                if(loc) showPopup(loc);
            } else {
                hidePopup();
            }
        }

        // Clicking anywhere outside a pin, the list, or the popup itself closes it.
        document.addEventListener('click', (e)=>{
            if(activeId !== null && !e.target.closest('.pin') && !e.target.closest('.loc') && !e.target.closest('.pin-popup')){
                activeId = null;
                renderPins();
                document.querySelectorAll('.loc').forEach(el=> el.classList.remove('active'));
                hidePopup();
            }
        });

        seg.addEventListener('click', (e)=>{
            const btn = e.target.closest('button[data-filter]');
            if(!btn) return;
            filter = btn.dataset.filter;
            seg.querySelectorAll('button').forEach(b=> b.classList.toggle('active', b===btn));
            if(activeId){
                const loc = locations.find(l=>l.id===activeId);
                if(loc && filter !== 'all' && loc.type !== filter) activeId = null;
            }
            renderPins();
            renderList();
        });

        renderPins();
        renderList();

        /* ---------------- ZOOM / PAN ---------------- */
        const VB = { x: 0, y: 0, w: 380, h: 570 }; // original viewBox, matches svg's base
        let vb = { ...VB };
        const ZOOM_MIN = 1;   // 1x = fully zoomed out (original view)
        const ZOOM_MAX = 6;   // 6x = closest zoom in

        function applyViewBox(){
            svg.setAttribute('viewBox', `${vb.x} ${vb.y} ${vb.w} ${vb.h}`);
        }

        function clampViewBox(){
            const minW = VB.w / ZOOM_MAX, maxW = VB.w / ZOOM_MIN;
            vb.w = Math.min(Math.max(vb.w, minW), maxW);
            vb.h = vb.w * (VB.h / VB.w);
            vb.x = Math.min(Math.max(vb.x, VB.x), VB.x + VB.w - vb.w);
            vb.y = Math.min(Math.max(vb.y, VB.y), VB.y + VB.h - vb.h);
        }

        // Zoom by `factor` (>1 zooms in), keeping the point (cx,cy) — in current
        // viewBox user-space coordinates — visually fixed under the cursor/fingers.
        function zoomAt(factor, cx, cy){
            const px = (cx - vb.x) / vb.w;
            const py = (cy - vb.y) / vb.h;
            vb.w = vb.w / factor;
            vb.h = vb.h / factor;
            vb.x = cx - px * vb.w;
            vb.y = cy - py * vb.h;
            clampViewBox();
            applyViewBox();
        }

        function svgPointFromClient(clientX, clientY){
            const pt = svg.createSVGPoint();
            pt.x = clientX; pt.y = clientY;
            const ctm = svg.getScreenCTM().inverse();
            return pt.matrixTransform(ctm);
        }

        // Mouse wheel / trackpad zoom, centered on the cursor
        svg.addEventListener('wheel', (e)=>{
            e.preventDefault();
            const pt = svgPointFromClient(e.clientX, e.clientY);
            const factor = e.deltaY < 0 ? 1.18 : 1 / 1.18;
            zoomAt(factor, pt.x, pt.y);
        }, { passive: false });

        // Double-click / double-tap to zoom in a step
        svg.addEventListener('dblclick', (e)=>{
            const pt = svgPointFromClient(e.clientX, e.clientY);
            zoomAt(1.6, pt.x, pt.y);
        });

        // Drag-to-pan and pinch-to-zoom via Pointer Events (mouse, touch, pen)
        const activePointers = new Map();
        let isPanning = false;
        let panStart = null;
        let pinchStartDist = null;
        let pinchStartVb = null;

        svg.addEventListener('pointerdown', (e)=>{
            svg.setPointerCapture(e.pointerId);
            activePointers.set(e.pointerId, { x: e.clientX, y: e.clientY });

            if(activePointers.size === 1){
                isPanning = true;
                panStart = { clientX: e.clientX, clientY: e.clientY, vb: { ...vb } };
            } else if(activePointers.size === 2){
                isPanning = false;
                const pts = Array.from(activePointers.values());
                pinchStartDist = Math.hypot(pts[0].x - pts[1].x, pts[0].y - pts[1].y);
                pinchStartVb = { ...vb };
            }
        });

        svg.addEventListener('pointermove', (e)=>{
            if(!activePointers.has(e.pointerId)) return;
            activePointers.set(e.pointerId, { x: e.clientX, y: e.clientY });

            if(activePointers.size === 2){
                const pts = Array.from(activePointers.values());
                const dist = Math.hypot(pts[0].x - pts[1].x, pts[0].y - pts[1].y);
                if(pinchStartDist){
                    const midClientX = (pts[0].x + pts[1].x) / 2;
                    const midClientY = (pts[0].y + pts[1].y) / 2;
                    const mid = svgPointFromClient(midClientX, midClientY);
                    vb = { ...pinchStartVb };
                    zoomAt(dist / pinchStartDist, mid.x, mid.y);
                }
                return;
            }

            if(!isPanning || !panStart) return;
            const ctm = svg.getScreenCTM();
            const dxUser = (e.clientX - panStart.clientX) / ctm.a;
            const dyUser = (e.clientY - panStart.clientY) / ctm.d;
            vb.x = panStart.vb.x - dxUser;
            vb.y = panStart.vb.y - dyUser;
            clampViewBox();
            applyViewBox();
        });

        function releasePointer(e){
            activePointers.delete(e.pointerId);
            if(activePointers.size < 2) pinchStartDist = null;
            if(activePointers.size === 0) isPanning = false;
        }
        svg.addEventListener('pointerup', releasePointer);
        svg.addEventListener('pointercancel', releasePointer);
        svg.addEventListener('pointerleave', releasePointer);

        // On-screen zoom buttons
        document.getElementById('zoomIn').addEventListener('click', ()=>{
            zoomAt(1.4, vb.x + vb.w / 2, vb.y + vb.h / 2);
        });
        document.getElementById('zoomOut').addEventListener('click', ()=>{
            zoomAt(1 / 1.4, vb.x + vb.w / 2, vb.y + vb.h / 2);
        });
        document.getElementById('zoomReset').addEventListener('click', ()=>{
            vb = { ...VB };
            applyViewBox();
        });
    </script>

    <script>
        $(document).ready(function (){
        });
    </script>
@endsection
