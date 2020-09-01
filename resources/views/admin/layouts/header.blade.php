<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                <!--begin:Form-->
                <form method="get" class="quick-search-form">
                    <div class="input-group">
                        <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="svg-icon svg-icon-lg">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M14.293 16.707a1 1 0 011.414-1.414l4 4a1 1 0 01-1.414 1.414l-4-4z" fill="#000" fill-rule="nonzero" opacity=".3"></path><path d="M11 16a5 5 0 100-10 5 5 0 000 10zm0 2a7 7 0 110-14 7 7 0 010 14z" fill="#000" fill-rule="nonzero"></path></g></svg>
                                        </span>
                                    </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="quick-search-close ki ki-close icon-sm text-muted" style="display: none;"></i>
                                    </span>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
                <!--begin::Scroll-->
                <div class="quick-search-wrapper scroll ps" data-scroll="true" data-height="325" data-mobile-height="200" style="height: 325px; overflow: hidden;"><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                <!--end::Scroll-->
            </div>
        </div>
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Languages-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                        <img class="h-20px w-20px rounded-sm" src="{{ asset("assets/media/svg/flags/226-united-states.svg") }}" alt="" />
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="navi navi-hover py-4">
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset("assets/media/svg/flags/226-united-states.svg") }}" alt="" />
                                </span>
                                <span class="navi-text">English</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item active">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset("assets/media/svg/flags/128-spain.svg") }}" alt="" />
                                </span>
                                <span class="navi-text">Spanish</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset("assets/media/svg/flags/162-germany.svg") }}" alt="" />
                                </span>
                                <span class="navi-text">German</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset("assets/media/svg/flags/063-japan.svg") }}" alt="" />
                                </span>
                                <span class="navi-text">Japanese</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset("assets/media/svg/flags/195-france.svg") }}" alt="" />
                                </span>
                                <span class="navi-text">French</span>
                            </a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Languages-->
            <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                    <span class="symbol symbol-35 symbol-light-success">
                        <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>