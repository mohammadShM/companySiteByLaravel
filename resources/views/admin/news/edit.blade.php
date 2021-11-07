@extends('admin.layouts.master')
@section('title-for-admin','قسمت ساخت News اطلاعات')
@section('content-for-admin')
    <section class="data">
        <setion class="row m-0">
            <section class="col-6 offset-3 mt-3 jumbotron">
                {!! Form::model($news,['route'=>['news.update',$news->id],'method'=>'put','files'=>true]) !!}
                <section class="form-group">
                    {!! Form::label('title','title :',['class'=>'text-capitalize']) !!}
                    {!! Form::text('title',old('title'),['class'=>'form-control',
                        'placeholder'=>'please enter your title website','style'=>'border:2px inset lightgray']) !!}
                    @error("title")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::label('summery','summery :',['class'=>'text-capitalize']) !!}
                    {!! Form::textarea('summery',old('summery'),['class'=>'form-control',
                        'placeholder'=>'please enter your summery website',
                         'style'=>'border:2px inset lightgray;resize:none;height:150px;']) !!}
                    @error("summery")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::label('image','image :',['class'=>'text-capitalize']) !!}
                    {!! Form::file('image',['class'=>'form-control',
                        'placeholder'=>'please enter your image website','style'=>'border:2px inset lightgray']) !!}
                    <div class="mt-3 mb-3">
                        @if (Str::startsWith($news->image,"NEWS_"))
                            <img class="img-fluid" src="{{asset("./images/news/".$news->image)}}"
                                 alt="{{$news->title}}" width="100" height="100">
                        @else
                            <img class="img-fluid" src="{{$news->image}}" alt="{{$news->title}}"
                                 width="100" height="100">
                        @endif
                    </div>
                    @error("image")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::submit('update',['class'=>'btn btn-dark btn-block mt-5',
                        'style'=>'width:70%;margin-left:15%;margin-right:15%;']) !!}
                </section>
                {!! Form::close() !!}
                <a href="{{route('news.index')}}" class="btn btn-success mt-3">show details</a>
            </section>
        </setion>
    </section>
@endsection
