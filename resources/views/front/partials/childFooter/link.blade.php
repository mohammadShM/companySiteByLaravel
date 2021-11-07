<section class="link">
    @forelse ($link as $item)
        <a target="_blank" href="{{$item->url}}">{{$item->link}}</a>
    @empty
        <a href="#" target="_blank">لینک های مرتبط</a>
        <a href="#" target="_blank">لینک های مرتبط</a>
        <a href="#" target="_blank">لینک های مرتبط</a>
        <a href="#" target="_blank">لینک های مرتبط</a>
    @endforelse
</section>
