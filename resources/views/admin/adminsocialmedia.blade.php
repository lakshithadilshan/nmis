
@extends('admin.admin_master')
@section('admin')



    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Social Media</li>
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

            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-auto sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="Midone - HTML Admin Template" src="{{session('propic')}}">
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
                            <a href="logout" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
        <div class="relative">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xl:col-span-9 2xl:col-span-9 z-10">
                    <div class="mt-6 -mb-6 intro-y">
                        <div class="alert alert-dismissible show box bg-primary text-white flex items-center mb-6" role="alert">
                                    <span>
                                        Social Media Administrative Side
                                        <button class="rounded-md bg-white bg-opacity-20 dark:bg-darkmode-300 hover:bg-opacity-30 py-0.5 px-2 -my-3 ml-2">Live Preview</button>
                                    </span>
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button>
                        </div>
                    </div>
                    <div class="mt-14 mb-3 grid grid-cols-12 sm:gap-10 intro-y">
                        <div class="col-span-12 sm:col-span-6 md:col-span-4 py-6 sm:pl-5 md:pl-0 lg:pl-5 relative text-center sm:text-left">
                            <div class="absolute pt-0.5 2xl:pt-0 mt-5 2xl:mt-6 top-0 right-0 dropdown">
                                <a class="dropdown-toggle block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-vertical" class="w-5 h-5 text-slate-500"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Monthly Report </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Annual Report </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-sm 2xl:text-base font-medium -mb-1"> Hi {{session('usernamee')}}, <span class="text-slate-600 dark:text-slate-300 font-normal">welcome back!</span> </div>
                           <div class="mt-14 2xl:mt-24 dropdown">
                                <button class="dropdown-toggle btn btn-rounded-primary w-44 2xl:w-52 px-4 relative justify-start" aria-expanded="false" data-tw-toggle="dropdown">
                                    Manage
                                    <span class="w-8 h-8 absolute flex justify-center items-center right-0 top-0 bottom-0 my-auto ml-auto mr-1"> <i data-lucide="chevron-down" class="w-4 h-4"></i> </span>
                                </button>
                                <div class="dropdown-menu w-44 2xl:w-52">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="socialuseraccounts" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i>User Accounts </a>
                                        </li>
                                        <li>
                                            <a href="socialusercomments" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Comments </a>
                                        </li>
                                        <li>
                                            <a href="socialuserposts" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Posts </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row-start-2 md:row-start-auto col-span-12 md:col-span-4 py-6 border-black border-opacity-10 border-t md:border-t-0 md:border-l md:border-r border-dashed px-10 sm:px-28 md:px-5 -mx-5">
                            <div class="flex flex-wrap items-center">
                                <div class="flex items-center w-full sm:w-auto justify-center sm:justify-start mr-auto mb-5 2xl:mb-0">
                                    <div class="w-2 h-2 bg-primary rounded-full -mt-4"></div>
                                    <div class="ml-3.5">
                                        <div class="relative text-xl 2xl:text-2xl font-medium leading-6 2xl:leading-5 pl-3.5 2xl:pl-4"> <span class="absolute text-base 2xl:text-xl top-0 left-0 2xl:-mt-1.5"></span> {{$postactive}} </div>
                                        <div class="text-slate-500 mt-2">All Posts</div>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-10 text-slate-600 dark:text-slate-300"></div>

                        </div>
                        <div class="col-span-12 sm:col-span-6 md:col-span-4 py-6 border-black border-opacity-10 border-t sm:border-t-0 border-l md:border-l-0 border-dashed -ml-4 pl-4 md:ml-0 md:pl-0">

                            <div class="tab-content mt-6">
                                <div class="tab-pane active" id="active-users" role="tabpanel" aria-labelledby="active-users-tab">
                                    <div class="relative mt-8">


                                    </div>
                                    <div class="mx-auto w-10/12 2xl:w-2/3 mt-8">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                            <span class="truncate">Active Users</span> <span class="font-medium ml-auto">{{$activeuser}}</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                            <span class="truncate">Offline Users</span> <span class="font-medium ml-auto">{{$offuser}}</span>
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


@endsection
