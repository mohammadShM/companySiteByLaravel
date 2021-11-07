@extends('admin.layouts.master')
@section('title-for-admin','قسمت نمایش slider اطلاعات')
@section('content-for-admin')
    <section class="data">
        <section class="row m-0">
            <section class="col-8 offset-2 mt-5">
                @if (session('delete'))
                    <section class="alert bg-success">
                        <h4 class="text-white text-center" style="direction: rtl;">{{session('delete')}}</h4>
                    </section>
                @endif
                @if (session('update'))
                    @include("admin.session.sessionUpdate")
                @endif
                @if(session("create"))
                    <section class="alert bg-success">
                        <h4 class="text-white text-center" style="direction: rtl;">{{session('create')}}</h4>
                    </section>
                @endif
            </section>
            <section class="col-10 offset-1 mt-5 mb-5 jumbotron">
                <table class="table table-dark table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>link</th>
                        <th>caption</th>
                        <th>image</th>
                        <th>delete</th>
                        <th>update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($sliders as $item)
                        <tr>
                            <td class="text-justify">{{$item->id}}</td>
                            <td class="text-justify">{{$item->link}}</td>
                            <td class="text-justify">{{$item->caption}}</td>
                            @if (Str::startsWith($item->image,"SLIDER_"))
                                <td><img class="img-fluid" src="{{asset("./images/slider/".$item->image)}}"
                                         alt="{{$item->title}}" width="40" height="40"></td>
                            @else
                                <td><img class="img-fluid" src="{{$item->image}}" alt="{{$item->title}}"
                                         width="40" height="40"></td>
                            @endif
                            <td>
                                {!! Form::open(['route'=>['slider.destroy','id'=>$item->id],'method'=>'delete']) !!}
                                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                            <td><a href="{{route('slider.edit',$item->id)}}" class="btn btn-warning">update</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-danger" colspan="6">No Thing Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <a href="{{route('slider.create')}}" class="btn btn-info mt-2">create slider</a>
                <div class="d-flex justify-content-center mt-3 mb-5">
                    {{$sliders->links()}}
                </div>
            </section>
        </section>
    </section>
@endsection
