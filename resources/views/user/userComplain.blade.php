<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Add New Post - Midone - Tailwind HTML Admin Template</title>
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
    <ul class="border-t border-white/[0.08] py-5 hidden">
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 3 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-4.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 4 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="box"></i> </div>
                <div class="menu__title"> Menu Layout <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Side Menu </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Simple Menu </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-light-dashboard-overview-1.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Top Menu </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="side-menu-light-inbox.html" class="menu">
                <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                <div class="menu__title"> Inbox </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-file-manager.html" class="menu">
                <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                <div class="menu__title"> File Manager </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-point-of-sale.html" class="menu">
                <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                <div class="menu__title"> Point of Sale </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-chat.html" class="menu">
                <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
                <div class="menu__title"> Chat </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-post.html" class="menu menu--active">
                <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="menu__title"> Post </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-calendar.html" class="menu">
                <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                <div class="menu__title"> Calendar </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="edit"></i> </div>
                <div class="menu__title"> Crud <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-crud-data-list.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Data List </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-crud-form.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Form </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="users"></i> </div>
                <div class="menu__title"> Users <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-users-layout-1.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Layout 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-2.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Layout 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-3.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Layout 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="trello"></i> </div>
                <div class="menu__title"> Profile <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-profile-overview-1.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-2.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-3.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="layout"></i> </div>
                <div class="menu__title"> Pages <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Wizards <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Blog <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-blog-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Pricing <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Invoice <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> FAQ <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-faq-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login-light-login.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Login </div>
                    </a>
                </li>
                <li>
                    <a href="login-light-register.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Register </div>
                    </a>
                </li>
                <li>
                    <a href="main-light-error-page.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Error Page </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-update-profile.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Update profile </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-change-password.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Change Password </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                <div class="menu__title"> Components <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Table <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-table.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Regular Table</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tabulator.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Tabulator</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overlay <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-modal.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Modal</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slide-over.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Slide Over</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-notification.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Notification</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-tab.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Tab </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-accordion.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Accordion </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-button.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Button </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-alert.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Alert </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-progress-bar.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Progress Bar </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tooltip.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Tooltip </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dropdown.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Dropdown </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-typography.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Typography </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-icon.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Icon </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-loading-icon.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Loading Icon </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="sidebar"></i> </div>
                <div class="menu__title"> Forms <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-regular-form.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Regular Form </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-datepicker.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Datepicker </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tom-select.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Tom Select </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-upload.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> File Upload </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Wysiwyg Editor <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-classic.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Classic</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-inline.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Inline</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-balloon.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Balloon</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Balloon Block</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-document.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Document</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-validation.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Validation </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                <div class="menu__title"> Widgets <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-chart.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Chart </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-slider.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Slider </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-image-zoom.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Image Zoom </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- END: Mobile Menu -->
<div class="flex">
    <!-- BEGIN: Side Menu -->
    <nav class="side-nav">
        <a href="" class="intro-x flex items-center pl-5 pt-4">
            <img alt="Midone - HTML Admin Template" class="w-6" src=" {{asset('dist/images/logo.svg')}} ">
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
                    <div class="side-menu__title"> Request Module </div>
                </a>

            </li>

            <li>
            <li class="side-nav__devider my-6"></li>
            </li>
            <li>
                <a href="UserComplaintmodule" class="side-menu {{session('complain')}}">
                    <div class="side-menu__icon"> <i data-lucide="frown"></i> </div>
                    <div class="side-menu__title"> Complaint Module </div>
                </a>

            </li>

            <li>
            <li class="side-nav__devider my-6"></li>
            </li>
            <li>
                <a href="Userravemodule" class="side-menu {{session('rave')}}">
                    <div class="side-menu__icon"> <i data-lucide="star"></i> </div>
                    <div class="side-menu__title"> Rave Module </div>
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
                    <li class="breadcrumb-item active" aria-current="page">Complain Module</li>
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
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
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
                Complain Module
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="btn btn-primary shadow-md mr-2">Add New Complain</button>
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
        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
            <!-- BEGIN: Blog Layout -->
            <div class="intro-y col-span-12 md:col-span-6 box">


                <div class="intro-y box mt-3" >

                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                           Complain Form
                        </h2>

                    </div>
                    <div id="horizontal-form" class="p-3">
                        <div class="preview">



                            <form method="get" action="storeComplain">
                                @csrf


                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-1" class="form-label sm:w-20">Description</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                    <br>



                                </div>
                                <div class="mt-3">

                                    <label class="form-label">Upload Image</label>
                                    <div class="border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                        <div class="fallback">
                                            <input name="picture" type="file" >
                                        </div>

                                        <div class="dz-message" data-dz-message>
                                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                        </div>
                                    </div>
                                    <div class="px-4 pb-4 flex items-center cursor-pointer relative">

                                    </div>
                                </div>





                                <div class="sm:ml-20 sm:pl-5 mt-5">
                                    <input type="submit" class="btn btn-primary shadow-md mr-2"  >
                                </div>
                        </div>
                        </form>


                    </div>



                </div>
            </div>

            <div class="intro-y col-span-12 md:col-span-6 box">



            </div>

        </div>


        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagiantion -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                    </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagiantion -->
    </div>
</div>
<!-- END: Content -->


</div>
<!-- END: Post Content -->
<!-- BEGIN: Post Info -->

<!-- END: Post Info -->
</div>
</div>
<!-- END: Content -->
</div>
<!-- BEGIN: Dark Mode Switcher-->
<div data-url="side-menu-dark-post.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
    <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
    <div class="dark-mode-switcher__toggle border"></div>
</div>
<!-- END: Dark Mode Switcher-->

<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
<script src="dist/js/app.js"></script>
<!-- END: JS Assets-->
<script src="dist/js/ckeditor-classic.js"></script>
</body>
</html>
