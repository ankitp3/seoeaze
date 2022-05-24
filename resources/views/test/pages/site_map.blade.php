@extends('layouts.master')
@section('title', 'Site Map')
@section('header')
@show
@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"><h1 class="privacy_head_title"SeoEaze Sitemap</h1>
                <div class="privacy_page_hr"></div>
                <br>

                <div class="tree_cons">
                    <div class="tree" style="width: 810px;">
                        <ul>
                            <li>
                                <a href="/">Home</a>
                                <ul>

                                    <li><a href="/company">Company</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                    <li><a href="/contact_us">Contact Us</a></li>
                                    <li><a href="/reseller">Reseller</a></li>
                                    <li><a href="/advanced_seo_audit">SEO Audit</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tree_cons">
                    <div class="tree" style="width: 490px;">
                        <ul>
                            <li>
                                <a href="#">Clients</a>
                                <ul>
                                    <li><a href="/portfolio">Portfolio</a></li>
                                    <li><a href="/case_studies">Case Studies</a></li>
                                    <li><a href="/testimonials">Testimonials</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tree_cons">
                    <div class="tree" style="width: 1060px;">
                        <ul>
                            <li>
                                <a href="#">Services</a>
                                <ul>

                                    <li>
                                        <a href="#">Online Marketing</a>
                                        <ul class="vertical">
                                            <li><a href="/seo_packages">SEO Packages</a></li>
                                            <li><a href="/services/guest_posting">Guest Blogging</a></li>
                                            <li><a href="/dedicated_seo_team">Dedicated SEO Team</a></li>
                                            <li><a href="/local_seo_service">Local SEO Service</a></li>
                                            <li><a href="/panda_penguin_recovery_service">Google Penalty Recovery</a></li>
                                            <li><a href="/reputation_management_service">Reputation Management</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Social Media</a>
                                        <ul class="vertical">
                                            <li><a href="/social_media_marketing">Social Media Marketing</a></li>
                                            <li><a href="/services/social_bookmarking_service">Social Bookmarking</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">PPC Marketing</a>
                                        <ul class="vertical">
                                            <br>
                                            <li><a href="/ppc_management_service">PPC Management</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Link Building Services</a>
                                        <ul class="vertical">
                                            <li><a href="/services/link_wheel">Link Wheel Service</a></li>
                                            <li><a href="/services/forum_link_building">Forum Link Building </a></li>
                                            <li><a href="/services/article_submission">Article Marketing</a></li>
                                            <li><a href="/services/press_release_distribution">Press Release Distribution</a></li>
                                            <li><a href="/services/search_engine_submission">Search Engine Submission </a></li>
                                            <li><a href="/services/complete_link_building">Complete Link Building </a></li>
                                            <li><a href="/services/niche_blogging">Industry Based Links</a></li>
                                        </ul>

                                    </li>

                                    <li>
                                        <a href="#">WEB Content Writing</a>
                                        <ul class="vertical">
                                            <li><a href="/content_writing_service">Content Writing</a></li>
                                            <li><a href="/blog_management_service">Blog Management</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">WEB Design & Development</a>
                                        <ul class="vertical">
                                            <br>
                                            <li><a href="/web_development_service">Web Development</a></li>
                                        </ul>

                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                {{--SITEMAP MOBILE VERSION--}}

                <ul class="tree_cons_mobile">
                    <li>
                        <ul>


                            <li><a href="/">Home</a>
                                <ul>
                                    <li><a href="/company">Company</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                    <li><a href="/contact_us">Contact Us</a></li>
                                    <li><a href="/reseller">Reseller</a></li>
                                    <li><a href="/advanced_seo_audit">SEO Audit</a></li>
                                </ul>
                            </li>

                            <li><a href="">Clients</a>
                                <ul>
                                    <li><a href="/portfolio">Portfolio</a></li>
                                    <li><a href="/case_studies">Case Studies</a></li>
                                    <li><a href="/testimonials">Testimonials</a></li>
                                </ul>
                            </li>


                            <li><a href="">Services</a>
                                <ul>
                                    <li>
                                        <a href="#">Online Marketing</a>
                                        <ul>
                                            <li><a href="/seo_packages">SEO Packages</a></li>
                                            <li><a href="/services/guest_posting">Guest Blogging</a></li>
                                            <li><a href="/dedicated_seo_team">Dedicated SEO Team</a></li>
                                            <li><a href="/local_seo_service">Local SEO</a></li>
                                            <li><a href="/panda_penguin_recovery_service">Panda & Penguin</a></li>
                                            <li><a href="/reputation_management_service">Reputation Management</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Social Media</a>
                                        <ul>
                                            <li><a href="/social_media_marketing">Social Media Marketing</a></li>
                                            <li><a href="/services/social_bookmarking_service">Social Bookmarking</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">PPC Marketing</a>
                                        <ul>
                                            <br>
                                            <li><a href="/ppc_management_service">PPC Management</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="/testimonials">Link Building Services</a>
                                        <ul>
                                            <li><a href="/services/link_wheel_service">Link Wheel Service</a></li>
                                            <li><a href="/services/forum_link_building">Forum Link Building </a></li>
                                            <li><a href="/services/article_submission">Article Marketing</a></li>
                                            <li><a href="/services/press_release_distribution">Press Release Distribution</a></li>
                                            <li><a href="/services/search_engine_submission">Search Engine Submission </a></li>
                                            <li><a href="/services/complete_link_building">Complete Link Building </a></li>
                                            <li><a href="/services/niche_blogging">Industry Based Links</a></li>
                                        </ul>

                                    </li>

                                    <li>
                                        <a href="/testimonials">WEB Content Writing</a>
                                        <ul>
                                            <li><a href="/content_writing_service">Content Writing</a></li>
                                            <li><a href="/blog_management_service">Blog Management</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="/testimonials">WEB Design & Development</a>
                                        <ul>
                                            <br>
                                            <li><a href="/web_development_service">Web Development</a></li>
                                        </ul>

                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <br><br>


@endsection