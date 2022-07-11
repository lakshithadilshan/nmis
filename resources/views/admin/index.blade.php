
@extends('admin.admin_master')
@section('admin')



    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                    <div class="search-result__content">
                        <div class="search-result__content__title">Pages</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center">
                                <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                                <div class="ml-3">Mail Settings</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                                <div class="ml-3">Users & Permissions</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                                <div class="ml-3">Transactions Report</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Users</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                </div>
                                <div class="ml-3">Lakshan Ravi</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">ravindumohottala@gmail.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                </div>
                                <div class="ml-3">Leonardo DiCaprio</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">leonardodicaprio@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                </div>
                                <div class="ml-3">Robert De Niro</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">robertdeniro@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                </div>
                                <div class="ml-3">Russell Crowe</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">russellcrowe@left4code.com</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Products</div>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                            </div>
                            <div class="ml-3">Sony A7 III</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-5.jpg">
                            </div>
                            <div class="ml-3">Dell XPS 13</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-4.jpg">
                            </div>
                            <div class="ml-3">Samsung Q90 QLED TV</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-13.jpg">
                            </div>
                            <div class="ml-3">Samsung Q90 QLED TV</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-auto sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-content">
                        <div class="notification-content__title">Notifications</div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="Midone - HTML Admin Template" src="{{asset('dist/images/rm.jpg')}} ">
                </div>
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary text-white">
                        <li class="p-2">
                            <div class="font-medium">Lakshan Ravi</div>
                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Admin</div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="{{ route('logout')}}" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 2xl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 mt-2">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                General Report
                            </h2>
                            <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                        </div>
                        <div class="grid grid-cols-12 gap-6 mt-2">
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-lucide="shopping-cart" class="report-box__icon text-primary"></i>
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-success tooltip cursor-pointer" title="33% Higher than last month"> 33% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
                                        <div class="text-base text-slate-500 mt-1">Item Sales</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-lucide="credit-card" class="report-box__icon text-pending"></i>
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month"> 2% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                                        <div class="text-base text-slate-500 mt-1">New Orders</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-lucide="monitor" class="report-box__icon text-warning"></i>
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month"> 12% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                                        <div class="text-base text-slate-500 mt-1">Total Products</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-lucide="user" class="report-box__icon text-success"></i>
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month"> 22% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">152.040</div>
                                        <div class="text-base text-slate-500 mt-1">Unique Visitor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: General Report -->
                    <!-- BEGIN: Sales Report -->
                    <div class="col-span-12 lg:col-span-6 mt-5">
                        <div class="intro-y block sm:flex items-center h-8">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Sales Report
                            </h2>

                        </div>
                        <div class="intro-y box p-5 mt-12 sm:mt-2">
                            <div class="flex flex-col md:flex-row md:items-center">
                                <div class="flex">
                                    <div>
                                        <div class="text-primary dark:text-slate-300 text-lg xl:text-xl font-medium">$15,000</div>
                                        <div class="mt-0.5 text-slate-500">This Month</div>
                                    </div>
                                    <div class="w-px h-12 border border-r border-dashed border-slate-200 dark:border-darkmode-300 mx-4 xl:mx-5"></div>
                                    <div>
                                        <div class="text-slate-500 text-lg xl:text-xl font-medium">$10,000</div>
                                        <div class="mt-0.5 text-slate-500">Last Month</div>
                                    </div>
                                </div>

                            </div>
                            <div class="report-chart">
                                <div class="h-[275px]">
                                    <canvas id="report-bar-chart-1" class="mt-6 -mb-6"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Sales Report -->

                    <!-- BEGIN: Sales Report 2 -->
                    <div class="col-span-12 lg:col-span-6 mt-5">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Sales Report
                            </h2>

                        </div>
                        <div class="intro-y box p-5 mt-12 sm:mt-2">
                            <div class="flex flex-col md:flex-row md:items-center">
                                <div class="flex">
                                    <ul class=" nav nav-pills  bg-slate-200 dark:bg-black/10 rounded-md mx-auto p-1 " role="tablist">
                                        <li id="active-users-tab" class="nav-item flex-1" role="presentation">
                                            <button class="nav-link w-full py-1.5 px-2 active" data-tw-toggle="pill" data-tw-target="#active-users" type="button" role="tab" aria-controls="active-users" aria-selected="true"> Active </button>
                                        </li>
                                        <li id="inactive-users-tab" class="nav-item flex-1" role="presentation">
                                            <button class="nav-link w-full py-1.5 px-2" data-tw-toggle="pill" data-tw-target="#inactive-users" type="button" role="tab" aria-selected="false"> Inactive </button>
                                        </li>
                                    </ul>

                                </div>

                                <div class="dropdown md:ml-auto mt-5 md:mt-0">
                                    <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown"> Download Reports <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                                    <div class="dropdown-menu w-40">
                                        <ul class="dropdown-content overflow-y-auto h-25">
                                            <li><a href="" class="dropdown-item">PDF Report</a></li>
                                            <li><a href="" class="dropdown-item">Excel Report</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="report-chart zoom-in">
                                <div class="h-[200px]">
                                    <canvas id="report-donut-chart-3" class="mt-6 -mb-6"></canvas>
                                </div>
                                <div class="flex flex-col justify-center items-center absolute w-full h-full top-0 left-0">
                                    <div class="text-xl 2xl:text-2xl font-medium">226</div>
                                    <div class="text-slate-500 mt-0.5">All Users</div>

                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                        <span class="truncate">Active Users -</span> <span class="font-medium ml-auto">62%</span>
                                    </div>

                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                        <span class="truncate">Inactive Users -</span> <span class="font-medium ml-auto">10%</span>
                                    </div>

                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                        <span class="truncate">Tempory Users -</span> <span class="font-medium ml-auto">28%</span>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- END: Sales Report -->




                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 grid grid-cols-12 gap-6 mt-1">
                        <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex items-center">
                                    <div class="w-2/4 flex-none">
                                        <div class="text-lg font-medium truncate">Target Sales</div>
                                        <div class="text-slate-500 mt-1">300 Sales</div>
                                    </div>
                                    <div class="flex-none ml-auto relative">
                                        <div class="w-[90px] h-[90px]">
                                            <canvas id="report-donut-chart-1"></canvas>
                                        </div>
                                        <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex">
                                    <div class="text-lg font-medium truncate mr-3">Social Media</div>
                                    <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">320 Followers</div>
                                </div>
                                <div class="mt-1">
                                    <div class="h-[58px]">
                                        <canvas class="simple-line-chart-1 -ml-1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex items-center">
                                    <div class="w-2/4 flex-none">
                                        <div class="text-lg font-medium truncate">New Products</div>
                                        <div class="text-slate-500 mt-1">1450 Products</div>
                                    </div>
                                    <div class="flex-none ml-auto relative">
                                        <div class="w-[90px] h-[90px]">
                                            <canvas id="report-donut-chart-2"></canvas>
                                        </div>
                                        <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex">
                                    <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                                    <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">180 Campaign</div>
                                </div>
                                <div class="mt-1">
                                    <div class="h-[58px]">
                                        <canvas class="simple-line-chart-1 -ml-1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: General Report -->

                </div>
            </div>
            <div class="col-span-12 2xl:col-span-3">
                <div class="2xl:border-l -mb-10 pb-10">
                    <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                        <!-- BEGIN: Important Notes -->
                        <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-auto">
                                    Important Notes
                                </h2>
                                <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"> <i data-lucide="chevron-left" class="w-4 h-4"></i> </button>
                                <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"> <i data-lucide="chevron-right" class="w-4 h-4"></i> </button>
                            </div>
                            <div class="mt-5 intro-x">
                                <div class="box zoom-in">
                                    <div class="tiny-slider" id="important-notes">
                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                            <div class="text-slate-400 mt-1">20 Hours ago</div>
                                            <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                            <div class="text-slate-400 mt-1">20 Hours ago</div>
                                            <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                            <div class="text-slate-400 mt-1">20 Hours ago</div>
                                            <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Important Notes -->

                        <!-- BEGIN: Schedules -->
                        <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                            <div class="intro-x flex items-center h-6">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Schedules
                                </h2>
                                <a href="" class="ml-auto text-primary truncate flex items-center"> <i data-lucide="plus" class="w-4 h-4 mr-1"></i> Add New Schedules </a>
                            </div>
                            <div class="mt-2">
                                <div class="intro-x box">
                                    <div class="p-5">
                                        <div class="flex">
                                            <i data-lucide="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                            <div class="font-medium text-base mx-auto">April</div>
                                            <i data-lucide="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                        </div>
                                        <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                            <div class="font-medium">Su</div>
                                            <div class="font-medium">Mo</div>
                                            <div class="font-medium">Tu</div>
                                            <div class="font-medium">We</div>
                                            <div class="font-medium">Th</div>
                                            <div class="font-medium">Fr</div>
                                            <div class="font-medium">Sa</div>
                                            <div class="py-0.5 rounded relative text-slate-500">29</div>
                                            <div class="py-0.5 rounded relative text-slate-500">30</div>
                                            <div class="py-0.5 rounded relative text-slate-500">31</div>
                                            <div class="py-0.5 rounded relative">1</div>
                                            <div class="py-0.5 rounded relative">2</div>
                                            <div class="py-0.5 rounded relative">3</div>
                                            <div class="py-0.5 rounded relative">4</div>
                                            <div class="py-0.5 rounded relative">5</div>
                                            <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                                            <div class="py-0.5 rounded relative">7</div>
                                            <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                            <div class="py-0.5 rounded relative">9</div>
                                            <div class="py-0.5 rounded relative">10</div>
                                            <div class="py-0.5 rounded relative">11</div>
                                            <div class="py-0.5 rounded relative">12</div>
                                            <div class="py-0.5 rounded relative">13</div>
                                            <div class="py-0.5 rounded relative">14</div>
                                            <div class="py-0.5 rounded relative">15</div>
                                            <div class="py-0.5 rounded relative">16</div>
                                            <div class="py-0.5 rounded relative">17</div>
                                            <div class="py-0.5 rounded relative">18</div>
                                            <div class="py-0.5 rounded relative">19</div>
                                            <div class="py-0.5 rounded relative">20</div>
                                            <div class="py-0.5 rounded relative">21</div>
                                            <div class="py-0.5 rounded relative">22</div>
                                            <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                                            <div class="py-0.5 rounded relative">24</div>
                                            <div class="py-0.5 rounded relative">25</div>
                                            <div class="py-0.5 rounded relative">26</div>
                                            <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                                            <div class="py-0.5 rounded relative">28</div>
                                            <div class="py-0.5 rounded relative">29</div>
                                            <div class="py-0.5 rounded relative">30</div>
                                            <div class="py-0.5 rounded relative text-slate-500">1</div>
                                            <div class="py-0.5 rounded relative text-slate-500">2</div>
                                            <div class="py-0.5 rounded relative text-slate-500">3</div>
                                            <div class="py-0.5 rounded relative text-slate-500">4</div>
                                            <div class="py-0.5 rounded relative text-slate-500">5</div>
                                            <div class="py-0.5 rounded relative text-slate-500">6</div>
                                            <div class="py-0.5 rounded relative text-slate-500">7</div>
                                            <div class="py-0.5 rounded relative text-slate-500">8</div>
                                            <div class="py-0.5 rounded relative text-slate-500">9</div>
                                        </div>
                                    </div>
                                    <div class="border-t border-slate-200/60 p-5">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                            <span class="truncate">UI/UX Workshop</span> <span class="font-medium xl:ml-auto">23th</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                            <span class="truncate">VueJs Frontend Development</span> <span class="font-medium xl:ml-auto">10th</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                            <span class="truncate">Laravel Rest API</span> <span class="font-medium xl:ml-auto">31th</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Schedules -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
