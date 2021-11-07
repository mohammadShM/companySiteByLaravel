@extends('front.layouts.master')
@section('seo-for-me')
    <!-- ======================================== Start make seo and social ======================================== -->
    @include("front.partials.news.seo-news",['seo'=>$seo])
    <!-- ======================================== End make seo and social ======================================== -->
@endsection
@section('content-for-me')
    <main class="wrapper">
        <!-- ======================================== Start make menu ======================================== -->
    @include("front.partials.menu")
    <!-- ======================================== End make menu ======================================== -->
        <!-- ======================================== Start make parallax ======================================== -->
    @include("front.partials.parallax",['data'=>$parallax])
    <!-- ======================================== End make parallax ======================================== -->
        <!-- ======================================== Start make news ======================================== -->
    @include("front.partials.news.pageNews",['news'=>$news,"comments"=>$comments])
    <!-- ======================================== End make news ======================================== -->
        <!-- ======================================== Start make footer ======================================== -->
    @include("front.partials.footer",['link'=>$links])
    <!-- ======================================== End make footer ======================================== -->
    </main>
@endsection
