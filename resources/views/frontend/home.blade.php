@extends('frontend.template.layout')

@section('content')
<!-- =====================================
        ==== Start Hero -->
        
        <section class="hero section-padding pb-0" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 text-center mb-80">
                        <h4 class="extra-text">We Are <span>Innovative </span> IT Solution Group.</h4>
                        <p>
We are willing to offer top-notch performances at reasonable prices, modern designs and suitable UI/UX which can also be advanced with others update packages through current IT trend. We do assure for your satisfaction in terms of reliable products and efficient on our services.</p>
                    </div>

                    <div class="col-lg-7">
                        <div class="mission">

                            <div class="section-head mb-30">
                                <h4><span>Our</span><br>
                                    Mission
                                </h4>
                            </div>

                            <p>To empower international economic and humanitarian organizations by providing creative Web Design and Professional development services at advance price. We are fully authentic to polish your organization's dignity and development with our competitive performance.</p>

                            <!--a  class="vid" href="https://vimeo.com/127203262">
                                <i class="icofont icofont-ui-play"></i>
                                <span class="small-text">Watch Our Story</span>
                            </a-->

                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="skills">

                            <div class="prog-item">
                                <p>Branding</p>
                                <div class="skills-progress"><span data-value='70%'></span></div>
                            </div>
                            <div class="prog-item">
                                <p>Web Design</p>
                                <div class="skills-progress"><span data-value='90%'></span></div>
                            </div>
                            <div class="prog-item">
                                <p>Graphic Design</p>
                                <div class="skills-progress"><span data-value='50%'></span></div>
                            </div>
                            <div class="prog-item">
                                <p>Development</p>
                                <div class="skills-progress"><span data-value='60%'></span></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="feat bg-gray pt-80 pb-50 mt-80">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-brand-copy"></i></span>
                                <h6>Privcay</h6>
                                <p>We fully respect your rights to privacy, and we firm insure about your organization’s information which could be confidential. We prioritize all your data to be secure and which will be treated with the highest standard of security in accordance with the data backup protection.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-chart-pie-alt"></i></span>
                                <h6>Development</h6>
                                <p>We are immersing our effort to produce the newly products and services with a view to apply in the current age of alternative IT trend. Organized layouts and modernized designs will make your website look professional in advance of promoting clients’ impression. 
