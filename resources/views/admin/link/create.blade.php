@extends('admin.layouts.master')
@section('title-for-admin','قسمت ساخت link اطلاعات')
@section('content-for-admin')
    <section class="data">
        <setion class="row m-0">
            <section class="col-6 offset-3 mt-3 jumbotron">
                {!! Form::open(['route'=>'link.store','method'=>'post']) !!}
                <section class="form-group">
                    {!! Form::label('link','link :',['class'=>'text-capitalize']) !!}
                    {!! Form::text('link',old('link'),['class'=>'form-control',
                        'placeholder'=>'please enter your link website','style'=>'border:2px inset lightgray']) !!}
                    @error("link")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::label('url','url :',['class'=>'text-capitalize']) !!}
                    {!! Form::text('url',old('url'),['class'=>'form-control',
                        'placeholder'=>'please enter your url website','style'=>'border:2px inset lightgray']) !!}
                    @error("url")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::submit('register',['class'=>'btn btn-dark btn-block mt-5',
                        'style'=>'width:70%;margin-left:15%;margin-right:15%;']) !!}
                </section>
                {!! Form::close() !!}
                <a href="{{route('link.index')}}" class="btn btn-success mt-3">show details</a>
            </section>
        </setion>
    </section>
@endsection
