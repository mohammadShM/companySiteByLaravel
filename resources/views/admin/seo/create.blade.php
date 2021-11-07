@extends('admin.layouts.master')
@section('title-for-admin','قسمت ساخت seo اطلاعات')
@section('content-for-admin')
    <section class="data">
        <setion class="row m-0">
            <section class="col-6 offset-3 mt-3 jumbotron">
                {!! Form::open(['route'=>'seo.store','method'=>'post']) !!}
                <section class="form-group">
                    {!! Form::label('title','title :',['class'=>'text-capitalize']) !!}
                    {!! Form::text('title',old('title'),['class'=>'form-control',
                        'placeholder'=>'please enter your title website','style'=>'border:2px inset lightgray']) !!}
                    @error("title")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::label('keywords','keywords :',['class'=>'text-capitalize']) !!}
                    {!! Form::textarea('keywords',old('keywords'),['class'=>'form-control',
                        'placeholder'=>'please enter your keywords website',
                        'style'=>'border:2px inset lightgray;resize:none;height:150px;']) !!}
                    @error("keywords")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::label('description','description :',['class'=>'text-capitalize']) !!}
                    {!! Form::textarea('description',old('description'),['class'=>'form-control',
                        'placeholder'=>'please enter your description website',
                         'style'=>'border:2px inset lightgray;resize:none;height:150px;']) !!}
                    @error("description")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::label('author','author :',['class'=>'text-capitalize']) !!}
                    {!! Form::text('author',old('author'),['class'=>'form-control',
                        'placeholder'=>'please enter your author website','style'=>'border:2px inset lightgray']) !!}
                    @error("author")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::submit('register',['class'=>'btn btn-dark btn-block mt-5',
                        'style'=>'width:70%;margin-left:15%;margin-right:15%;']) !!}
                </section>
                {!! Form::close() !!}
                <a href="{{route('seo.index')}}" class="btn btn-success mt-3">show details</a>
            </section>
        </setion>
    </section>
@endsection
