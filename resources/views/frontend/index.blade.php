@extends('layouts.frontend')

@section('page_title')
    Welcome
@endsection

@section('css')
@endsection

@section('style')
@endsection

@section('content')

    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 -->
                        <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slide1.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('assets/common/images/slide1.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                         id="slide-100-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>

                                    <div class="tp-caption tp-resizeme"
                                         id="slide-100-layer-3"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['100','250','250','190']"
                                         data-fontsize="['20','20','20','20']"
                                         data-lineheight="['30','30','30','30']"
                                         data-width="['800','800','700','420']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;">
                                        <span class="text-uppercase">VEHICLE CARE...</span>
                                    </div>

                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-100-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['150','110','110','70']"
                                         data-fontsize="['55','55','55','36']"
                                         data-lineheight="['60','60','60','46']"
                                         data-width="['800','800','800','800']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;">
                                        <span class="text-uppercase" style="font-family: 'Poppins',sans-serif;">REVITALIZE YOUR <br/><span>RIDE WITH EXPERT</span><br>CARE WORK</span>
                                        <div class="theme-header-border-bottom"></div>
                                    </div>

                                    <!-- LAYER NR. 3 [ for paragraph] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-100-layer-3"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['360','250','250','190']"
                                         data-fontsize="['20','20','20','20']"
                                         data-lineheight="['30','30','30','30']"
                                         data-width="['800','800','700','420']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;">
                                        <span>Precision, Technology and experties come together to deliver the highest standard of automotive care.</span>
                                    </div>

                                    <!-- LAYER NR. 4 [ for readmore botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-100-layer-4"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['460','370','370','370']"
                                         data-fontsize="['none','none','none','none']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-fontweight="['700','700','700','700']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13;">
                                        <a href="javascript:void(0);" class="site-button button-skew"><span>BOOK APPOINTMENT</span><i class="fas fa-angle-right"></i></a>
                                    </div>

                                    <div class="tp-caption tp-resizeme"
                                         id="slide-100-layer-4"
                                         data-x="['left','left','left','left']" data-hoffset="['270','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['460','370','370','370']"
                                         data-fontsize="['none','none','none','none']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-fontweight="['700','700','700','700']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13;">
                                        <a href="javascript:void(0);" class="site-button-secondry button-skew"><span>EXPLORE OUR SERVICES</span><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </li>
                                <!-- SLIDE 2 -->
                                <li data-index="rs-2000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slide2.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('assets/common/images/slide1.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                         id="slide-200-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-200-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['150','110','110','70']"
                                         data-fontsize="['55','55','55','36']"
                                         data-lineheight="['60','60','60','46']"
                                         data-width="['800','800','800','800']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;"> <span class="text-uppercase" style="font-family: 'Poppins',sans-serif;">FIND YOUR <br/> NEXT MATCH</span>
                                    </div>

                                    <!-- LAYER NR. 3 [ for paragraph] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-200-layer-3"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['300','250','250','190']"
                                         data-fontsize="['20','20','20','20']"
                                         data-lineheight="['30','30','30','30']"
                                         data-width="['800','800','700','420']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;">
                                        <span>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy  text ever since the when an unknown printer took a galley of type and scrambled </span>
                                    </div>

                                    <!-- LAYER NR. 4 [ for readmore botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-200-layer-4"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['420','370','370','370']"
                                         data-fontsize="['none','none','none','none']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13;"><a href="about-2.html" class="site-button  button-skew"><span>Read More</span><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </li>
                                <!-- SLIDE 3 -->
                                <li data-index="rs-3000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slide3.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ asset('assets/common/images/slide1.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                         id="slide-300-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-300-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['150','110','110','70']"
                                         data-fontsize="['55','55','55','36']"
                                         data-lineheight="['60','60','60','46']"
                                         data-width="['800','800','800','800']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;"> <span class="text-uppercase" style="font-family: 'Poppins',sans-serif;">FIND YOUR <br/> DREAM CAR</span>
                                    </div>

                                    <!-- LAYER NR. 3 [ for paragraph] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-300-layer-3"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['300','250','250','190']"
                                         data-fontsize="['20','20','20','20']"
                                         data-lineheight="['30','30','30','30']"
                                         data-width="['800','800','700','420']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;">
                                        <span>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the  when an unknown printer took a galley of type and scrambled </span>
                                    </div>

                                    <!-- LAYER NR. 4 [ for readmore botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-300-layer-4"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['420','370','370','370']"
                                         data-fontsize="['none','none','none','none']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"
                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 13;"><a href="about-1.html" class="site-button   button-skew"><span>Read More</span><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div>
        <!-- Slider END -->

        <!-- About Company -->
        <div class="section-full bg-white content-inner-1" style="background-image: url({{ asset('assets/frontend/images/bg-img.png') }}); background-repeat: repeat-x; background-position: left bottom -37px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 about-contant">
                        <div class="m-b20">
                            <h2 class="text-uppercase m-t0 m-b10">Car<span class="text-primary"> Polish</span></h2>
                            <span class="text-secondry font-16">Innovation & Adoption</span>
                            <div class="clear"></div>
                        </div>
                        <p class="m-b30">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing..</p>
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-4 m-b15">
                                <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center">
                                    <div class="icon-bx-sm radius bg-primary m-b5"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
                                    <div class="icon-content">
                                        <h2 class="text-primary m-t20 m-b10"><span class="counter">1800</span>+</h2>
                                        <p>Engineers & Workers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 m-b15">
                                <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center">
                                    <div class="icon-bx-sm radius bg-primary m-b5"> <a href="#" class="icon-cell"><i class="ti-home"></i></a> </div>
                                    <div class="icon-content">
                                        <h2 class="text-primary m-t20 m-b10"><span class="counter">620</span>+</h2>
                                        <p>Factory In Worldwide</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 m-b15">
                                <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center">
                                    <div class="icon-bx-sm radius bg-primary m-b5"> <a href="#" class="icon-cell"><i class="ti-harddrives"></i></a> </div>
                                    <div class="icon-content">
                                        <h2 class="text-primary m-t20 m-b10"><span class="counter">1527</span>+</h2>
                                        <p>Projects Completed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="m-b15">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                        <p class="m-b15">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                        <a href="#" class="site-button">Read More</a>
                    </div>
                    <div class="col-lg-5 about-img">
                        <img src="{{ asset('assets/frontend/images/img2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
        <!-- Our Projects  -->
        <div class="section-full bg-img-fix content-inner overlay-black-middle" style="background-image:url({{ asset('assets/frontend/images/background/bg1.jpg') }});">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="text-uppercase">Our Projects</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-white style-skew"></div>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="site-filters clearfix center  m-b40">
                    <ul class="filters" data-bs-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Show All</span></a> </li>
                        <li data-filter="home" class="btn">
                            <input type="radio" >
                            <a href="#" class="site-button-secondry"><span>Brakes</span></a> </li>
                        <li data-filter="office" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Suspension</span></a> </li>
                        <li data-filter="commercial" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Wheels</span></a> </li>
                        <li data-filter="window" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Steering	</span></a> </li>
                    </ul>
                </div>
                <ul id="masonry" class="row dlab-gallery-listing gallery-grid-4 lightgallery gallery s m-b0">
                    <li class="home card-container col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic1.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic1.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic1.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="office card-container col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow dlab-img-effect zoom"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic2.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic2.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic2.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 commercial">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic3.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic3.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic3.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="commercial card-container col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic4.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic4.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic4.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="window card-container col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic5.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic5.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic5.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="window card-container col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic6.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic6.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic6.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Our Projects END -->
        <!-- OUR SERVICES -->
        <div class="bg-gradient-1">
            <div class="section-full">
                <div class="container">
                    <div class="text-center py-4">
                        <h2 class="text-uppercase text-white mb-0"> OUR SERVICES</h2>
                    </div>
                </div>
            </div>
            <div class="section-full bg-white py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <div class="text-center">
                                <p class="font-26 mb-1">A Better Process. A Better Experience</p>
                                <p class="mb-0">Every vehicle followers a structured process designed around precision, transparency and long-term reliability</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- OUR SERVICES END-->

        <div class="section-full mt-5 bg-img-fix content-inner overlay-black-middle bg-gradient-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="text-white text-center">
                                <h5 class="font-26 font-weight-500">01</h5>
                                <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay"></div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/s-item.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="text-white text-center">
                                <h5 class="font-26 font-weight-500">01</h5>
                                <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay"></div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/s-item.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="text-white text-center">
                                <h5 class="font-26 font-weight-500">01</h5>
                                <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay"></div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/s-item.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="text-white text-center">
                                <h5 class="font-26 font-weight-500">01</h5>
                                <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay"></div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/s-item.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="text-white text-center">
                                <h5 class="font-26 font-weight-500">01</h5>
                                <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay"></div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/s-item.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="text-white text-center">
                                <h5 class="font-26 font-weight-500">01</h5>
                                <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay"></div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/s-item.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Company staus -->
        <div class="section-full text-white bg-img-fix content-inner overlay-black-middle" style="background-image:url({{ asset('assets/frontend/images/background/bg4.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="ti-home m-r20"></i> <span class="counter">1035</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Active Experts</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fas fa-users m-r20"></i> <span class="counter">1226</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Happy Client</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fab fa-slideshare m-r20"></i> <span class="counter">1552</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Workers Hand</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b10">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fas fa-home m-r20"></i> <span class="counter">1156</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Completed Project</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Company staus END -->
        <!-- Team member -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h2 class="text-uppercase"> Meet The Team</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-secondry style-skew"></div>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content text-center ">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media"> <a href="our-team.html"> <img width="358" height="460" alt="" src="{{ asset('assets/frontend/images/our-team/pic1.jpg') }}"> </a>
                                    <div class="dlab-info-has skew-has  bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10">
                                    <h4 class="dlab-title text-uppercase m-b5">Nashid Martines</h4>
                                    <span class="dlab-member-position">Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media"> <a href="our-team.html"> <img width="358" height="460" alt="" src="{{ asset('assets/frontend/images/our-team/pic2.jpg') }}"> </a>
                                    <div class="dlab-info-has skew-has bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10 bg-white">
                                    <h4 class="dlab-title text-uppercase m-b5">konne Backfield</h4>
                                    <span class="dlab-member-position">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media"> <a href="our-team.html"> <img width="358" height="460" alt="" src="{{ asset('assets/frontend/images/our-team/pic3.jpg') }}"> </a>
                                    <div class="dlab-info-has skew-has bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10">
                                    <h4 class="dlab-title text-uppercase m-b5">Hackson Willingham</h4>
                                    <span class="dlab-member-position">Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b10">
                                <div class="dlab-media"> <a href="our-team.html"> <img width="358" height="460" alt="" src="{{ asset('assets/frontend/images/our-team/pic4.jpg') }}"> </a>
                                    <div class="dlab-info-has skew-has bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10">
                                    <h4 class="dlab-title text-uppercase m-b5">konne Backfield</h4>
                                    <span class="dlab-member-position">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team member END -->
        <!-- Latest blog -->
        <div class="section-full content-inner">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Latest blog post</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-secondry style-skew"></div>
                    </div>
                </div>
                <div class="section-content ">
                    <div class="blog-carousel owl-carousel owl-none">
                        <div class="item">
                            <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/blog/latest-blog/pic1.jpg') }}" alt=""></a> </div>
                                <div class="dlab-post-info p-t20">
                                    <div class="dlab-post-title ">
                                        <h3 class="post-title"><a href="blog-half-img-sidebar.html">How Will Autocare Be In The Future</a></h3>
                                    </div>
                                    <div class="dlab-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span> 2022</span> </li>
                                            <li class="post-author"><i class="fas fa-user"></i>By <a href="javascript:void(0);">demongo</a> </li>
                                            <li class="post-comment"><i class="fas fa-comments"></i> <a href="javascript:void(0);">0 comment</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/blog/latest-blog/pic2.jpg') }}" alt=""></a> </div>
                                <div class="dlab-post-info p-t20">
                                    <div class="dlab-post-title ">
                                        <h3 class="post-title"><a href="blog-half-img-sidebar.html">Seven fact about Had Gone Way</a></h3>
                                    </div>
                                    <div class="dlab-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span> 2022</span> </li>
                                            <li class="post-author"><i class="fas fa-user"></i>By <a href="javascript:void(0);">demongo</a> </li>
                                            <li class="post-comment"><i class="fas fa-comments"></i> <a href="javascript:void(0);">0 comment</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/blog/latest-blog/pic3.jpg') }}" alt=""></a> </div>
                                <div class="dlab-post-info p-t20">
                                    <div class="dlab-post-title ">
                                        <h3 class="post-title"><a href="blog-half-img-sidebar.html">10 Things You Didn't Know About us</a></h3>
                                    </div>
                                    <div class="dlab-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span> 2022</span> </li>
                                            <li class="post-author"><i class="fas fa-user"></i>By <a href="javascript:void(0);">demongo</a> </li>
                                            <li class="post-comment"><i class="fas fa-comments"></i> <a href="javascript:void(0);">0 comment</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest blog END -->
        <!-- Testimonials blog -->
        <div class="section-full overlay-black-middle bg-img-fix content-inner-1" style="background-image:url({{ asset('assets/frontend/images/background/bg2.jpg') }});">
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="text-uppercase">What peolpe are saying</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-white  style-skew"></div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="testimonial-four owl-carousel owl-none owl-theme owl-dots-white-full">
                        <div class="item">
                            <div class="testimonial-4 testimonial-bg">
                                <div class="testimonial-pic"><img src="{{ asset('assets/frontend/images/testimonials/pic1.jpg') }}" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                <div class="quote-right"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-4 testimonial-bg">
                                <div class="testimonial-pic"><img src="{{ asset('assets/frontend/images/testimonials/pic2.jpg') }}" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Matin Salva</strong> <span class="testimonial-position">Student</span> </div>
                                <div class="quote-right"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-4 testimonial-bg">
                                <div class="testimonial-pic"><img src="{{ asset('assets/frontend/images/testimonials/pic3.jpg') }}" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Jack Martin</strong> <span class="testimonial-position">Student</span> </div>
                                <div class="quote-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials blog END -->
        <!-- Client logo -->
        <div class="section-full dlab-we-find bg-img-fix p-t50 p-b50 ">
            <div class="container">
                <div class="section-content">
                    <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo1.jpg') }}" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo2.jpg') }}" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo1.jpg') }}" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo3.jpg') }}" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo4.jpg') }}" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo3.jpg') }}" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client logo END -->
    </div>

@endsection

@section('js')
@endsection

@section('script')
@endsection
