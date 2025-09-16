 @extends('main')
 @section('title', 'Home')
 @section('content')



     <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_slider_melody">
         <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
             style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
             <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.2.6">
                 <ul>
                     <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                         data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                         data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                         data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                         data-param9="" data-param10="" data-description="">
                         <img src="images/placeholder.jpeg" alt="" title="slider1" width="1920" height="787"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                             class="rev-slidebg" data-no-retina>
                         <div class="tp-caption BigWhiteText   tp-resizeme" id="slide-1-layer-1" data-x="center"
                             data-hoffset="" data-y="center" data-voffset="-35" data-width="['auto']" data-height="['auto']"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="opacity:0;s:300;" data-mask_in="x:0px;y:0px;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05"
                             style="z-index: 5; white-space: nowrap;">We speak entertainment</div>
                         <div class="tp-caption SmallWhiteText   tp-resizeme" id="slide-1-layer-2" data-x="center"
                             data-hoffset="" data-y="center" data-voffset="26" data-width="['auto']" data-height="['auto']"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                             data-transform_out="opacity:0;s:300;" data-mask_in="x:0px;y:0px;" data-start="3240"
                             data-splitin="none" data-splitout="none" data-responsive_offset="on"
                             style="z-index: 6; white-space: nowrap;"> </div>
                         <div class="tp-caption MelodyButton rev-btn " id="slide-1-layer-3" data-x="center" data-hoffset=""
                             data-y="center" data-voffset="98" data-width="['auto']" data-height="['auto']"
                             data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(233, 30, 99, 1);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:300;" data-start="3510" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" data-responsive="off"
                             style="z-index: 7; white-space: nowrap;text-transform:uppercase;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                             <a href="contact.html">Contact Us</a>
                         </div>
                     </li>
                     <!-- <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                                data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                <img src="images/slider2.jpg" alt="" title="slider2" width="1920" height="787" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                <div class="tp-caption BigWhiteText   tp-resizeme" id="slide-2-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="-35" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="opacity:0;s:300;" data-mask_in="x:0px;y:0px;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">Music is Your World </div>
                                                <div class="tp-caption SmallWhiteText   tp-resizeme" id="slide-2-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="26" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                                                    data-transform_out="opacity:0;s:300;" data-mask_in="x:0px;y:0px;" data-start="3240" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">Don't miss a chance </div>
                                                <div class="tp-caption MelodyButton rev-btn " id="slide-2-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="98" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;"
                                                    data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(92, 200, 191, 1.00);" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;"
                                                    data-start="3510" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 7; white-space: nowrap;text-transform:uppercase;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Start Learning </div>
                                            </li> -->
                     <!-- <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                                data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                <img src="images/slider3.jpg" alt="" title="slider3" width="1920" height="787" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                <div class="tp-caption BigWhiteText   tp-resizeme" id="slide-3-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="-35" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                    data-transform_out="opacity:0;s:300;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.1" style="z-index: 5; white-space: nowrap;">Start With a Note </div>
                                                <div class="tp-caption SmallWhiteText   tp-resizeme" id="slide-3-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="26" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                                                    data-transform_out="opacity:0;s:300;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="3240" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">Awaken possibility </div>
                                                <div class="tp-caption MelodyButton rev-btn " id="slide-3-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="98" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;"
                                                    data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(92, 200, 191, 1.00);" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;"
                                                    data-start="3510" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 7; white-space: nowrap;text-transform:uppercase;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Start Learning </div>
                                            </li> -->
                 </ul>
                 <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
             </div>
         </div>

     </section>
     <div class="page_content_wrap page_paddings_no">
         <div class="content_wr">
             <div class="content">
                 <article
                     class="itemscope post_item post_item_single post_featured_default post_format_standard post-301 page type-page hentry">
                     <section class="post_content" itemprop="articleBody">


                         <div class="vc_row wpb_row vc_row-fluid">
                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                 <div class="vc_column-inner block_1462864288916">
                                     <div class="wrap">
                                         <div class="sc_promo margin_top_huge margin_bottom_huge sc_promo_size_large">
                                             <div class="sc_promo_inner">
                                                 <div class="sc_promo_image"
                                                     style="background-image:url(images/download\ \(3\)\ \(1\).jpeg);width:49%;left: 0;">
                                                 </div>
                                                 <div class="sc_promo_block sc_align_left"
                                                     style="width: 51%; float: right; ">
                                                     <div class="sc_promo_block_inner">
                                                         <h1 class="sc_promo_title sc_item_title" style="color:#e91e63">
                                                             About Us</h1>
                                                         <div class="sc_promo_descr sc_item_descr">Lorem ipsum dolor sit
                                                             amet consectetur adipisicing elit. Accusantium dicta saepe
                                                             consequuntur officia culpa fugiat impedit officiis tenetur
                                                             provident temporibus, eius expedita quaerat minus cupiditate
                                                             eum voluptate delectus dolorem sed!<br /> Lorem ipsum dolor sit
                                                             amet consectetur adipisicing elit. Assumenda, consectetur.
                                                         </div>
                                                         <!-- <div class="sc_promo_button sc_item_button"><a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">Register now</a></div> -->
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="vc_row wpb_row vc_row-fluid block_1462865672215">
                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                 <div class="vc_column-inner block_1462867913397">
                                     <div class="wrap">
                                         <div class="sc_section">
                                             <div class="sc_section_inner">
                                                 <h1 class="sc_section_title sc_item_title">our clients</h1>
                                                 <h4 class="sc_section_subtitle sc_item_subtitle">are</h4>
                                                 <div class="sc_section_content_wrap">
                                                     <div id="sc_services_1232094271_wrap" class="sc_services_wrap">
                                                         <div id="sc_services_1232094271"
                                                             class="sc_services sc_services_style_services-1 sc_services_type_images  margin_top_medium">
                                                             <div class="sc_columns columns_wrap">
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1232094271_1"
                                                                         class="sc_services_item sc_services_item_1 odd first">
                                                                         <div
                                                                             class="sc_services_item_featured post_featured">
                                                                             <div class="post_thumb"
                                                                                 data-image="images/services-3.jpg"
                                                                                 data-title="Kids">
                                                                                 <a class="hover_icon hover_icon_link"
                                                                                     href="#"><img width="150"
                                                                                         height="500" alt="Kids"
                                                                                         src="images/download (3) (2).jpeg"></a>
                                                                             </div>
                                                                         </div>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href="#"
                                                                                     style="color:#e91e63">name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p>desc</p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1232094271_2"
                                                                         class="sc_services_item sc_services_item_2 even">
                                                                         <div
                                                                             class="sc_services_item_featured post_featured">
                                                                             <div class="post_thumb"
                                                                                 data-image="images/services-2.jpg"
                                                                                 data-title="Teens">
                                                                                 <a class="hover_icon hover_icon_link"
                                                                                     href="#"><img
                                                                                         class="wp-post-image"
                                                                                         width="370" height="370"
                                                                                         alt="Teens"
                                                                                         src="images/download (3) (2).jpeg"></a>
                                                                             </div>
                                                                         </div>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href="#"
                                                                                     style="color:#e91e63">name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p>desc</p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1232094271_3"
                                                                         class="sc_services_item sc_services_item_3 odd">
                                                                         <div
                                                                             class="sc_services_item_featured post_featured">
                                                                             <div class="post_thumb"
                                                                                 data-image="images/services-1.jpg"
                                                                                 data-title="Adults">
                                                                                 <a class="hover_icon hover_icon_link"
                                                                                     href="#"><img
                                                                                         class="wp-post-image"
                                                                                         width="370" height="370"
                                                                                         alt="Adults"
                                                                                         src="images/download (3) (2).jpeg"></a>
                                                                             </div>
                                                                         </div>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href="#"
                                                                                     style="color:#e91e63">name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p>desc</p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1232094271_4"
                                                                         class="sc_services_item sc_services_item_4 even">
                                                                         <div
                                                                             class="sc_services_item_featured post_featured">
                                                                             <div class="post_thumb"
                                                                                 data-image="images/image-7.jpg"
                                                                                 data-title="Private lessons">
                                                                                 <a class="hover_icon hover_icon_link"
                                                                                     href="#"><img
                                                                                         class="wp-post-image"
                                                                                         width="370" height="370"
                                                                                         alt="Private lessons"
                                                                                         src="images/download (3) (2).jpeg"></a>
                                                                             </div>
                                                                         </div>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href="#"
                                                                                     style="color:#e91e63">name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p>desc</p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>



                         <div class="vc_row wpb_row vc_row-fluid">
                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                 <div class="vc_column-inner block_1462871605781">
                                     <div class="wrap">
                                         <div class="sc_section">
                                             <div class="sc_section_inner">
                                                 <h1 class="sc_section_title sc_item_title">entertainment</h1>
                                                 <h4 class="sc_section_subtitle sc_item_subtitle" style="color:#e91e63">
                                                     categories</h4>
                                                 <div class="sc_section_content_wrap">
                                                     <div id="sc_services_1762700759_wrap" class="sc_services_wrap">
                                                         <div id="sc_services_1762700759"
                                                             class="sc_services sc_services_style_services-1 sc_services_type_icons  margin_top_medium margin_bottom_medium">
                                                             <div class="sc_columns columns_wrap">
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1762700759_1"
                                                                         class="sc_services_item sc_services_item_1 odd first">
                                                                         <a href="#"><span
                                                                                 class="sc_icon icon-icon1"></span></a>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href="#"
                                                                                     style="color:#e91e63">name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p>desc</p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1762700759_2"
                                                                         class="sc_services_item sc_services_item_2 even">
                                                                         <a href="#"><span
                                                                                 class="sc_icon icon-icon2"></span></a>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href="#" style="color:#e91e63">
                                                                                     name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p>desc</p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1762700759_3"
                                                                         class="sc_services_item sc_services_item_3 odd">
                                                                         <a href="#"><span
                                                                                 class="sc_icon icon-icon3"></span></a>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href="#"
                                                                                     style="color:#e91e63">name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p>desc</p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1762700759_4"
                                                                         class="sc_services_item sc_services_item_4 even">
                                                                         <a href="#"><span
                                                                                 class="sc_icon icon-icon4"></span></a>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href="#" style="color:#e91e63">
                                                                                     name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p> desc</p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1762700759_5"
                                                                         class="sc_services_item sc_services_item_5 odd">
                                                                         <a href="# "><span
                                                                                 class="sc_icon icon-icon5"></span></a>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href=" #" style="color:#e91e63">
                                                                                     name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p> desc </p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1762700759_6"
                                                                         class="sc_services_item sc_services_item_6 even">
                                                                         <a href=" #"><span
                                                                                 class="sc_icon icon-icon6"></span></a>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href=" #"
                                                                                     style="color:#e91e63">name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p> desc</p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1762700759_7"
                                                                         class="sc_services_item sc_services_item_7 odd">
                                                                         <a href="#"><span
                                                                                 class="sc_icon icon-icon7"></span></a>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href="#"
                                                                                     style="color:#e91e63">name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p> desc</p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_4 column_padding_bottom">
                                                                     <div id="sc_services_1762700759_8"
                                                                         class="sc_services_item sc_services_item_8 even">
                                                                         <a href=" #"><span
                                                                                 class="sc_icon icon-icon8"></span></a>
                                                                         <div class="sc_services_item_content">
                                                                             <h3 class="sc_services_item_title"><a
                                                                                     href=" #"
                                                                                     style="color:#e91e63">name</a></h3>
                                                                             <div class="sc_services_item_description">
                                                                                 <p> desc</p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                 <div class="vc_column-inner ">
                                     <div class="wpb_wrapper">
                                         <div class="sc_parallax" data-parallax-speed="0" data-parallax-x-pos="50%"
                                             data-parallax-y-pos="50%">
                                             <div class="sc_parallax_content"
                                                 style="background-image:url(images/download\ \(3\)\ \(4\).jpeg); background-position:50% 50%;">
                                                 <div class="sc_content content_wrap">
                                                     <h1 class="sc_title sc_title_regular sc_align_center margin_top_huge"
                                                         style="margin-bottom: 1.55rem;text-align:center;color:#ffffff;">
                                                         name</h1>
                                                     <div class="sc_section aligncenter" style="max-width: 590px;">
                                                         <div class="sc_section_inner">
                                                             <div class="sc_section_content_wrap"><span
                                                                     class="sc_highlight"
                                                                     style="color:#ffffff;font-size:1.3846em; line-height: 1.4em;">desc</span>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div id="sc_skills_diagram_146952702"
                                                         class="sc_skills sc_skills_counter margin_bottom_large"
                                                         style="margin-top: 1.5rem;" data-type="counter"
                                                         data-caption="Skills">
                                                         <div class="columns_wrap sc_skills_columns sc_skills_columns_4">
                                                             <div class="sc_skills_column column-1_4">
                                                                 <div class="sc_skills_item sc_skills_style_2 odd first">
                                                                     <div class="sc_skills_icon none"></div>
                                                                     <div class="sc_skills_count"></div>
                                                                     <div class="sc_skills_total" data-start="0"
                                                                         data-stop="231" data-step="2" data-max="231"
                                                                         data-speed="17" data-duration="1964"
                                                                         data-ed="">0</div>
                                                                     <div class="sc_skills_info">
                                                                         <div class="sc_skills_label">name</div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="sc_skills_column column-1_4">
                                                                 <div class="sc_skills_item sc_skills_style_2 even">
                                                                     <div class="sc_skills_icon none"></div>
                                                                     <div class="sc_skills_count"></div>
                                                                     <div class="sc_skills_total" data-start="0"
                                                                         data-stop="14" data-step="2" data-max="231"
                                                                         data-speed="36" data-duration="252"
                                                                         data-ed="">0</div>
                                                                     <div class="sc_skills_info">
                                                                         <div class="sc_skills_label">name</div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="sc_skills_column column-1_4">
                                                                 <div class="sc_skills_item sc_skills_style_2 odd">
                                                                     <div class="sc_skills_icon none"></div>
                                                                     <div class="sc_skills_count"></div>
                                                                     <div class="sc_skills_total" data-start="0"
                                                                         data-stop="32" data-step="2" data-max="231"
                                                                         data-speed="17" data-duration="272"
                                                                         data-ed="">0</div>
                                                                     <div class="sc_skills_info">
                                                                         <div class="sc_skills_label">name</div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="sc_skills_column column-1_4">
                                                                 <div class="sc_skills_item sc_skills_style_2 even">
                                                                     <div class="sc_skills_icon none"></div>
                                                                     <div class="sc_skills_count"></div>
                                                                     <div class="sc_skills_total" data-start="0"
                                                                         data-stop="21" data-step="2" data-max="231"
                                                                         data-speed="29" data-duration="305"
                                                                         data-ed="">0</div>
                                                                     <div class="sc_skills_info">
                                                                         <div class="sc_skills_label">name</div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="vc_empty_space" style="height: 1.7em"><span
                                                             class="vc_empty_space_inner"></span></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>


                         <div class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="padding-top: 50px;">
                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                 <div class="vc_column-inner ">
                                     <div class="wpb_wrapper">
                                         <div class="sc_parallax" data-parallax-speed="0.15" data-parallax-x-pos="50%"
                                             data-parallax-y-pos="50%">
                                             <div class="sc_parallax_content"
                                                 style="background-image:url(images/download\ \(3\)\ \(4\).jpeg); background-position:50% 50%;">
                                                 <div class="sc_content content_wrap margin_top_huge margin_bottom_huge">
                                                     <div id="sc_testimonials_22531939"
                                                         class="sc_testimonials sc_testimonials_style_testimonials-1  no_image">
                                                         <div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_side"
                                                             data-interval="5235" data-slides-min-width="250">
                                                             <div class="slides swiper-wrapper">
                                                                 <div class="swiper-slide">
                                                                     <div id="sc_testimonials_22531939_1"
                                                                         class="sc_testimonial_item">
                                                                         <div class="sc_testimonial_avatar"><img
                                                                                 class="wp-post-image" width="184"
                                                                                 height="184" alt="Louise Flores"
                                                                                 src="images/testimonials-2-184x184.jpg">
                                                                         </div>
                                                                         <div class="sc_testimonial_content">
                                                                             <p>testimonial</p>
                                                                         </div>
                                                                         <!-- <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Louise Flores</span><span class="sc_testimonial_author_position"> </span></div> -->
                                                                     </div>
                                                                 </div>
                                                                 <div class="swiper-slide">
                                                                     <div id="sc_testimonials_22531939_2"
                                                                         class="sc_testimonial_item">
                                                                         <div class="sc_testimonial_avatar"><img
                                                                                 class="wp-post-image" width="184"
                                                                                 height="184" alt="Diana Jones"
                                                                                 src="images/testimonials-1-184x184.jpg">
                                                                         </div>
                                                                         <div class="sc_testimonial_content">
                                                                             <p>testimonial</p>
                                                                         </div>
                                                                         <!-- <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Diana Jones</span><span class="sc_testimonial_author_position"> / parent</span></div> -->
                                                                     </div>
                                                                 </div>
                                                                 <div class="swiper-slide">
                                                                     <div id="sc_testimonials_22531939_3"
                                                                         class="sc_testimonial_item">
                                                                         <div class="sc_testimonial_avatar"><img
                                                                                 class="wp-post-image" width="184"
                                                                                 height="184" alt="Martin Wood"
                                                                                 src="images/testimonials-3-184x184.jpg">
                                                                         </div>
                                                                         <div class="sc_testimonial_content">
                                                                             <p>testimonial</p>
                                                                         </div>
                                                                         <!-- <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Martin Wood</span><span class="sc_testimonial_author_position"></span></div> -->
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="sc_slider_controls_wrap">
                                                                 <a class="sc_slider_prev" href="#"></a>
                                                                 <a class="sc_slider_next" href="#"></a>
                                                             </div>
                                                             <div class="sc_slider_pagination_wrap"></div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="vc_row wpb_row vc_row-fluid">
                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                 <div class="vc_column-inner block_1462879879894">
                                     <div class="wrap">
                                         <div class="sc_section aligncenter" style="max-width: 1020px; ">
                                             <div class="sc_section_inner">
                                                 <h1 class="sc_section_title sc_item_title">Our Team</h1>
                                                 <!-- <h6 class="sc_section_subtitle sc_item_subtitle">staff</h6> -->
                                                 <div class="sc_section_content_wrap">
                                                     <div id="sc_team_1886262499_wrap" class="sc_team_wrap">
                                                         <div id="sc_team_1886262499"
                                                             class="sc_team sc_team_style_team-1  margin_top_medium margin_bottom_medium">
                                                             <div class="sc_columns columns_wrap">
                                                                 <div class="column-1_3 column_padding_bottom">
                                                                     <div id="sc_team_1886262499_1"
                                                                         class="sc_team_item sc_team_item_1 odd first">
                                                                         <div class="sc_team_item_avatar">
                                                                            <img
                                                                                 class="wp-post-image"
                                                                                 style="width: 150px;height: 150px;border-radius: 50%; transition:none;"
                                                                                 src="images/download (3) (1).jpeg"></div>
                                                                         <div class="sc_team_item_info">
                                                                             <h3 class="sc_team_item_title"><a
                                                                                     href="single-member.html">name</a>
                                                                             </h3>
                                                                             <div class="sc_team_item_position">position
                                                                             </div>
                                                                             <div
                                                                                 class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                                                 <!-- <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
                                                                                                        <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
                                                                                                        <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_gplus"><span class="icon-gplus"></span></a></div> -->
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_3 column_padding_bottom">
                                                                     <div id="sc_team_1886262499_2"
                                                                         class="sc_team_item sc_team_item_2 even">
                                                                         <div class="sc_team_item_avatar"><img
                                                                                 class="wp-post-image"
                                                                                 style="width: 150px;height: 150px;border-radius: 50%;"
                                                                                 src="images/download (3) (1).jpeg"></div>
                                                                         <div class="sc_team_item_info">
                                                                             <h3 class="sc_team_item_title"><a
                                                                                     href="single-member.html">name</a>
                                                                             </h3>
                                                                             <div class="sc_team_item_position">position
                                                                             </div>
                                                                             <div
                                                                                 class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                                                 <!-- <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
                                                                                                        <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
                                                                                                        <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_gplus"><span class="icon-gplus"></span></a></div> -->
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="column-1_3 column_padding_bottom">
                                                                     <div id="sc_team_1886262499_3"
                                                                         class="sc_team_item sc_team_item_3 odd">
                                                                         <div class="sc_team_item_avatar"><img
                                                                                 class="wp-post-image"
                                                                                 style="width: 150px;height: 150px;border-radius: 50%;"
                                                                                 src="images/download (3) (1).jpeg"></div>
                                                                         <div class="sc_team_item_info">
                                                                             <h3 class="sc_team_item_title"><a
                                                                                     href="single-member.html">name</a>
                                                                             </h3>
                                                                             <div class="sc_team_item_position"> position
                                                                             </div>
                                                                             <div
                                                                                 class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                                                 <!-- <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
                                                                                                        <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
                                                                                                        <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_gplus"><span class="icon-gplus"></span></a></div> -->
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>


                     </section>
                 </article>
                 <section class="related_wrap related_wrap_empty"></section>
             </div>
         </div>
     </div>


 @endsection
