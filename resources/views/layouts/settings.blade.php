<!DOCTYPE html>
<html data-header-styles="light" data-menu-styles="dark" data-nav-layout="vertical" data-theme-mode="light" data-toggled="close" dir="ltr" lang="en">

<head>

    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>@yield("title")</title>

    @yield("styles")

</head>

<body @if (session("flash")) data-flash-type="{{ session("flash.type") }}"
        data-flash-message="{{ session("flash.message") }}"
    @elseif($errors->any())
        data-flash-type="error"
        data-flash-message="{{ $errors->first() }}" @endif>

    <div class="page">
        @include("components.header")
        @include("components.settings-sidebar")

        <div class="main-content app-content">
            @yield("content")
        </div>

        @include("components.footer")
    </div>

    @yield("scripts")
</body>
