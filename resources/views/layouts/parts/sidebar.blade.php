<aside class="left-sidebar " data-sidebarbg="skin5">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ url('/') }}" aria-expanded="false"><i class="mdi mdi-home"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <hr>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-houzz-box"></i><span
                            class="hide-menu">Slider</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Helpers::isAdmin())
                        <li class="sidebar-item"><a href="{{ url('/admin/slider/create') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add Slider
                                </span></a></li>
                        @endif
                        <li class="sidebar-item"><a href="{{ url('/admin/slider') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Slider List
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-puzzle"></i><span
                            class="hide-menu">Service</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Helpers::isAdmin())
                        <li class="sidebar-item"><a href="{{ url('/admin/service/create') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add Service
                                </span></a></li>
                        @endif
                        <li class="sidebar-item"><a href="{{ url('/admin/service') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Service List
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-puzzle"></i><span
                            class="hide-menu">solution</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Helpers::isAdmin())
                        <li class="sidebar-item"><a href="{{ url('/admin/solution/create') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add solution
                                </span></a></li>
                        @endif
                        <li class="sidebar-item"><a href="{{ url('/admin/solution') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> solution List
                                </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-hangouts"></i><span
                            class="hide-menu">Objective</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ url('/admin/objective') }}" class="sidebar-link"><i
                                    class="mdi mdi-note-plus"></i><span class="hide-menu"> Objective List
                                </span></a></li>
                    </ul>
                </li>

                {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-sitemap"></i><span
                            class="hide-menu">Category</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @if (Helpers::isAdmin())
                        <li class="sidebar-item"><a href="{{ url('/admin/category/create') }}" class="sidebar-link"><i
                    class="mdi mdi-note-outline"></i><span class="hide-menu">Add Category
                </span></a></li>
                @endif
                <li class="sidebar-item"><a href="{{ url('/admin/category') }}" class="sidebar-link"><i
                            class="mdi mdi-note-plus"></i><span class="hide-menu"> Category List
                        </span></a></li>
            </ul>
            </li> --}}

            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-television-guide"></i><span
                        class="hide-menu">Products</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    @if (Helpers::isAdmin())
                    <li class="sidebar-item"><a href="{{ url('/admin/product/create') }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">Add Product
                            </span></a></li>
                    @endif
                    <li class="sidebar-item"><a href="{{ url('/admin/product') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu"> Products List
                            </span></a></li>
                </ul>
            </li>

            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-contact-mail"></i><span
                        class="hide-menu">Contact <span
                            class="badge badge-danger">{{Helpers::countTblData('message', 'status', null)}}</span></span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    @if (Helpers::isAdmin())
                    <li class="sidebar-item"><a href="{{ url('/admin/contact') }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">Contacts
                            </span></a></li>
                    @endif
                    <li class="sidebar-item"><a href="{{ url('/admin/message') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu"> Messages <span
                                    class="badge badge-danger">{{Helpers::countTblData('message', 'status', null)}}</span>
                            </span></a></li>
                </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-information"></i><span
                        class="hide-menu">About Us</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{ url('/admin/about') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu"> About Us
                            </span></a></li>
                </ul>
            </li>

            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-message-alert"></i><span
                        class="hide-menu">Newsletter</span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{ url('/admin/newsletter') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu"> Newsletter List
                            </span></a></li>
                </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-television-guide"></i><span
                        class="hide-menu">Partner</span></a>
                <ul aria-expanded="false" class="collapse  first-level">

                    <li class="sidebar-item"><a href="{{ url("admin/partner/create") }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">New Partner
                            </span></a></li>

                    <li class="sidebar-item"><a href="{{ url("admin/partner") }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu">Partner List
                            </span></a></li>
                </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-television-guide"></i><span
                        class="hide-menu">Gallery</span></a>
                <ul aria-expanded="false" class="collapse  first-level">

                    <li class="sidebar-item"><a href="{{ url("admin/gallery/create") }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">New Gallery
                            </span></a></li>

                    <li class="sidebar-item"><a href="{{ url("admin/gallery") }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu">Gallery List
                            </span></a></li>
                </ul>
            </li>


            <li class="sidebar-item"><a href="{{ url("admin/testimonials/1/edit") }}" class="sidebar-link"><i
                        class="mdi mdi-television-guide"></i><span class="hide-menu">Testimonials
                    </span></a></li>


            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-television-guide"></i><span
                        class="hide-menu">Portfolio</span></a>
                <ul aria-expanded="false" class="collapse  first-level">

                    <li class="sidebar-item"><a href="{{ url("admin/portfolio/create") }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">New Portfolio
                            </span></a></li>

                    <li class="sidebar-item"><a href="{{ url("admin/portfolio") }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu">Portfolio List
                            </span></a></li>
                </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-television-guide"></i><span
                        class="hide-menu">Pricing List</span></a>
                <ul aria-expanded="false" class="collapse  first-level">

                    <li class="sidebar-item"><a href="{{ url("admin/pricing-list/create") }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">New Pricing
                            </span></a></li>

                    <li class="sidebar-item"><a href="{{ url("admin/pricing-list") }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu">Pricing List
                            </span></a></li>
                </ul>
            </li>
            </ul>
        </nav>
    </div>
</aside>
<div class="pull-right upper-right clearfix">
                        
    <!--Info Box-->
   
    
</div>