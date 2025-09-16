 @extends('main')
 @section('title', 'About')
 @section('content')

 
    <style>
        /* Base styles */
   
        
  
        
    
        
    
        #top-padding {
            padding-top: 130px;
        }
     
        
        .aligncenter {
            text-align: center;
        }
        
 
        
        .sc_section_inner {
            padding: 20px;

            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-direction: column;
        }
        
        /* Parallax section */
        .sc_parallax {
            position: relative;
            overflow: hidden;
            min-height: 400px;
            margin: 2rem 0;
        }
        
        .sc_parallax_content {
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .sc_content {
            color: white;
            text-align: center;
            padding: 2rem;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 5px;
            max-width: 90%;
        }
        
        /* Stats counter */
        .sc_skills_counter {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        
        .sc_skills_column {
            flex: 1;
            min-width: 200px;
            text-align: center;
            padding: 1rem;
        }
        
        .sc_skills_total {
            font-size: 2.5rem;
            font-weight: bold;
            color: #e91e63;
            margin: 0.5rem 0;
        }
        
        .sc_skills_label {
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
  
        
        .column-1_3 {
            flex: 0 0 33.333%;
            max-width: 33.333%;
            padding: 15px;
            box-sizing: border-box;
        }
        
        .sc_team_item {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .sc_team_item_avatar img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            max-width: 250px;
        }
        
        .sc_team_item_title {
            margin: 1rem 0 0.5rem;
        }
        
        .sc_team_item_position {
            color: #7f8c8d;
            font-style: italic;
            margin-bottom: 1rem;
        }
        
        /* Story and Mission sections */
  
        
 
        
        .about-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .two-column {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }
        
        .column {
            flex: 1;
            min-width: 300px;
        }
        
        .highlight-box {
             color: #333745b3;
            padding: 25px;
            border-radius: 5px;
            margin: 20px 0;
        }
        @media (max-width: 1135px) {
      #top-padding {
             padding-top: 0;
         }
    }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .column-1_3 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            
            .sc_skills_column {
                min-width: 50%;
            }
        }
    </style>
 
 
    <div class="page_content_wrap page_paddings_no">
        <div class="c_wrap">
            <div class="content">
                <article class="itemscope post_item post_item_single post_featured_default post_format_standard post-228 page type-page hentry">
                    <section class="post_content" itemprop="articleBody">
                        <!-- Header Section -->
                        <div class="vc_row wpb_row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner block_1462455368545">
                                    <div class="wrap">
                                        <div class="sc_section margin_bottom_large aligncenter" style="max-width: 940px;" id="top-padding">
                                            <div class="sc_section_inner">
                                                <h1 class="sc_section_title sc_item_title">About</h1>
                                                <h6 class="sc_section_subtitle sc_item_subtitle" style="color: #e91e63">MOVIDA</h6>
                                                <div class="sc_section_content_wrap">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>Our professional approach and continual development has led us to becoming the leading provider of professional music education. We combine innovative, fun and creative ways to teach music and engage with students to reach their full potential. Innovative music lessons and classes from beginner through advanced for children, teens, and adults. We are the best music school for you. We have programs to suit everyone's needs.</p>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_text_column wpb_content_element  block_1463063670281">
                                                        <div class="wpb_wrapper">
                                                            <p>We are the only professional music school offering lessons for children, adults and seniors.</p>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_text_column wpb_content_element  block_1462455262402">
                                                        <div class="wpb_wrapper">
                                                            <p>Peter Caroll</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       

                        <!-- Mission & Vision Section -->
                        <div class="vc_row wpb_row about-section alternate">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wrap">
                                        <div class="sc_section aligncenter">
                                            <div class="sc_section_inner">
                                                <h1 class="sc_section_title sc_item_title">Mission & Vision</h1>
                                                <h6 class="sc_section_subtitle sc_item_subtitle" style="color: #e91e63">what drives us</h6>
                                                <div class="sc_section_content_wrap">
                                                    <div class="about-content">
                                                        <div class="two-column">
                                                            <div class="column">
                                                                <div class="highlight-box">
                                                                    <h3 style="color: #e91e63; margin-top: 0;">Our Mission</h3>
                                                                    <p>To provide exceptional music education that inspires creativity, builds confidence, and nurtures personal growth through the transformative power of music. We are committed to making quality music education accessible to people of all ages, backgrounds, and skill levels.</p>
                                                                </div>
                                                            </div>
                                                            <div class="column">
                                                                <div class="highlight-box">
                                                                    <h3 style="color: #e91e63; margin-top: 0;">Our Vision</h3>
                                                                    <p>To be recognized as the leading community music school that cultivates musical excellence while fostering a deep, lifelong appreciation for the arts. We envision a community where everyone has the opportunity to experience the joy and fulfillment that comes from making music.</p>
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

                  

                        <!-- Teachers Section -->
                 	<div class="vc_row wpb_row">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner ">
											<div class="wrap">
												<div class="sc_section aligncenter" style="max-width: 1020px;">
													<div class="sc_section_inner">
														<h1 class="sc_section_title sc_item_title">Our Team</h1>
														{{-- <h6 class="sc_section_subtitle sc_item_subtitle">staff</h6> --}}
														<div class="sc_section_content_wrap">
															<div id="sc_team_193910133_wrap" class="sc_team_wrap">
																<div id="sc_team_193910133" class="sc_team sc_team_style_team-1  margin_top_medium margin_bottom_medium">
																	<div class="sc_columns columns_wrap">
																		<div class="column-1_3 column_padding_bottom">
																			<div id="sc_team_193910133_1" class="sc_team_item sc_team_item_1 odd first">
																				<div class="sc_team_item_avatar"><img class="wp-post-image"    style="width: 225px; height: 225px" src="images/download (3) (1).jpeg"></div>
																				<div class="sc_team_item_info">
																					<h3 class="sc_team_item_title"><a href="single-member.html">name</a></h3>
																					<div class="sc_team_item_position">position</div>
																					{{-- <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
																						<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
																						<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
																						<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_gplus"><span class="icon-gplus"></span></a></div>
																					</div> --}}
																				</div>
																			</div>
																		</div><div class="column-1_3 column_padding_bottom">
																			<div id="sc_team_193910133_2" class="sc_team_item sc_team_item_2 even">
																				<div class="sc_team_item_avatar"><img class="wp-post-image"   style="width: 225px; height: 225px" src="images/download (3) (1).jpeg"></div>
																				<div class="sc_team_item_info">
																					<h3 class="sc_team_item_title"><a href="single-member.html">name</a></h3>
																					<div class="sc_team_item_position">position</div>
																					{{-- <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
																						<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
																						<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
																						<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_gplus"><span class="icon-gplus"></span></a></div>
																					</div> --}}
																				</div>
																			</div>
																		</div><div class="column-1_3 column_padding_bottom">
																			<div id="sc_team_193910133_3" class="sc_team_item sc_team_item_3 odd">
																				<div class="sc_team_item_avatar"><img class="wp-post-image" style="width: 225px; height: 225px" src="images/download (3) (1).jpeg"></div>
																				<div class="sc_team_item_info">
																					<h3 class="sc_team_item_title"><a href="single-member.html">name</a></h3>
																					<div class="sc_team_item_position">position</div>
																					{{-- <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
																						<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
																						<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
																						<div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_gplus"><span class="icon-gplus"></span></a></div>
																					</div> --}}
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
