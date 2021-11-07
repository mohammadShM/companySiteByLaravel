<section class="contact">
    @if(session("create"))
        <section style="text-align: center;background: #5cd08d;margin-bottom: 30px;">
            <h4  style="color: #f7f7f7;">{{session('create')}}</h4>
        </section>
    @endif
    <form action="{{route('contact.store')}}" method="post">
        @csrf
        <label for="fullName">نام و نام خانوادگی</label>
        <input type="text" name="fullName" id="fullName" placeholder="لطفا نام و نام خانوادگی را وارد نمایید">
        <label for="email">ایمیل</label>
        <input type="email" name="email" id="email" placeholder="لطفا ایمیل خود را وارد نمایید">
        <label for="comment">کامنت</label>
        <textarea name="comment" id="comment" placeholder="لطفا نظر خود را وارد نمایید"></textarea>
        <input type="submit" value="ثبت نظر">
    </form>
</section>
