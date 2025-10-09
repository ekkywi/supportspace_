 <header class="app-header">

     <div class="main-header-container container-fluid">

         <div class="header-content-left">

             <div class="header-element">
                 <div class="horizontal-logo">
                     <a class="header-logo" href="{{ route("portal") }}">
                         <img alt="logo" class="desktop-logo" src="{{ asset("images/brand-logos/logo.png") }}">
                         <img alt="logo" class="toggle-logo" src="{{ asset("images/brand-logos/icon.png") }}">
                         <img alt="logo" class="desktop-dark" src="{{ asset("images/brand-logos/logo-darkmode.png") }}">
                         <img alt="logo" class="toggle-dark" src="{{ asset("images/brand-logos/icon-darkmode.png") }}">
                     </a>
                 </div>
             </div>

             <div class="header-element">
                 <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
             </div>

         </div>

         <div class="header-content-right">
             <div class="header-element notifications-dropdown">
                 <a aria-expanded="false" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown" href="javascript:void(0);" id="messageDropdown">
                     <i class="bx bx-bell header-link-icon"></i>
                     <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary" id="notification-icon-badge">5</span>
                 </a>
                 <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                     <div class="p-3">
                         <div class="d-flex align-items-center justify-content-between">
                             <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                             <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                         </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <ul class="list-unstyled mb-0" id="header-notification-scroll">
                         <li class="dropdown-item">
                             <div class="d-flex align-items-start">
                                 <div class="pe-2">
                                     <span class="avatar avatar-md bg-primary-transparent avatar-rounded"><i class="ti ti-gift fs-18"></i></span>
                                 </div>
                                 <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                     <div>
                                         <p class="mb-0 fw-semibold"><a href="notifications.html">Your Order Has Been Shipped</a></p>
                                         <span class="text-muted fw-normal fs-12 header-notification-text">Order No: 123456 Has Shipped To Your Delivery Address</span>
                                     </div>
                                     <div>
                                         <a class="min-w-fit-content text-muted me-1 dropdown-item-close1" href="javascript:void(0);"><i class="ti ti-x fs-16"></i></a>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </ul>
                     <div class="p-3 empty-header-item1 border-top">
                         <div class="d-grid">
                             <a class="btn btn-primary" href="notifications.html">View All</a>
                         </div>
                     </div>
                     <div class="p-5 empty-item1 d-none">
                         <div class="text-center">
                             <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                 <i class="ri-notification-off-line fs-2"></i>
                             </span>
                             <h6 class="fw-semibold mt-3">No New Notifications</h6>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="header-element header-shortcuts-dropdown">
                 <a aria-expanded="false" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown" href="javascript:void(0);" id="notificationDropdown">
                     <i class="bx bx-grid-alt header-link-icon"></i>
                 </a>
                 <div aria-labelledby="notificationDropdown" class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end">
                     <div class="p-3">
                         <div class="d-flex align-items-center justify-content-between">
                             <p class="mb-0 fs-17 fw-semibold">Related Apps</p>
                         </div>
                     </div>
                     <div class="dropdown-divider mb-0"></div>
                     <div class="main-header-shortcuts p-2" id="header-shortcut-scroll">
                         <div class="row g-2">
                             <div class="col-4">
                                 <a href="javascript:void(0);">
                                     <div class="text-center p-3 related-app">
                                         <span class="avatar avatar-sm avatar-rounded">
                                             <img alt="" src="{{ asset("images/apps/figma.png") }}">
                                         </span>
                                         <span class="d-block fs-12">Figma</span>
                                     </div>
                                 </a>
                             </div>
                             <div class="col-4">
                                 <a href="javascript:void(0);">
                                     <div class="text-center p-3 related-app">
                                         <span class="avatar avatar-sm avatar-rounded">
                                             <img alt="" src="{{ asset("images/apps/microsoft-powerpoint.png") }}">
                                         </span>
                                         <span class="d-block fs-12">Power Point</span>
                                     </div>
                                 </a>
                             </div>
                             <div class="col-4">
                                 <a href="javascript:void(0);">
                                     <div class="text-center p-3 related-app">
                                         <span class="avatar avatar-sm avatar-rounded">
                                             <img alt="" src="{{ asset("images/apps/microsoft-word.png") }}">
                                         </span>
                                         <span class="d-block fs-12">MS Word</span>
                                     </div>
                                 </a>
                             </div>
                             <div class="col-4">
                                 <a href="javascript:void(0);">
                                     <div class="text-center p-3 related-app">
                                         <span class="avatar avatar-sm avatar-rounded">
                                             <img alt="" src="{{ asset("images/apps/calender.png") }}">
                                         </span>
                                         <span class="d-block fs-12">Calendar</span>
                                     </div>
                                 </a>
                             </div>
                             <div class="col-4">
                                 <a href="javascript:void(0);">
                                     <div class="text-center p-3 related-app">
                                         <span class="avatar avatar-sm avatar-rounded">
                                             <img alt="" src="{{ asset("images/apps/sketch.png") }}">
                                         </span>
                                         <span class="d-block fs-12">Sketch</span>
                                     </div>
                                 </a>
                             </div>
                             <div class="col-4">
                                 <a href="javascript:void(0);">
                                     <div class="text-center p-3 related-app">
                                         <span class="avatar avatar-sm avatar-rounded">
                                             <img alt="" src="{{ asset("images/apps/google-docs.png") }}">
                                         </span>
                                         <span class="d-block fs-12">Docs</span>
                                     </div>
                                 </a>
                             </div>
                             <div class="col-4">
                                 <a href="javascript:void(0);">
                                     <div class="text-center p-3 related-app">
                                         <span class="avatar avatar-sm avatar-rounded">
                                             <img alt="" src="{{ asset("images/apps/google.png") }}">
                                         </span>
                                         <span class="d-block fs-12">Google</span>
                                     </div>
                                 </a>
                             </div>
                             <div class="col-4">
                                 <a href="javascript:void(0);">
                                     <div class="text-center p-3 related-app">
                                         <span class="avatar avatar-sm avatar-rounded">
                                             <img alt="" src="{{ asset("images/apps/translate.png") }}">
                                         </span>
                                         <span class="d-block fs-12">Translate</span>
                                     </div>
                                 </a>
                             </div>
                             <div class="col-4">
                                 <a href="javascript:void(0);">
                                     <div class="text-center p-3 related-app">
                                         <span class="avatar avatar-sm avatar-rounded">
                                             <img alt="" src="{{ asset("images/apps/google-sheets.png") }}">
                                         </span>
                                         <span class="d-block fs-12">Sheets</span>
                                     </div>
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="p-3 border-top">
                         <div class="d-grid">
                             <a class="btn btn-primary" href="javascript:void(0);">View All</a>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="header-element">
                 <a aria-expanded="false" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown" href="#" id="mainHeaderProfile">
                     <div class="d-flex align-items-center">
                         <div class="me-sm-2 me-0">
                             <img alt="img" class="rounded-circle" height="32" src="{{ asset("images/faces/9.jpg") }}" width="32">
                         </div>
                         <div class="d-sm-block d-none">
                             <p class="fw-bold mb-0 lh-1"></p>
                             <span class="op-7 fw-semibold d-block fs-11"></span>
                         </div>
                     </div>
                 </a>
                 <ul aria-labelledby="mainHeaderProfile" class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end">
                     <li><a class="dropdown-item d-flex" href="profile.html"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                     <li><a class="dropdown-item d-flex" href="mail.html"><i class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span class="badge bg-success-transparent ms-auto">25</span></a></li>
                     <li><a class="dropdown-item d-flex border-block-end" href="to-do-list.html"><i class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a></li>
                     <li><a class="dropdown-item d-flex" href="mail-settings.html"><i class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                     <li><a class="dropdown-item d-flex border-block-end" href="javascript:void(0);"><i class="ti ti-wallet fs-18 me-2 op-7"></i>Bal: $7,12,950</a></li>
                     <li><a class="dropdown-item d-flex" href="chat.html"><i class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                     <li>
                         <form action="#" method="POST">
                             @csrf
                             <button class="dropdown-item d-flex border-0 bg-transparent w-100" type="submit">
                                 <i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out
                             </button>
                         </form>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </header>
