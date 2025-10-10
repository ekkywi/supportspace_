@extends("layouts.portal")

@section("title")
    Profil Saya &mdash; {{ config("app.name") }}
@endsection

@section("styles")
    <link href="{{ asset("images/brand-logos/favicon.ico") }}" rel="icon" type="image/x-icon">

    <link href="{{ asset("libs/bootstrap/css/bootstrap.min.css") }}" id="style" rel="stylesheet">
    <link href="{{ asset("css/styles.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/icons.css") }}" rel="stylesheet">
    <link href="{{ asset("libs/node-waves/waves.min.css") }}" rel="stylesheet">
    <link href="{{ asset("libs/simplebar/simplebar.min.css") }}" rel="stylesheet">
    <link href="{{ asset("libs/flatpickr/flatpickr.min.css") }}" rel="stylesheet">
    <link href="{{ asset("libs/@simonwep/pickr/themes/nano.min.css") }}" rel="stylesheet">
    <link href="{{ asset("libs/choices.js/public/assets/styles/choices.min.css") }}" rel="stylesheet">
    <link href="{{ asset("libs/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
@endsection

@section("scripts")
    <script src="{{ asset("libs/choices.js/public/assets/scripts/choices.min.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>
    <script src="{{ asset("libs/@popperjs/core/umd/popper.min.js") }}"></script>
    <script src="{{ asset("libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("js/defaultmenu.min.js") }}"></script>
    <script src="{{ asset("libs/node-waves/waves.min.js") }}"></script>
    <script src="{{ asset("js/sticky.js") }}"></script>
    <script src="{{ asset("libs/simplebar/simplebar.min.js") }}"></script>
    <script src="{{ asset("js/simplebar.js") }}"></script>
    <script src="{{ asset("libs/@simonwep/pickr/pickr.es5.min.js") }}"></script>
    <script src="{{ asset("js/custom-switcher.min.js") }}"></script>
    <script src="{{ asset("libs/glightbox/js/glightbox.min.js") }}"></script>
    <script src="{{ asset("js/profile.js") }}"></script>
    <script src="{{ asset("js/custom.js") }}"></script>
@endsection

