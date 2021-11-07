<!-- ======================================== Start for seo ======================================== -->
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
    <title>online-shopping-news</title>
    <!-- ======================================== End for title ======================================== -->
@endforelse
<!-- ======================================== End for seo ======================================== -->
