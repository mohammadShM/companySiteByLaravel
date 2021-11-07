@extends('admin.layouts.master')
@section('title-for-admin','قسمت ساخت News اطلاعات')
@section('content-for-admin')
    <section class="data">
        <setion class="row m-0">
            <section class="col-6 offset-3 mt-3 jumbotron">
                {!! Form::open(['route'=>'news.store','method'=>'post','files'=>true]) !!}
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
                    @error("image")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::submit('register',['class'=>'btn btn-dark btn-block mt-5',
                        'style'=>'width:70%;margin-left:15%;margin-right:15%;']) !!}
                </section>
                {!! Form::close() !!}
                <a href="{{route('news.index')}}" class="btn btn-success mt-3">show details</a>
            </section>
        </setion>
    </section>
@endsection
