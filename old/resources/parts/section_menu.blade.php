<div class="b-top-nav__dropdomn header_bg_nav_dropdown">
    <ul class="b-top-nav__2level_wrap">
        <li class="b-top-nav__2level_title f-top-nav__2level_title">Online Marketing Service</li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/seo_packages"><i class="fa fa-search"></i>SEO Packages</a></li>
         @foreach($services as $service)
              @if($service->group_name == 'Online Marketing Service')
                  <li class="b-top-nav__2level f-top-nav__2level f-primary" style="position: relative">
                      @if($service->new_and_hot == '1')
                        <span class="new_test">Hot</span>
                      @elseif($service->new_and_hot == '2')
                          <span class="new_test">New</span>
                      @endif
                      <a href="/services/{{ $service->service_link }}">
                          <i class="fa {{ $service->service_icon }}"></i>{{ $service->service_name }}
                      </a>
                  </li>
              @endif
          @endforeach
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/dedicated_seo_team"><i class="fa fa-users"></i> Dedicated Seo Team</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/local_seo_service"><i class="fa fa-map-marker"></i> Local SEO Service</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/panda_penguin_recovery_service"><i class="fa fa-refresh"></i> Panda & Penguin Recovery</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/reputation_management_service"><i class="fa fa-level-up"></i> Reputation Management Service</a></li>
        {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-briefcase"></i> Local Bussiness Solution</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-file-text"></i> On Page SEO Audit</a></li>
        --}}
    </ul>
    <ul class="b-top-nav__2level_wrap">
        <li class="b-top-nav__2level_title f-top-nav__2level_title">Social Media</li>
	    <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/social_media_marketing"><i class="fa fa-facebook"></i>  Social Media Marketing</a></li>
        @foreach($services as $service)
            @if($service->group_name == 'Social Media')
                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/services/{{ $service->service_link }}"><i class="fa {{ $service->service_icon }}"></i>{{ $service->service_name }}</a></li>
            @endif
        @endforeach

        {{--
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-share"></i> Online Branding Management</a></li><br>--}}
        <li class="b-top-nav__2level_title f-top-nav__2level_title">PPC Marketing</li>
        @foreach($services as $service)
            @if($service->group_name == 'PPC Marketing')
                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/services/{{ $service->service_link }}"><i class="fa {{ $service->service_icon }}"></i>{{ $service->service_name }}</a></li>
            @endif

        @endforeach
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/ppc_management_service"><i class="fa fa-paper-plane"></i> PPC Campaign Management</a></li>
    </ul>
    <ul class="b-top-nav__2level_wrap">
            <li class="b-top-nav__2level_title f-top-nav__2level_title">Link Building Services</li>
        @foreach($services as $service)
            @if($service->group_name == 'Link Building Services')
                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/services/{{ $service->service_link }}"><i class="fa {{ $service->service_icon }}"></i>{{ $service->service_name }}</a></li>
            @endif
        @endforeach
       {{-- <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/link_wheel_service"><i class="fa fa-cog"></i> Link Wheel Service</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/guest_blogging_service"><<i class="fa fa-pencil"></i>   Guest Blogging Service</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/article_submission_service"><i class="fa fa-check-square"></i> Article Submission Service</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/contentual_link_building"><i class="fa fa-link"></i>Contentual Link Building</a></l--}}
    </ul>
    <ul class="b-top-nav__2level_wrap">
        <li class="b-top-nav__2level_title f-top-nav__2level_title">Web Content Writing</li>
        @foreach($services as $service)
            @if($service->group_name == 'Web Content Writing')
                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/services/{{ $service->service_link }}"><i class="fa {{ $service->service_icon }}"></i>{{ $service->service_name }}</a></li>
            @endif
        @endforeach
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/content_writing_service"><i class="fa fa-quote-left"></i>    Content Writing</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/blog_management_service"><i class="fa fa-align-left"></i>Blog Management</a></li>
        {{--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-laptop"></i> Press Release Creation</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-pencil-square-o"></i> Article Writing</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-list-alt"></i> Product Descriptions</a></li>--}}
    </ul>
    <ul class="b-top-nav__2level_wrap">
        <li class="b-top-nav__2level_title f-top-nav__2level_title">Web Design & Development</li>
        @foreach($services as $service)
            @if($service->group_name == 'Web Design & Development')
                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/services/{{ $service->service_link }}"><i class="fa {{ $service->service_icon }}"></i>{{ $service->service_name }}</a></li>
            @endif
        @endforeach
       
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/web_development_service"><i class="fa fa-code"></i> Web Development</a></li>
       {{-- <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-code"></i> Responsive Web Design</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="/"><i class="fa fa-shopping-cart"></i> E-commerce Web Design</a></li>
        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-wordpress"></i> Wordpress Development</a></li>--}}
    </ul>
</div>