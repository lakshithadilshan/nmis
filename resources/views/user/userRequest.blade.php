<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Request</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="py-5">
<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone - HTML Admin Template" class="w-6" src="dist/images/logo.svg">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
</div>
<!-- END: Mobile Menu -->
<div class="flex">
    <!-- BEGIN: Side Menu -->
    <nav class="side-nav">
        <a href="" class="intro-x flex items-center pl-5 pt-4">
            <img alt="" class="w-6" src=" {{asset('dist/images/logo.svg')}} ">
            <span class="hidden xl:block text-white text-lg ml-3"> UOR - NMIS </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
            <li>
                <a href="javascript:;.html" class="side-menu {{session('index')}}">
                    <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="side-menu__title">
                        Dashboard
                        <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                    </div>
                </a>

            </li>
            <li>
            <li class="side-nav__devider my-6"></li>
            </li>


            <li>
            <li class="side-nav__devider my-6"></li>
            </li>
            <li>
                <a href="UserRequestmodule" class="side-menu {{session('request')}}">
                    <div class="side-menu__icon"> <i data-lucide="phone-outgoing"></i> </div>
                    <div class="side-menu__title"> Request  </div>
                </a>

            </li>
            <li>
            <li class="side-nav__devider my-6"></li>
                <a href="UserLeavemodule" class="side-menu {{session('leave')}}">
                    <div class="side-menu__icon"> <i data-lucide="phone-outgoing"></i> </div>
                    <div class="side-menu__title"> Leave  </div>
                </a>

            </li>

            <li>
            <li class="side-nav__devider my-6"></li>
            </li>
            <li>
                <a href="UserComplaintmodule" class="side-menu {{session('complain')}}">
                    <div class="side-menu__icon"> <i data-lucide="frown"></i> </div>
                    <div class="side-menu__title"> Raise & Issue </div>
                </a>

            </li>

            <li>
            <li class="side-nav__devider my-6"></li>
            </li>
            <li>
                <a href="Userravemodule" class="side-menu {{session('rave')}}">
                    <div class="side-menu__icon"> <i data-lucide="star"></i> </div>
                    <div class="side-menu__title"> Rave  </div>
                </a>

            </li>

            <li>
            <li class="side-nav__devider my-6"></li>
            </li>
            <li>
                <a href="social" class="side-menu {{session('social')}}">
                    <div class="side-menu__icon"> <i data-lucide="instagram"></i> </div>
                    <div class="side-menu__title"> Social Group </div>
                </a>

            </li>

            <li>
            <li class="side-nav__devider my-6"></li>
            </li>
            <li>
                <a href="UsermobileApp" class="side-menu {{session('mobile')}}">
                    <div class="side-menu__icon"> <i data-lucide="smartphone"></i> </div>
                    <div class="side-menu__title"> Mobile App </div>
                </a>

            </li>


        </ul>
    </nav>
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Request </li>
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
                            <div class="font-medium">{{session('usernamee')}} </div>
                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500"></div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="{{route('systemprofile')}}" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
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
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Request
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="btn btn-primary shadow-md mr-2">Add New Request</button>
                <div class="dropdown ml-auto sm:ml-0">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="share-2" class="w-4 h-4 mr-2"></i> </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="download" class="w-4 h-4 mr-2"></i>  </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">

        <div class="intro-y grid grid-cols-12 gap-6 mt-5">

            <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist" >
                <li id="profile-tab" class="nav-item" role="presentation">
                    <a type="button" id="showgallery" href="javascript:;" class="nav-link py-4 flex items-center active" data-tw-target="#profile" aria-controls="profile" aria-selected="true" role="tab" > <i class="w-4 h-4 mr-2" data-lucide="user"></i> Request Form </a>
                </li>
                <li id="profile-tab" class="nav-item" role="presentation">
                    <a type="button" id="showupdateform" href="javascript:;" class="nav-link py-4 flex items-center " data-tw-target="#profile" aria-controls="profile" aria-selected="true" role="tab" > <i class="w-4 h-4 mr-2" data-lucide="user"></i> Recent Request </a>
                </li>

            </ul>
        </div>
            <script>
                document.getElementById("showupdateform").addEventListener("click",
                    function(){

                        document.querySelector("#gallery").style.display = "none";
                        document.querySelector("#settings").style.display = "block";

                    });
                document.getElementById("showgallery").addEventListener("click",
                    function(){

                        document.querySelector("#gallery").style.display = "block";
                        document.querySelector("#settings").style.display = "none";

                    });
            </script>


            </div>
        <div id="gallery" class="intro-y col-span-8 md:col-span-3 box ">


            <div class="intro-y box mt-3 " >

                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 ">
                    <h2 class="font-medium text-base mr-auto">
                        Add Request Form
                    </h2>

                </div>
                <div id="horizontal-form" class="p-3">
                    <div class="preview">



                        <form method="POST" action="storeRequest">
                            @csrf

                            <div class="form-inline mt-5">
                                <label for="horizontal-form-2" class="form-label sm:w-20"> Type</label>
                                <select name="reqtype" id="usertype" class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                    @foreach($requesttypesfresh as $ut)
                                        <option value="{{$ut->request_type}}">{{$ut->request_type}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-inline mt-5">
                                <label for="horizontal-form-2" class="form-label sm:w-20"> Priority</label>
                                <select name="reqpriority" id="status" class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                    <option class="text-danger">High</option>
                                    <option class="text-success">Low</option>
                                </select>
                            </div>
                            <div class="form-inline mt-5">
                                <label for="horizontal-form-1" class="form-label sm:w-20">Description</label>
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>

                            </div>





                            <div class="sm:ml-20 sm:pl-5 mt-5">
                                <input type="submit" class="btn btn-primary shadow-md mr-2"  >
                            </div>
                    </div>
                    </form>


                </div>



            </div>
        </div>
        <div id="settings" class="intro-y col-span-12 md:col-span-6 box hidden">

            <table class="table table-report sm:mt-2 ">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Recent Requests
                    </h2>

                </div>
                <thead>
                <tr>
                    <th class="whitespace-nowrap">Type</th>
                    <th class="whitespace-nowrap">Description</th>
                    <th class="text-center whitespace-nowrap">Priority</th>
                    <th class="text-center whitespace-nowrap">Status</th>
                    <th class="text-center whitespace-nowrap"></th>
                    <th class="text-center whitespace-nowrap"></th>

                </tr>
                </thead>
                <tbody>
                @foreach ($data as $req )


                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                    {{$req->req_type}}
                                </div>

                            </div>
                        </td>
                        <td>
                            <form method="post" action="edit_request_desc">
                                @csrf
                            <a id="desc{{$req->request_id}}" href="" class="font-medium whitespace-nowrap">{{$req->description}}</a>
                            <input type="text" name="description" class="form-control-rounded hidden" placeholder="{{$req->description}}" id="txtpass{{$req->request_id}}">
                            <input type="hidden" value="{{$req->request_id}}" name="id">
                                <input type="submit" class="hidden">
                            </form>
                        </td>
                        <td class="text-center">{{$req->priority}}</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="check-square" data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path></svg> {{$req->status}} </div>
                        </td>
                        @if($req->status == 'Pending')
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a title="click to edit" type="button" id="click{{$req->request_id}}" class="flex items-center mr-3" > <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="check-square" data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path></svg> Edit </a>
                            </div>
                            <script>
                                document.getElementById("click{{$req->request_id}}").addEventListener("click",
                                    function (){
                                        document.querySelector("#desc{{$req->request_id}}").style.display="none";
                                        document.querySelector("#txtpass{{$req->request_id}}").style.display = "block";
                                    });
                            </script>
                        </td>
                        @endif
                        @if($req->status == 'Pending')
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-danger" href="{{ url('cancelrequest/' . $req->request_id) }}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2" class="lucide lucide-trash-2 w-4 h-4 mr-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Cancel </a>
                                </div>

                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

        </div>
    </div>
    </div>

</div>
</div>
<!-- END: Content -->
</div>
<

<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
<script src="dist/js/app.js"></script>
<!-- END: JS Assets-->
<script src="dist/js/ckeditor-classic.js"></script>
</body>
</html>
