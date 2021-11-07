<footer>
    @include('front.partials.childFooter.link',['link'=>$link])
    <section class="social">
        <a href="#"><i class="fab fa-telegram-plane"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </section>
    <section class="address">
        @csrf
        <form action="{{route('search')}}" method="get">
            <!--suppress HtmlFormInputWithoutLabel -->
            <input type="text" name="search" class="text" placeholder="جستجو ....">
            <button type="submit">جستجو</button>
        </form>
    </section>
</footer>
