
@extends('admin.admin_master')
@section('admin')



    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user.view')}}">Manage User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Leaves</li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                    <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
                </div>
                <a class="notification sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
                <div class="search-result">
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-auto sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                <div class="notification-content pt-2 dropdown-menu">
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="" src="/{{session('propic')}} ">
                </div>
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary text-white">
                        <li class="p-2">
                            <div class="font-medium">{{session('usernamee')}}</div>
                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">{{session('usertype')}}</div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="{{route('systemprofile')}}" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        </li>

                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="{{ route('admin.logout')}}" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->

        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Manage Leaves
            </h2>

        </div>


        <!-- BEGIN: Content -->

        <div class="grid grid-cols-2 gap-6 mt-5 flex items-center">
            @foreach($leaves as $l)
            <a href="{{ route('user.view') }}" >
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">

                    <div   class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user" data-lucide="user" class="lucide lucide-user report-box__icon text-success"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"></path></svg>
                                <div class="ml-auto">
                                    <div class="report-box__indicator bg-success tooltip cursor-pointer"> click <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-up" data-lucide="chevron-up" class="lucide lucide-chevron-up w-4 h-4 ml-0.5"><polyline points="18 15 12 9 6 15"></polyline></svg> </div>
                                </div>
                            </div>
                            <div class="text-3xl font-medium leading-8 mt-6">{{$l->leave_type}}</div>
                            <div class="text-base text-slate-500 mt-1">All System Users</div>
                        </div>
                    </div>

                </div>
            </a>
            @endforeach

{{--            <a href="{{ route('users.add') }}" >--}}
{{--                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">--}}
{{--                    <div class="report-box zoom-in">--}}
{{--                        <div class="box p-5">--}}
{{--                            <div class="flex">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user-plus" data-lucide="user-plus" class="lucide lucide-user-plus report-box__icon text-pending"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>--}}
{{--                                <div class="ml-auto">--}}
{{--                                    <div class="report-box__indicator bg-danger tooltip cursor-pointer"> click <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down w-4 h-4 ml-0.5"><polyline points="6 9 12 15 18 9"></polyline></svg> </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-3xl font-medium leading-8 mt-6">Add Users</div>--}}
{{--                            <div class="text-base text-slate-500 mt-1">Add System Users</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </a>--}}


        </div>


{{--        <div class="grid grid-cols-2 gap-6 mt-5 flex items-center">--}}
{{--            <a href="{{ route('user.view') }}" >--}}
{{--                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">--}}

{{--                    <div   class="report-box zoom-in">--}}
{{--                        <div class="box p-5">--}}
{{--                            <div class="flex">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user" data-lucide="user" class="lucide lucide-user report-box__icon text-success"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"></path></svg>--}}
{{--                                <div class="ml-auto">--}}
{{--                                    <div class="report-box__indicator bg-success tooltip cursor-pointer"> click <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-up" data-lucide="chevron-up" class="lucide lucide-chevron-up w-4 h-4 ml-0.5"><polyline points="18 15 12 9 6 15"></polyline></svg> </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-3xl font-medium leading-8 mt-6">View Users</div>--}}
{{--                            <div class="text-base text-slate-500 mt-1">All System Users</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </a>--}}

{{--            <a href="{{ route('users.add') }}" >--}}
{{--                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">--}}
{{--                    <div class="report-box zoom-in">--}}
{{--                        <div class="box p-5">--}}
{{--                            <div class="flex">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user-plus" data-lucide="user-plus" class="lucide lucide-user-plus report-box__icon text-pending"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>--}}
{{--                                <div class="ml-auto">--}}
{{--                                    <div class="report-box__indicator bg-danger tooltip cursor-pointer"> click <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down w-4 h-4 ml-0.5"><polyline points="6 9 12 15 18 9"></polyline></svg> </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-3xl font-medium leading-8 mt-6">Add Users</div>--}}
{{--                            <div class="text-base text-slate-500 mt-1">Add System Users</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </a>--}}

{{--        </div>--}}

{{--        <div class="grid grid-cols-2 gap-6 mt-5 flex items-center">--}}
{{--            <a href="{{ route('user.view') }}" >--}}
{{--                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">--}}

{{--                    <div   class="report-box zoom-in">--}}
{{--                        <div class="box p-5">--}}
{{--                            <div class="flex">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user" data-lucide="user" class="lucide lucide-user report-box__icon text-success"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"></path></svg>--}}
{{--                                <div class="ml-auto">--}}
{{--                                    <div class="report-box__indicator bg-success tooltip cursor-pointer"> click <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-up" data-lucide="chevron-up" class="lucide lucide-chevron-up w-4 h-4 ml-0.5"><polyline points="18 15 12 9 6 15"></polyline></svg> </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-3xl font-medium leading-8 mt-6">View Users</div>--}}
{{--                            <div class="text-base text-slate-500 mt-1">All System Users</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </a>--}}

{{--            <a href="{{ route('users.add') }}" >--}}
{{--                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">--}}
{{--                    <div class="report-box zoom-in">--}}
{{--                        <div class="box p-5">--}}
{{--                            <div class="flex">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user-plus" data-lucide="user-plus" class="lucide lucide-user-plus report-box__icon text-pending"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>--}}
{{--                                <div class="ml-auto">--}}
{{--                                    <div class="report-box__indicator bg-danger tooltip cursor-pointer"> click <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down w-4 h-4 ml-0.5"><polyline points="6 9 12 15 18 9"></polyline></svg> </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-3xl font-medium leading-8 mt-6">Add Users</div>--}}
{{--                            <div class="text-base text-slate-500 mt-1">Add System Users</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </a>--}}

{{--        </div>--}}


        <!-- END: Content -->



@endsection
