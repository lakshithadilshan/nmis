
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
                                <div class="search-result__content__title">Employee ID</div>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/rm.jpg">
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
                       All User List
                    </h2>
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <button class="btn btn-primary shadow-md mr-2">Add New User</button>
                        <div class="dropdown ml-auto sm:ml-0">
                            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                            </button>
                            
                        </div>
                    </div>
                </div>
                <!-- BEGIN: HTML Table Data -->
                <div class="intro-y box p-5 mt-5">
                    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
                            <div class="sm:flex items-center sm:mr-4">
                                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">User Type</label>
                                <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                                    <option value="name">Name</option>
                                    <option value="category">Category</option>
                                    <option value="remaining_stock">Remaining Stock</option>
                                </select>
                            </div>
                           
                            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Emp ID/Name</label>
                                <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
                            </div>
                            <div class="mt-2 xl:mt-0">
                                <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16" >Go</button>
                                <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1" >Reset</button>
                            </div>
                        </form>
                        <div class="flex mt-5 sm:mt-0">
                            <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </button>
                            <div class="dropdown w-1/2 sm:w-auto">
                                <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export CSV </a>
                                        </li>
                                        <li>
                                            <a id="tabulator-export-json" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export JSON </a>
                                        </li>
                                        <li>
                                            <a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX </a>
                                        </li>
                                        <li>
                                            <a id="tabulator-export-html" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export HTML </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto scrollbar-hidden">
                        <div id="tabulator" class="mt-5 table-report table-report--tabulator"></div>
                    </div>
                </div>
                <!-- END: HTML Table Data -->
            </div>


            @endsection