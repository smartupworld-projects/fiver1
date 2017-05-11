<!DOCTYPE html>
<html <?php language_attributes(); ?> >

    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width">
        <link href="<?php echo Get_template_directory_uri(); ?>/Styles/style.css" rel="stylesheet" />
        <link type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
        <link href="http://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <?php wp_head(); ?> 
    </head>

    <body class="theme-main" <?php body_class(); ?>>
        <header class="c-site-header">
            <div class="o-wrapper o-wrapper--padded">
                <div class="o-flex o-flex--space-between o-flex--nowrap o-flex--items-center">
                    <div class="o-flex__item--self-start">
                        <div class="c-logo" data-gwp-region="">
                            <a href="/en/" class="c-logo__link" style="background: url(<?php header_image(); ?>) no-repeat 0 0/100% 100%;"></a>
                            <div class="c-logo__line"><?php bloginfo('description'); ?></div>
                        </div>
                    </div>
                    <div>
                        <ul class="c-quick-links">
                            <li class="c-quick-links__item c-quick-links__item--dropdown u-hide@handheld">
                                <a href="#lang">Languages</a>
                                <ul class="c-quick-links__dropdown">
                                    <li class="c-quick-links__dropdown-item"><a href="/en/we-act/themesprogrammes/SDG-Preparedness-Facility/">English</a></li>
                                </ul>
                            </li>
                            <li class="c-quick-links__item u-hide@handheld"><a href="/en/About/who/Global-secretariat/Contact-Us/">CONTACT US</a></li>
                            <li class="c-quick-links__item">
                                <a href="/en/search/"><i class="c-icon c-icon--search c-icon--large c-icon--flush"></i></a>
                            </li>
                            <li class="c-quick-links__item u-hide@lap-and-up"><a href="#mobile" data-toggle="menu"><i class="c-icon c-icon--navicon c-icon--large c-icon--flush"></i></a></li>
                        </ul>
                        <nav>
                            <!--
                            <ul class="c-navigation">
                                <li class="c-navigation__item">
                                    <a href="/en/About/" class="c-navigation__link c-navigation__link--alternate"> ABOUT</a>
                                    <div class="c-mega-menu">
                                        <div class="o-grid">
                                            <div class="o-grid__item u-1/4 u-1/1@handheld">
                                                <div class="c-mega-menu__info u-hide@handheld">
                                                    <h2 class="c-mega-menu__heading">ABOUT</h2>
                                                    <div class="c-mega-menu__description"><p>GWP’s <b>VISION&nbsp;</b>is a water secure world. Its <b>MISSION&nbsp;</b>is to support the sustainable development and management of water resources at all levels.</p>
                                                        <p>Our <strong>VALUE PROPOSITION</strong>: We're a large, diverse, inclusive, multi-stakeholder partnership that supports communities and countries to improve the way they manage water. Put simply, we're about bringing water users together (that’s everyone) to solve water problems.&nbsp;</p></div>
                                                </div>
                                            </div>
                                            <div class="o-grid__item u-3/4 u-1/1@handheld">
                                                <div class="o-grid">
                                                    4
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/About/who/">WHO</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/who/What-is-the-network/" class="c-mega-menu__link">What is the Network?</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/who/GWP-Partners/" class="c-mega-menu__link">GWP Partners</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/who/Country-Water-Partnerships/" class="c-mega-menu__link">Country Water Partnerships</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/who/Regional-Water-Partnerships/" class="c-mega-menu__link">Regional Water Partnerships</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/who/GWP-Technical-Committee/" class="c-mega-menu__link">GWP Technical Committee</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/who/Sponsoring-Partners/" class="c-mega-menu__link">Sponsoring Partners</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/who/Steering-Committee/" class="c-mega-menu__link">Steering Committee</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/who/Governance-Funding/" class="c-mega-menu__link">Governance and Funding</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/who/Global-secretariat/" class="c-mega-menu__link">Global Secretariat</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/who/History/" class="c-mega-menu__link">History</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/About/why/">WHY</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/why/the-water-challenge/" class="c-mega-menu__link">The Water Challenge</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/why/the-need-for-an-integrated-approach/" class="c-mega-menu__link">The Need for an Integrated Approach</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/why/sustainable-development-goals/" class="c-mega-menu__link">Sustainable Development Goals</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/About/how/">HOW</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/how/vision-mission-and-values/" class="c-mega-menu__link">Vision, Mission, and Values</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/how/Strategy_Workplans_Progress_Reviews/" class="c-mega-menu__link">Strategy, Workplans, Progress Reviews</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/how/Annual_and_Financial_Reports/" class="c-mega-menu__link">Annual and Financial Reports</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/About/more/">KEEP UPDATED</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/more/news/" class="c-mega-menu__link">News</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/more/Events-and-Calls/" class="c-mega-menu__link">Events and calls</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/more/Subscribe-to-NewsFlow/" class="c-mega-menu__link">NewsFlow</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/more/gwp-on-social-media/" class="c-mega-menu__link">GWP on social media</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/About/more/Vacancies-and-Internships/" class="c-mega-menu__link">Jobs and tenders</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </li>
                                <li class="c-navigation__item">
                                    <a href="/en/we-act/" class="c-navigation__link"> WE ACT</a>
                                    <div class="c-mega-menu">
                                        <div class="o-grid">
                                            <div class="o-grid__item u-1/4 u-1/1@handheld">
                                                <div class="c-mega-menu__info u-hide@handheld">
                                                    <h2 class="c-mega-menu__heading">WE ACT</h2>
                                                    <div class="c-mega-menu__description"><p><span>The actions of GWP's multi-stakeholder partnership support <strong>improved water governance</strong> so that communities and countries manage water for peoples' health, economic development, and environmental sustainability.</span></p></div>
                                                </div>
                                            </div>
                                            <div class="o-grid__item u-3/4 u-1/1@handheld">
                                                <div class="o-grid">
                                                    3
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/we-act/change-and-impact/">CHANGE AND IMPACT</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/change-and-impact/results/" class="c-mega-menu__link">Results</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/change-and-impact/Impact-Stories/" class="c-mega-menu__link">Impact Stories</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/change-and-impact/monitoring-and-evaluation/" class="c-mega-menu__link">Monitoring and Evaluation</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/we-act/themesprogrammes/">THEMES/PROGRAMMES</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/themesprogrammes/SDG-Preparedness-Facility/" class="c-mega-menu__link">SDG Preparedness Facility</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/themesprogrammes/Climate-Resilience/" class="c-mega-menu__link">Climate Resilience</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/themesprogrammes/Nexus-Water-Food-Energy-Ecosystems/" class="c-mega-menu__link">Nexus: Water, Food, Energy, and Ecosystems (WFEE)</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/themesprogrammes/Transboundary_Cooperation/" class="c-mega-menu__link">Transboundary Cooperation</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/themesprogrammes/Urban_Water_Management/" class="c-mega-menu__link">Urban Water Management</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/themesprogrammes/Gender/" class="c-mega-menu__link">Gender</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/themesprogrammes/youth/" class="c-mega-menu__link">Youth</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/we-act/campaigns/">CAMPAIGNS</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/campaigns/youth-for-water-and-climate/" class="c-mega-menu__link" target="&quot;_blank&quot;">Youth for water and climate</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/campaigns/GWP-Celebrates-20-Years/" class="c-mega-menu__link">GWP Celebrates 20 Years</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/we-act/campaigns/water-goal2/" class="c-mega-menu__link">Water Goal</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </li>
                                <li class="c-navigation__item">
                                    <a href="/en/learn/" class="c-navigation__link"> LEARN</a>
                                    <div class="c-mega-menu">
                                        <div class="o-grid">
                                            <div class="o-grid__item u-1/4 u-1/1@handheld">
                                                <div class="c-mega-menu__info u-hide@handheld">
                                                    <h2 class="c-mega-menu__heading">LEARN</h2>
                                                    <div class="c-mega-menu__description"><p>GWP creates and communicates information about integrated water resources management which contributes to improved water governance and, ultimately, water security.</p>
                                                        <p>Together with our Partners, we provide knowledge resources and capacity building activities for solving water problems.</p></div>
                                                </div>
                                            </div>
                                            <div class="o-grid__item u-3/4 u-1/1@handheld">
                                                <div class="o-grid">
                                                    3
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/learn/iwrm-toolbox/">IWRM TOOLBOX</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/iwrm-toolbox/About_IWRM_ToolBox/" class="c-mega-menu__link">About the IWRM ToolBox</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/iwrm-toolbox/The-Enabling-Environment/" class="c-mega-menu__link">The Enabling Environment (A)</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/iwrm-toolbox/Institutional_Arrangements/" class="c-mega-menu__link">Institutional Arrangements (B)</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/iwrm-toolbox/Management-Instruments/" class="c-mega-menu__link">Management Instruments (C)</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/learn/capacity-building/">CAPACITY BUILDING</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/capacity-building/About_Capacity_Building/" class="c-mega-menu__link">About Capacity Building</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/capacity-building/IWRM_Capacity_Building/" class="c-mega-menu__link">IWRM Capacity Building</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/capacity-building/Thematic_Capacity_Building/" class="c-mega-menu__link">Thematic Capacity Building</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/learn/KNOWLEDGE_RESOURCES/">KNOWLEDGE RESOURCES</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/KNOWLEDGE_RESOURCES/Knowledge_search/" class="c-mega-menu__link">GWP Knowledge Search</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/KNOWLEDGE_RESOURCES/About_Knowledge_Resources/" class="c-mega-menu__link">About Knowledge Resources</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/KNOWLEDGE_RESOURCES/Global_Resources/" class="c-mega-menu__link">Global Resources</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/KNOWLEDGE_RESOURCES/Regional_Resources/" class="c-mega-menu__link">Regional Resources</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/learn/KNOWLEDGE_RESOURCES/Case_Studies/" class="c-mega-menu__link">Case Studies</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </li>
                                <li class="c-navigation__item">
                                    <a href="/en/partner/" class="c-navigation__link"> PARTNER</a>
                                    <div class="c-mega-menu">
                                        <div class="o-grid">
                                            <div class="o-grid__item u-1/4 u-1/1@handheld">
                                                <div class="c-mega-menu__info u-hide@handheld">
                                                    <h2 class="c-mega-menu__heading">PARTNER</h2>
                                                    <div class="c-mega-menu__description"><div id="u297_div"><span>Institutional Partners are the basis of GWP's multi-stakeholder partnership. A strong, diverse partnership can bring about the changes needed to achieve a water secure world.&nbsp;</span>In this section, learn about the benefits of being a Partner and meet a few who already are. We invite like-minded organisations to join us!</div></div>
                                                </div>
                                            </div>
                                            <div class="o-grid__item u-3/4 u-1/1@handheld">
                                                <div class="o-grid">
                                                    3
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/partner/become-a-partner2/">BECOME A PARTNER</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/partner/become-a-partner2/Why_be_a_GWP_Partner/" class="c-mega-menu__link">Why be a GWP Partner</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/partner/become-a-partner2/Apply-Now/" class="c-mega-menu__link">Apply Now</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/partner/become-a-partner2/GWP-Partnership-Policy/" class="c-mega-menu__link">GWP Policy on Partners</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/partner/partnerships/">PARTNERSHIPS</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/partner/partnerships/regional-water-partnerships/" class="c-mega-menu__link">Regional Water Partnerships</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/partner/partnerships/country-water-partnerships/" class="c-mega-menu__link">Country Water Partnerships</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/partner/partnerships/Strategic-Allies/" class="c-mega-menu__link">Strategic Allies</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading"><a href="/en/partner/existing-partners/">EXISTING PARTNERS</a></h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/partner/existing-partners/Partner-Search/" class="c-mega-menu__link">GWP Partner Search</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/partner/existing-partners/meet-our-partners/" class="c-mega-menu__link">Meet Our Partners</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/partner/existing-partners/Network_Meeting/" class="c-mega-menu__link">Network Meeting</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </li>
                                <li class="c-navigation__item c-navigation__item--dropdown">
                                    <a href="#" class="c-navigation__link c-navigation__link--alternate">
                                        <i class="c-icon c-icon--globe"></i>GWP Regions
                                    </a>
                                    <div class="c-mega-menu">
                                        <div class="o-grid">
                                            <div class="o-grid__item u-1/4 u-1/1@handheld">
                                                <div class="c-mega-menu__info">
                                                    <div class="c-mega-menu__description"><p>This is where you can find links to the websites of our&nbsp;Regional Water Partnerships (RWPs). RWPs are closest to the countries where we work. They share knowledge and learning across national boundaries and are expected to have an open, inclusive, and gender-sensitive policies for bringing together as wide a group of stakeholders as possible to solve water problems.</p></div>
                                                </div>
                                            </div>
                                            <div class="o-grid__item u-3/4 u-1/1@handheld">
                                                <div class="o-grid">
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading">Regional sites</h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/GWP-Caribbean/">Caribbean</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/GWP-Central-Africa/">Central Africa</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/es/GWP-Centroamerica/">Central America</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/GWP-CEE/">Central and Eastern Europe</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/CACENA/" title="CACENA">Central Asia and Caucasus</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/GWP-China/">China</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/GWP-Eastern-Africa/">Eastern Africa</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/GWP-Mediterranean/">Mediterranean</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/es/GWP-Sud-America/">South America</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/gwp-SAS/">South Asia</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/GWP-South-East-Asia/">South East Asia</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/GWP-SouthernAfrica/">Southern Africa</a></li>
                                                            <li class="c-mega-menu__link-item"><a href="/en/GWP-West-Africa/">West Africa</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="o-grid__item u-1/3 u-1/2@handheld u-1/1@palm">
                                                        <h3 class="c-mega-menu__links-heading">Global site</h3>
                                                        <ul class="c-mega-menu__links">
                                                            <li class="c-mega-menu__link-item"><a href="/en/" target="_blank" title="GWP.org">GWP.org</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                            -->
                            <?php
                            wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'primary-nav'));
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>