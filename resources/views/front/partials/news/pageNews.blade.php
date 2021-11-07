<section class="news">
    <section class="itemNews" style="width: 100%">
        <div class="divNews">
            <div class="divNewsOnePage">
                @if (Str::startsWith($news->image,"NEWS_"))
                    <img class="img-fluid" src="{{asset("./images/news/".$news->image)}}" alt="{{$news->title}}">
                @else
                    <img class="img-fluid" src="{{$news->image}}" alt="{{$news->title}}">
                @endif
            </div>
            <h1>{{$news->title}}</h1>
            <p>{{$news->summery}}</p>
            <p style="background: #1d643b;padding: 8px;box-sizing: border-box;border-radius: 5px;
                    margin-top: 20px;text-align: center;width: 30%;box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                <span style="color: #f7f7f7 ;font-weight: normal;font-size: 17px;">
                    {{Verta::instance($news->created_at)->format('تاریخ : Y/m/d || ساعت : H:i:s')}}
                </span>
            </p>
        </div>
    </section>
    <section class="itemNewsComment">
        <div class="divNewsComment">
            <div class="divNewsCommentShadow">
                @if (session('comment'))
                    <div class="session_for_comment">
                        <h2>success send comment.</h2>
                    </div>
                @endif
                {!! Form::open(['route'=>'comment','methoad'=>'post']) !!}
                <section class="section-comment-news">
                    {!! Form::label('fullName','fullName :',['class'=>'label-comment-news']) !!}
                    {!! Form::text('fullName',old('fullName'),['class'=>'input-comment-news',
                                'placeholder'=>'please inter fullName ...',]) !!}
                </section>
                <section class="section-comment-news">
                    {!! Form::label('email','email :',['class'=>'label-comment-news']) !!}
                    {!! Form::email('email',old('email'),['class'=>'input-comment-news',
                                'placeholder'=>'please inter email ...',]) !!}
                </section>
                <section class="section-comment-news">
                    {!! Form::label('comment','comment :',['class'=>'label-comment-news']) !!}
                    {!! Form::textarea('comment',old('comment'),['class'=>'textarea-comment-news',
                                'placeholder'=>'please inter comment ...',]) !!}
                </section>
                <section class="section-comment-news">
                    {!! Form::hidden('id',$news->id) !!}
                </section>
                <section class="section-comment-news">
                    {!! Form::submit('send',['class'=>'submit-comment-news']) !!}
                </section>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    <section class="itemNewsComment">
        <div class="divNewsComment">
            @forelse ($comments as $item)
                <div class="divNewsShowCommentShadow">
                    <h2>{{$item->fullName}}</h2>
                    <h3>{{$item->email}}</h3>
                    <p>{{$item->comment}}</p>
                </div>
            @empty
                <div class="divNewsShowCommentShadow">
                    <div class="session_for_comment">
                        <h2>nothing any comments</h2>
                    </div>
                </div>
            @endforelse
        </div>
    </section>
</section>
