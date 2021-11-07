<section class="parallax"
         style="background: url('{{asset('./images/parallax/'.$data->image)}}') no-repeat fixed center center cover;">
    <section class="slogan">
        <h1 style="font-size: {{$data->titleSize."px"}};color: {{$data->titleColor}}">{{$data->title}}</h1>
        <p style="font-size: {{$data->bodySize."px"}};color: {{$data->bodyColor}}">
            {{$data->body}}
        </p>
    </section>
</section>
