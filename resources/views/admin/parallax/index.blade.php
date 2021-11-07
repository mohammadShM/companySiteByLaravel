@extends('admin.layouts.master')
@section('title-for-admin','قسمت نمایش parallax اطلاعات')
@section('content-for-admin')
    <section class="data">
        <section class="row m-0">
            <section class="col-10 offset-1 mt-3">
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
            <section class="col-10 offset-1 mt-4 jumbotron">
                <table class="table table-dark table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>title</th>
                        <th>titleSize</th>
                        <th>titleColor</th>
                        <th>body</th>
                        <th>bodySize</th>
                        <th>bodyColor</th>
                        <th>image</th>
                        <th>delete</th>
                        <th>update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($parallaxes as $item)
                        <tr>
                            <td>{{$item->title}}</td>
                            <td>{{$item->titleSize}}</td>
                            <td>{{$item->titleColor}}</td>
                            <td>{{Str::limit($item->body,30)}}</td>
                            <td>{{$item->bodySize}}</td>
                            <td>{{$item->bodyColor}}</td>
                            @if (Str::startsWith($item->image,"PARALLAX_"))
                                <td><img class="img-fluid" src="{{asset("./images/parallax/".$item->image)}}"
                                         alt="{{$item->title}}" width="40" height="40"></td>
                            @else
                                <td><img class="img-fluid" src="{{$item->image}}" alt="{{$item->title}}"
                                         width="40" height="40"></td>
                            @endif
                            <td>
                                {!! Form::open(['route'=>['parallax.destroy','id'=>$item->id],'method'=>'delete']) !!}
                                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                            {{-- <td><a href="{{route('parallax.edit',$item->id)}}" class="btn btn-primary">update</a></td> --}}
                            <td>
                                {!! Form::open(['route'=>['parallax.edit','id'=>$item->id],'method'=>'get']) !!}
                                {!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-danger" colspan="5">No Thing Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <a href="{{route('parallax.create')}}" class="btn btn-info mt-2">create parallax</a>
                <div class="d-flex justify-content-center mt-3 mb-5">
                    {{$parallaxes->links()}}
                </div>
            </section>
        </section>
    </section>
@endsection
