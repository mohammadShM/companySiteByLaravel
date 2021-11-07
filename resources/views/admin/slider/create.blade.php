@extends('admin.layouts.master')
@section('title-for-admin','قسمت ساخت News اطلاعات')
@section('content-for-admin')
    <section class="data">
        <setion class="row m-0">
            <section class="col-6 offset-3 mt-5 jumbotron">
                {!! Form::open(['route'=>'slider.store','method'=>'post','files'=>true]) !!}
                <section class="form-group">
                    {!! Form::label('link','link :',['class'=>'text-capitalize']) !!}
                    {!! Form::text('link',old('link'),['class'=>'form-control',
                        'placeholder'=>'please enter your link website','style'=>'border:2px inset lightgray']) !!}
                    @error("link")
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
                    {!! Form::label('caption','caption :',['class'=>'text-capitalize']) !!}
                    {!! Form::text('caption',old('caption'),['class'=>'form-control',
                        'placeholder'=>'please enter your caption website','style'=>'border:2px inset lightgray']) !!}
                    @error("caption")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::submit('register',['class'=>'btn btn-dark btn-block mt-5',
                        'style'=>'width:70%;margin-left:15%;margin-right:15%;']) !!}
                </section>
                {!! Form::close() !!}
                <a href="{{route('slider.index')}}" class="btn btn-success mt-3">show details</a>
            </section>
        </setion>
    </section>
@endsection
