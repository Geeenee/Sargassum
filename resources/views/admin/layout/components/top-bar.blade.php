<div class="top-bar-boxed h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
    <div class="flex items-center h-full">
        <!-- BEGIN: Logo -->
        <a href="" class="logo -intro-x hidden md:flex xl:w-[200px] block">
            <img alt="Midone - HTML Admin Template" class="w-6 logo__image" src="../build/assets/images/logo.svg">
            <span class="ml-3 text-lg text-white logo__text">Sargassum Biotech</span>
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
            <ol class="breadcrumb breadcrumb-light">
                <li class="breadcrumb-item"><a href="#">Application</a></li>
                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        <div class="relative mr-3 intro-x sm:mr-6">
            <div class="hidden search sm:block">
                <input type="text" class="border-transparent search__input form-control" placeholder="Search...">
                <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
            </div>
            <a class="notification notification--light sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
            <div class="search-result">
                <div class="search-result__content">
                    <div class="search-result__content__title">Pages</div>
                    <div class="mb-5">
                        <a href="" class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 rounded-full bg-success/20 dark:bg-success/10 text-success"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                            <div class="ml-3">Mail Settings</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="flex items-center justify-center w-8 h-8 rounded-full bg-pending/10 text-pending"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                            <div class="ml-3">Users & Permissions</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="flex items-center justify-center w-8 h-8 rounded-full bg-primary/10 dark:bg-primary/20 text-primary/80"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                            <div class="ml-3">Transactions Report</div>
                        </a>
                    </div>
                    <div class="search-result__content__title">Users</div>
                    <div class="mb-5">
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/profile-15.jpg">
                            </div>
                            <div class="ml-3">Christian Bale</div>
                            <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">christianbale@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/profile-7.jpg">
                            </div>
                            <div class="ml-3">Johnny Depp</div>
                            <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">johnnydepp@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/profile-12.jpg">
                            </div>
                            <div class="ml-3">Robert De Niro</div>
                            <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">robertdeniro@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/profile-1.jpg">
                            </div>
                            <div class="ml-3">Morgan Freeman</div>
                            <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">morganfreeman@left4code.com</div>
                        </a>
                    </div>
                    <div class="search-result__content__title">Products</div>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/preview-1.jpg">
                        </div>
                        <div class="ml-3">Samsung Q90 QLED TV</div>
                        <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">Electronic</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/preview-14.jpg">
                        </div>
                        <div class="ml-3">Sony A7 III</div>
                        <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">Photography</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/preview-3.jpg">
                        </div>
                        <div class="ml-3">Dell XPS 13</div>
                        <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">PC &amp; Laptop</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/preview-11.jpg">
                        </div>
                        <div class="ml-3">Nike Tanjun</div>
                        <div class="w-48 ml-auto text-xs text-right truncate text-slate-500">Sport &amp; Outdoor</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- END: Search -->
        <!-- BEGIN: Notifications -->
        <div class="mr-4 intro-x dropdown sm:mr-6">
            <div class="cursor-pointer dropdown-toggle notification notification--bullet" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
            <div class="pt-2 notification-content dropdown-menu">
                <div class="notification-content__box dropdown-content">
                    <div class="notification-content__title">Notifications</div>
                    <div class="relative flex items-center cursor-pointer ">
                        <div class="flex-none w-12 h-12 mr-1 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/profile-15.jpg">
                            <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="mr-5 font-medium truncate">Christian Bale</a>
                                <div class="ml-auto text-xs text-slate-400 whitespace-nowrap">06:05 AM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be ../build/assetsracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                        </div>
                    </div>
                    <div class="relative flex items-center mt-5 cursor-pointer">
                        <div class="flex-none w-12 h-12 mr-1 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/profile-7.jpg">
                            <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="mr-5 font-medium truncate">Johnny Depp</a>
                                <div class="ml-auto text-xs text-slate-400 whitespace-nowrap">06:05 AM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                        </div>
                    </div>
                    <div class="relative flex items-center mt-5 cursor-pointer">
                        <div class="flex-none w-12 h-12 mr-1 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/profile-12.jpg">
                            <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="mr-5 font-medium truncate">Robert De Niro</a>
                                <div class="ml-auto text-xs text-slate-400 whitespace-nowrap">05:09 AM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                        </div>
                    </div>
                    <div class="relative flex items-center mt-5 cursor-pointer">
                        <div class="flex-none w-12 h-12 mr-1 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/profile-1.jpg">
                            <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="mr-5 font-medium truncate">Morgan Freeman</a>
                                <div class="ml-auto text-xs text-slate-400 whitespace-nowrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                        </div>
                    </div>
                    <div class="relative flex items-center mt-5 cursor-pointer">
                        <div class="flex-none w-12 h-12 mr-1 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="../build/assets/images/profile-11.jpg">
                            <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="mr-5 font-medium truncate">Russell Crowe</a>
                                <div class="ml-auto text-xs text-slate-400 whitespace-nowrap">06:05 AM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="w-8 h-8 intro-x dropdown">
            <div class="w-8 h-8 overflow-hidden scale-110 rounded-full shadow-lg dropdown-toggle image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Midone - HTML Admin Template" src="../build/assets/images/profile-5.jpg">
            </div>
            <div class="w-56 dropdown-menu">
                <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">Christian Bale</div>
                        <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Backend Engineer</div>
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
                        <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
