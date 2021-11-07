<!-- ======================================== Start for seo ======================================== -->
@if (is_array($seo))
    @forelse ($seo as $item)
        <meta name="keywords" content="{{$item->keywords}}"/>
        <meta name="description" content="{{$item->description}}"/>
        <meta name="author" content="{{$item->author}}"/>
        <meta name="robots" content="index,follow"/>
        <!-- ======================================== Start for social ======================================== -->
        <meta property="og:title" content="{{$item->title}}">
        <meta property="og:description" content="{{$item->description}}">
        <meta property="og:keywords" content="{{$item->keywords}}">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <!-- ======================================== End for social ======================================== -->
        <!-- ======================================== Start for title ======================================== -->
        <title>{{$item->title}}</title>
        <!-- ======================================== End for title ======================================== -->
    @empty
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <meta name="robots" content="index,follow"/>
        <!-- ======================================== Start for social ======================================== -->
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:keywords" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <!-- ======================================== End for social ======================================== -->
        <!-- ======================================== Start for title ======================================== -->
        <title>online shopping</title>
        <!-- ======================================== End for title ======================================== -->
    @endforelse
@else
    @if (!empty($seo))
        <meta name="keywords" content="{{$seo->keywords}}"/>
        <meta name="description" content="{{$seo->description}}"/>
        <meta name="author" content="{{$seo->author}}"/>
        <meta name="robots" content="index,follow"/>
        <!-- ======================================== Start for social ======================================== -->
        <meta property="og:title" content="{{$seo->title}}">
        <meta property="og:description" content="{{$seo->description}}">
        <meta property="og:keywords" content="{{$seo->keywords}}">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <!-- ======================================== End for social ======================================== -->
        <!-- ======================================== Start for title ======================================== -->
        <title>{{$seo->title}}</title>
        <!-- ======================================== End for title ======================================== -->
    @else
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <meta name="robots" content="index,follow"/>
        <!-- ======================================== Start for social ======================================== -->
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:keywords" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <!-- ======================================== End for social ======================================== -->
        <!-- ======================================== Start for title ======================================== -->
        <title>online shopping</title>
        <!-- ======================================== End for title ======================================== -->
    @endif
@endif
<!-- ======================================== End for seo ======================================== -->
