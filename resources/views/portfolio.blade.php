<!DOCTYPE html>
<html lang="en">
    <head>
        @include('base.includeCeo')
        @include('base.includeCss')
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('main.nav')
        <!-- Masthead-->
        @include('main.header')
        <!-- Portfolio Section-->
        @include('main.portfolioSection')
        <!-- About Section-->
        @include('main.aboutSection')
        <!-- Contact Section-->
        @include('main.contactSection')
        <!-- Footer-->
        @include('main.footerSection')
        <!-- Copyright Section-->
        @include('main.copyrightSection')
        <!-- Portfolio Modals-->
        @include('main.modals')
        @include('base.script')
    </body>
</html>