Our experienced developers are always assuring the quality of finished product before delivering to the customers. 
</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-chart-histogram-alt"></i></span>
                                <h6>Marketing</h6>
                                <p>Grow your market area by opting our professional business softwares, and peak your company on the top position of website ranking utilizing our best services. We mainly focus on your business operating system to run powerfully and least wasting time and expenses for your relief work in order to deliever satisfying results.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- End Hero ====
        ======================================= -->


        <!-- =====================================
        ==== Start Quote -->
        
        <div class="quote bg-img" data-overlay-dark="8" data-background="img/1.jpg" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-6 col-lg-6 quote-text">
                        <span class="icon"><i class="icofont icofont-quote-left"></i></span>
                        <p>To hook better network for your future opportunites even if you need to pay money, do invest for that as the impacts will be truly deserved than you expenses.</p>
                        <h5>Bamaw Thein Phay</h5>
                        <h6>Myanmar Motivational Author</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Quote ====
        ======================================= -->


        <!-- =====================================
        ==== Start Portfolio -->
        
        <section class="portfolio section-padding" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            Portfolio
                        </h4>
                    </div>

                    <!-- filter links -->
                    <div class="filtering col-sm-12">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.brand'>Brand</span>
                        <span data-filter='.web'>Design</span>
                        <span data-filter='.graphic'>Graphic</span>
                    </div>

                    <div class="clearfix"></div>

                    <!-- gallery -->
                    <div class="gallery text-center full-width">

                        <!-- gallery item -->
                        <div class="col-md-4 items graphic">
                            <div class="item-img">
                                <img src="frontend/img/portfolio/Capture3.png" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="frontend/img/portfolio/Capture3.png" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-8 items web">
                            <div class="item-img">
                                <img src="frontend/img/portfolio/SWL.png" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="frontend/img/portfolio/SWL.png" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-4 items brand">
                            <div class="item-img">
                                <img src="frontend/img/portfolio/Logo PSD.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="frontend/img/portfolio/Logo PSD.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-4 items graphic">
                            <div class="item-img">
                                <img src="frontend/img/portfolio/fourthregionalSWL.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="frontend/img/portfolio/fourthregionalSWL.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-4 items web">
                            <div class="item-img">
                                <img src="frontend/img/portfolio/Capture.png" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="frontend/img/portfolio/Capture.png" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-8 items brand">
                            <div class="item-img">
                                <img src="frontend/img/portfolio/Capture3.png" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="frontend/img/portfolio/Capture3.png" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-4 items web">
                            <div class="item-img">
                                <img src="frontend/img/portfolio/Capture1.png" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="frontend/img/portfolio/Capture1.png" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="clear-fix"></div>

                    </div>

                </div>
            </div>
        </section>

        <!-- End Portfolio ====
        ======================================= -->


        <!-- =====================================
        ==== Start Numbers -->
        
        <div class="numbers section-padding bg-img" data-overlay-dark="6" data-background="{!! asset('/frontend/img/bg2.png') !!}">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center mb-md50">
                            <span class="icon"><i class="icofont icofont-users-alt-3"></i></span>
                            <h2 class="count">368</h2>
                            <h6>Happy Clients</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center mb-md50">
                            <span class="icon"><i class="icofont icofont-briefcase-alt-2"></i></span>
                            <h2 class="count">937</h2>
                            <h6>Projects Compleated</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center mb-sm50">
                            <span class="icon"><i class="icofont icofont-brainstorming"></i></span>
                            <h2 class="count">438</h2>
                            <h6>Business Partners</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center">
                            <span class="icon"><i class="icofont icofont-growth"></i></span>
                            <h2 class="count">5946</h2>
                            <h6>Liens Of Code</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- End Numbers ====
        ======================================= -->


        <!-- =====================================
        ==== Start Services -->
        
        <section class="services section-padding pb-70" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Awesome</span><br>
                            Top Features
                        </h4>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-laptop"></i></span>
                            <h6>Creative Design</h6>
                            <p>We incorporate Golden Ratio to provide modernized page layouts, harmonious logos and graphic designs which will make your website look professional in advance of promoting clients’ impression.</p>
                            <span>More</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-globe-alt"></i></span>
                            <h6>User Experience</h6>
                            <p>Functionality of website makes the user enjoyable to utilize and it is easy to learn for all ages. In fact, website’s navigation is easily found and used for the clients which allows to enhance company’s market places.</p>
                            <span>More</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-rocket-alt-2"></i></span>
                            <h6>Customizability</h6>
                            <p>With great emphasis on user-centered design, we have evaluated the testing methods of usability for user to utilize and easy to upgrade ongoing web progress. Website’s system enables users to modify the templates and customize the factors moving items around an interface to meet their priorities.</p>
                            <span>More</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-image"></i></span>
                            <h6>Maintenance</h6>
                            <p>As a leading web development company, Grace Myanmar offers several website maintenance packages that can address these needs. We will be responsible for the relevant requirements to maintain your website in 6 months’ duration and following requests of website’s maintenance will be charge with suit fees.</p>
                            <span>More</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-samsung-galaxy"></i></span>
                            <h6>Fully Responsive</h6>
                            <p>Responsive websites are the great potentials! They let your site to adjust different screen sizes on vary devices which means that your web visitors can get the best possible visualization of your business or services. This Grace Myanmar website itself is responsive, so if you view us on a mobile, tablet or desktop you will see how the layout changes to be the best of the available screen size.</p>
                            <span>More</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-ui-settings"></i></span>
                            <h6>Custom Support</h6>
                            <p>The Grace Myanmar website maintenance team has enough experiences to prompt support and fix any Web application code and complains the facts that are supposed to be identified and addressed. This service inquiry may include, but it is not limited to, visual presentation problems (layout and markup), logical and computational problems (JavaScript and PHP), interactivity issues (JavaScript), errors in data (database administration), and problem occurring from the differences concerning web browsers.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- End Services ====
        ======================================= -->


        <!-- =====================================
        ==== Start Services Tabs -->

        <section class="serv-tabs section-padding bg-img" data-overlay-dark="7" data-background="img/4.jpg" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    
                     <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            Services
                        </h4>
                    </div>

                    <div class="tabs col-sm-12">

                        <div class="content">
                            <div id="tab-1-content" class="tab-item curent">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p>Grace Myanmar is a Network-based business platform that incorporates operations and customer channels with systematic point-of-sale (POS) functionality in a particular dashboard. It is convenient for stores, restaurants and companies of all sizes and affords users with a POS system with integrated inventory management, customer management and social media management functionalities.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p>Grace Myanmar offers a data analytics software that manipulates sales, order record, payment summaries and presents the data in daily, monthly and yearly reports.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-2-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p>Your will have asset to facilitate more constructive workforce management and releases much needed time to advance critical payroll, recruitment and labour relations issues will be addressed with more systematically. </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p>Your company’s management team will be upgraded with architecture visualization through Human Resource Information System (HRIS) to cope daily challenges facing employee engagement and drive the organization’s progress slightly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-3-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p>We deliver the choicest high-ranking website in the manner of unique officials serving 24 hours on the sales and marketing to all clients around the world.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p>Possess private web mail with the address of your company and obtain 24 hours online marketing services. Keep in touch with your clients through the social media proudly using secure and unique IT technologies.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-4-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p>First, believe yourself that you can set up the business company in which your customers are able to charge simply. Then, we can offer you the best trading system with waste less productivity to fulfil your client’s satisfaction.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p>Full data for stocks will be supportive on your site and presents well to your customers. All your consumers can make prompt choices to purchase the products and easily pay by credit cards electronically. With full of our authentic services, you can run your business in any time, anywhere and shipping times will be quicker.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tabs-icon row">

                            <div id="tab-1" class="col-md-3 col-sm-6 active item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-laptop-alt"></i></span>
                                    <h6>Point Of Sales</h6>
                                </div>
                            </div>

                            <div id="tab-2" class="col-md-3 col-sm-6 item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-brand-htc"></i></span>
                                    <h6>Human Resource</h6>
                                </div>
                            </div>

                            <div id="tab-3" class="col-md-3 col-sm-6 item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-idea"></i></span>
                                    <h6>Web-Sites</h6>
                                </div>
                            </div>

                            <div id="tab-4" class="col-md-3 col-sm-6 item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-touch"></i></span>
                                    <h6>E-Commerce</h6>
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Services Tabs ====
        ======================================= -->


         <!-- =====================================
        ==== Start Team -->

        <section class="team section-padding">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            Creative Team
                        </h4>
                    </div>

                    <div class="owl-carousel owl-theme col-sm-12">
                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="{!! asset('/frontend/img/team/1.jpg') !!}" alt="">
                            </div>
                            <div class="info">
                                <h6>Yar Zar Lin Aung.</h6>
                                <span>Project Consultant</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="{!! asset('/frontend/img/team/2.jpg') !!}" alt="">
                            </div>
                            <div class="info">
                                <h6>Zayar Myo.</h6>
                                <span>Bridge System Engineer</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="{!! asset('/frontend/img/team/3.jpg') !!}" alt="">
                            </div>
                            <div class="info">
                                <h6>Kaung Khant Zin.</h6>
                                <span>Technical Leader</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="{!! asset('/frontend/img/team/4.jpg') !!}" alt="">
                            </div>
                            <div class="info">
                                <h6>Jack Feeedom.</h6>
                                <span>Marketing Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="{!! asset('/frontend/img/team/5.jpg') !!}" alt="">
                            </div>
                            <div class="info">
                                <h6>Zaw Win Ge.</h6>
                                <span>Marketing Cousultant</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                    <!--    <div class="titem text-center">
                            <div class="team-img">
                                <img src="img/team/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <h6>Sam Martin.</h6>
                                <span>Project Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="img/team/3.jpg" alt="">
                            </div>
                            <div class="info">
                                <h6>Johnny Doe</h6>
                                <span>Project Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="img/team/4.jpg" alt="">
                            </div>
                            <div class="info">
                                <h6>Jack Lennon</h6>
                                <span>Project Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>-->
                    </div>

                </div>
            </div>
        </section>

        <!-- End Team ====
        ======================================= -->


        <!-- =====================================
        ==== Start Price -->

        <section class="price section-padding bg-gray" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            Pricing
                        </h4>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center mb-md50">
                            <div class="type">
                                <span class="icon"><i class="icofont icofont-briefcase"></i></span>
                                <h4>Silver</h4>
                            </div>

                            <div class="value">
                                <h3>350+<span>$</span></h3>
                                <span class="per">Per Prouduct</span>
                            </div>

                            <div class="features">
                                <ul>
                                    <li>Default Layout</li>
                                    <li>Standard Design</li>
                                    <li>Small Business</li>
                                    <li>For Show Web-Site</li>
                                    <li>6-Months Free Services</li>
                                </ul>
                            </div>

                            <div class="order">
                                <a href="#0">
                                    <span>More Detail</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center active mb-md50">

                            <div class="type">
                                <span class="icon"><i class="icofont icofont-rocket-alt-2"></i></span>
                                <h4>Gold</h4>
                            </div>

                            <div class="value">
                                <h3>700<span>$</span></h3>
                                <span class="per">Per Prouduct</span>
                            </div>

                            <div class="features">
                                <ul>
                                    <li>Take One Out of Six Layouts</li>
                                    <li>Get the Option to Choose</li>
                                    <li>Customer Demands</li>
                                    <li>Custome Management System Web-Site</li>
                                    <li>6-Months Free Services</li>
                                </ul>
                            </div>

                            <div class="order">
                                <a href="#0">
                                    <span>More Detail</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center">
                            <div class="type">
                                <span class="icon"><i class="icofont icofont-diamond"></i></span>
                                <h4>Platinum</h4>
                            </div>

                            <div class="value">
                                <h3>800+<span>$</span></h3>
                                <span class="per">Per Prouduct</span>
                            </div>

                            <div class="features">
                                <ul>
                                    <li>Satisfying Layouts</li>
                                    <li>Flexible Design</li>
                                    <li>Grab the Wide Range of Scopes</li>
                                    <li>Equip the Digital Marketing System</li>
                                    <li>6-Months Free Services for All Issus</li>
                                </ul>
                            </div>

                            <div class="order">
                                <a href="#0">
                                    <span>More Detail</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- End Price ====
        ======================================= -->


        <!-- =====================================
        ==== Start Testimonails -->
        
        <div class="testimonails bg-img" data-overlay-dark="9" data-background="img/3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 over">

                        <div class="section-head mb-50">
                            <h4>
                                <span>What</span><br>
                                Clients <span>Says</span>
                            </h4>
                        </div>

                        <div class="owl-carousel owl-theme">
                            <div class="citem">
                                <p>Perfect and Great team.</p>
                                <h5>Alex Smith</h5>
                                <h6>Envato Customer</h6>
                            </div>
                            <div class="citem">
                                <p>Perfect and Great team.</p>
                                <h5>Alex Smith</h5>
                                <h6>Envato Customer</h6>
                            </div>
                            <div class="citem">
                                <p>Perfect and Great team.</p>
                                <h5>Alex Smith</h5>
                                <h6>Envato Customer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Testimonails ====
        ======================================= -->


        <!-- =====================================
        ==== Start Blog -->
        <section class="blog section-padding" data-scroll-index="5">
            <div class="container">
                <div class="row">

                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Latest</span><br>
                            Our News
                        </h4>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center mb-md50">
                            <div class="post-img">
                                <img src="img/blog/1.jpg" alt="">
                                <div class="date">
                                    <a href="#0">
                                        <span>06</span>
                                        <span>Aug</span>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="tag">
                                    <a href="#0">E-Commerce</a>
                                </span>
                                <h5><a href="#0">Handicraft Online Shopping</a></h5><br>
                                <p> We are designing to trade Myanmar traditional handicrafts throughout the country. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center mb-md50">
                            <div class="post-img">
                                <img src="img/blog/2.jpg" alt="">
                                <div class="date">
                                    <a href="#0">
                                        <span>06</span>
                                        <span>Aug</span>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="tag">
                                    <a href="#0">Directory</a>
                                </span>
                                <h5><a href="#0">Automobile Spare Parts</a></h5><br>
                                <p> Initiating directory app for Ba Yint Naung automobile spare parts, accessories, sales and services.  </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center">
                            <div class="post-img">
                                <img src="img/blog/3.jpg" alt="">
                                <div class="date">
                                    <a href="#0">
                                        <span>06</span>
                                        <span>Aug</span>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="tag">
                                    <a href="#0">Library's Software</a>
                                </span>
                                <h5><a href="#0">Digital Borrowing Books System</a></h5>
                                <p> Cooperating with the libraries in Myanmar to transform borrowing books system from manual to reliable digital system. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Blog ====
        ======================================= -->


        <!-- =====================================
        ==== Start Clients -->
        <div class="clients bg-gray text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6">
                        <div class="brand">
                            <img src="{!! asset('/frontend/img/clients-logo/fourth-regional-SLW.png') !!}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6">
                        <div class="brand">
                            <img src="{!! asset('/frontend/img/clients-logo/Logo PSD.png') !!}" alt="">
                        </div>
                    </div>
                    

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- End Clients ====
        ======================================= -->
@stop
