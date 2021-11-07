@extends('admin.layouts.master')
@section('title-for-admin','قسمت ساخت parallax اطلاعات')
@section('content-for-admin')
    <section class="data">
        <setion class="row m-0">
            <section class="col-6 offset-3 mt-3 jumbotron">
                {!! Form::open(['route'=>'parallax.store','method'=>'post','files'=>true]) !!}
                <section class="form-group">
                    {!! Form::label('title','title :',['class'=>'text-capitalize']) !!}
                    {!! Form::text('title',old('title'),['class'=>'form-control',
                        'placeholder'=>'please enter your title website','style'=>'border:2px inset lightgray']) !!}
                    @error("title")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::label('titleSize','titleSize :',['class'=>'text-capitalize']) !!}
                    {!! Form::select('titleSize',[12=>'12',13=>'13',14=>'14',15=>'15',16=>'16',
                                17=>'17',18=>'18',19=>'19',20=>'20'],12
                        ,['class'=>'form-control', 'placeholder'=>'please enter your titleSize website',
                        'style'=>'border:2px inset lightgray']) !!}
                    @error("titleSize")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::label('titleColor','titleColor :',['class'=>'text-capitalize']) !!}
                    {!! Form::color('titleColor',old('titleColor'),['class'=>'form-control',
                        'placeholder'=>'please enter your titleColor website','style'=>'border:2px inset lightgray']) !!}
                    @error("titleColor")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::label('body','body :',['class'=>'text-capitalize']) !!}
                    {!! Form::textarea('body',old('body'),['class'=>'form-control',
                        'placeholder'=>'please enter your body website',
                        'style'=>'border:2px inset lightgray;resize:none;height:150px;']) !!}
                    @error("body")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::label('bodySize','bodySize :',['class'=>'text-capitalize']) !!}
                    {!! Form::select('bodySize',[12=>'12',13=>'13',14=>'14',15=>'15',16=>'16',
                                17=>'17',18=>'18',19=>'19',20=>'20'],12
                        ,['class'=>'form-control', 'placeholder'=>'please enter your bodySize website',
                        'style'=>'border:2px inset lightgray']) !!}
                    @error("bodySize")
                    <p class="text-danger text-center mt-2" style="direction: rtl;">{{$message}}</p>
                    @enderror
                </section>
                <section class="form-group">
                    {!! Form::label('bodyColor','bodyColor :',['class'=>'text-capitalize']) !!}
                    {!! Form::color('bodyColor',old('bodyColor'),['class'=>'form-control',
                        'placeholder'=>'please enter your bodyColor website','style'=>'border:2px inset lightgray']) !!}
                    @error("bodyColor")
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
                <a href="{{route('parallax.index')}}" class="btn btn-success mt-3">show details</a>
            </section>
        </setion>
    </section>
@endsection