@section("content")
    <div class="container-fluid p-4">
        <div class="row">

            <div class="col-xxl-4 col-xl-12 mb-4 mb-xxl-0">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="d-sm-flex align-items-top p-4 border-bottom border-block-end-dashed main-profile-cover">
                            <div>
                                <span class="avatar avatar-xxl avatar-rounded online me-3">
                                    <img alt="" src="../assets/images/faces/9.jpg">
                                </span>
                            </div>
                            <div class="flex-fill main-profile-info">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold mb-1 text-fixed-white">Json Taylor</h6>
                                </div>
                                <p class="mb-1 text-muted text-fixed-white op-7">Chief Executive Officer (C.E.O)</p>
                                <p class="fs-12 text-fixed-white mb-4 op-5">
                                    <span class="me-3"><i class="ri-building-line me-1 align-middle"></i>Georgia</span>
                                    <span><i class="ri-map-pin-line me-1 align-middle"></i>Washington D.C</span>
                                </p>
                                <div class="d-flex mb-0">
                                    <div class="me-4">
                                        <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">113</p>
                                        <p class="mb-0 fs-11 op-5 text-fixed-white">Projects</p>
                                    </div>
                                    <div class="me-4">
                                        <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">12.2k</p>
                                        <p class="mb-0 fs-11 op-5 text-fixed-white">Followers</p>
                                    </div>
                                    <div class="me-4">
                                        <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">128</p>
                                        <p class="mb-0 fs-11 op-5 text-fixed-white">Following</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 border-bottom border-block-end-dashed">
                            <div class="mb-4">
                                <p class="fs-15 mb-2 fw-semibold">Professional Bio :</p>
                                <p class="fs-12 text-muted op-7 mb-0">
                                    I am <b class="text-default">Sonya Taylor,</b> here by conclude that,i am the founder and managing director of the prestigeous company name laugh at all and acts as the cheif executieve officer of the company.
                                </p>
                            </div>
                            <div class="mb-0">
                                <p class="fs-15 mb-2 fw-semibold">Links :</p>
                                <div class="mb-0">
                                    <p class="mb-1">
                                        <a class="text-primary" href="javascript:void(0)"><u>https://www.spruko.com/</u></a>
                                    </p>
                                    <p class="mb-0">
                                        <a class="text-primary" href="javascript:void(0)"><u>https://themeforest.net/user/spruko/portfolio</u></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 border-bottom border-block-end-dashed">
                            <p class="fs-15 mb-2 me-4 fw-semibold">Contact Information :</p>
                            <div class="text-muted">
                                <p class="mb-2">
                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                        <i class="ri-mail-line align-middle fs-14"></i>
                                    </span>
                                    sonyataylor2531@gmail.com
                                </p>
                                <p class="mb-2">
                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                        <i class="ri-phone-line align-middle fs-14"></i>
                                    </span>
                                    +(555) 555-1234
                                </p>
                                <p class="mb-0">
                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                        <i class="ri-map-pin-line align-middle fs-14"></i>
                                    </span>
                                    MIG-1-11, Monroe Street, Georgetown, Washington D.C, USA,20071
                                </p>
                            </div>
                        </div>
                        <div class="p-4 border-bottom border-block-end-dashed d-flex align-items-center">
                            <p class="fs-15 mb-2 me-4 fw-semibold">Social Networks :</p>
                            <div class="btn-list mb-0">
                                <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light">
                                    <i class="ri-facebook-line fw-semibold"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                    <i class="ri-twitter-line fw-semibold"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                    <i class="ri-instagram-line fw-semibold"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                    <i class="ri-github-line fw-semibold"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                    <i class="ri-youtube-line fw-semibold"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4 border-bottom border-block-end-dashed">
                            <p class="fs-15 mb-2 me-4 fw-semibold">Skills :</p>
                            <div>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">Cloud computing</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">Data analysis</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">DevOps</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">Machine learning</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">Programming</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">Security</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">Python</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">JavaScript</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">Ruby</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">PowerShell</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">Statistics</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-muted m-1">SQL</span>
                                </a>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="fs-15 mb-2 me-4 fw-semibold">Followers :</p>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="d-sm-flex align-items-top">
                                        <span class="avatar avatar-sm">
                                            <img alt="img" src="../assets/images/faces/1.jpg">
                                        </span>
                                        <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                            <p class="mb-0 lh-1">Alicia Sierra</p>
                                            <span class="fs-11 text-muted op-7">aliciasierra389@gmail.com</span>
                                        </div>
                                        <button class="btn btn-light btn-wave btn-sm">Follow</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-sm-flex align-items-top">
                                        <span class="avatar avatar-sm">
                                            <img alt="img" src="../assets/images/faces/3.jpg">
                                        </span>
                                        <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                            <p class="mb-0 lh-1">Samantha Mery</p>
                                            <span class="fs-11 text-muted op-7">samanthamery@gmail.com</span>
                                        </div>
                                        <button class="btn btn-light btn-wave btn-sm">Follow</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-sm-flex align-items-top">
                                        <span class="avatar avatar-sm">
                                            <img alt="img" src="../assets/images/faces/6.jpg">
                                        </span>
                                        <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                            <p class="mb-0 lh-1">Juliana Pena</p>
                                            <span class="fs-11 text-muted op-7">juliapena555@gmail.com</span>
                                        </div>
                                        <button class="btn btn-light btn-wave btn-sm">Follow</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-sm-flex align-items-top">
                                        <span class="avatar avatar-sm">
                                            <img alt="img" src="../assets/images/faces/15.jpg">
                                        </span>
                                        <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                            <p class="mb-0 lh-1">Adam Smith</p>
                                            <span class="fs-11 text-muted op-7">adamsmith99@gmail.com</span>
                                        </div>
                                        <button class="btn btn-light btn-wave btn-sm">Follow</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-sm-flex align-items-top">
                                        <span class="avatar avatar-sm">
                                            <img alt="img" src="../assets/images/faces/13.jpg">
                                        </span>
                                        <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                            <p class="mb-0 lh-1">Farhaan Amhed</p>
                                            <span class="fs-11 text-muted op-7">farhaanahmed989@gmail.com</span>
                                        </div>
                                        <button class="btn btn-light btn-wave btn-sm">Follow</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-8 col-xl-12 mt-xxl-0 mt-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body p-0">
                                <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center justify-content-between">
                                    <div>
                                        <ul class="nav nav-tabs mb-0 tab-style-6 justify-content-start" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button aria-controls="activity-tab-panel" aria-selected="true" class="nav-link active" data-bs-target="#activity-tab-panel" data-bs-toggle="tab" id="activity-tab" role="tab" type="button"><i class="hugeicons-activity-03 me-1 align-middle d-inline-block"></i>Aktivitas</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="tab-content" id="myTabContent">

                                        <div aria-labelledby="activity-tab" class="tab-panel show active fade p-0 border-0" id="activity-tab-pane" role="tabpanel" tabindex="0">
                                            <ul class="list-unstyled profile-timeline">
                                                <li>
                                                    <div>
                                                        <span class="avatar avatar-sm bg-primary-transparent avatar-rounded profile-timeline-avatar">
                                                            E
                                                        </span>
                                                        <p class="mb-2">
                                                            <b>You</b> Commented on <b>alexander taylor</b> post <a class="text-secondary" href="javascript:void(0);"><u>#beautiful day</u></a>.<span class="float-end fs-11 text-muted">24,Dec 2022 - 14:34</span>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                            <img alt="" src="../assets/images/faces/11.jpg">
                                                        </span>
                                                        <p class="text-muted mb-2">
                                                            <span class="text-default"><b>Json Smith</b> reacted to the post 👍</span>.<span class="float-end fs-11 text-muted">18,Dec 2022 - 12:16</span>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                            <img alt="" src="../assets/images/faces/4.jpg">
                                                        </span>
                                                        <p class="text-muted mb-2">
                                                            <span class="text-default"><b>Alicia Keys</b> shared a document with <b>you</b></span>.<span class="float-end fs-11 text-muted">21,Dec 2022 - 15:32</span>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="avatar avatar-sm bg-success-transparent avatar-rounded profile-timeline-avatar">
                                                            P
                                                        </span>
                                                        <p class="text-muted mb-2">
                                                            <span class="text-default"><b>You</b> shared a post with 4 people <b>Simon,Sasha,Anagha,Hishen</b></span>.<span class="float-end fs-11 text-muted">28,Dec 2022 - 18:46</span>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                            <img alt="" src="../assets/images/faces/5.jpg">
                                                        </span>
                                                        <p class="text-muted mb-1">
                                                            <span class="text-default"><b>Melissa Blue</b> liked your post <b>travel excites</b></span>.<span class="float-end fs-11 text-muted">11,Dec 2022 - 11:18</span>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                            <img alt="" src="../assets/images/media/media-39.jpg">
                                                        </span>
                                                        <p class="mb-1">
                                                            <b>You</b> Commented on <b>Peter Engola</b> post <a class="text-secondary" href="javascript:void(0);"><u>#Mother Nature</u></a>.<span class="float-end fs-11 text-muted">24,Dec 2022 - 14:34</span>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
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

    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
@endsection
