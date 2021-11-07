@extends('admin.layouts.master')
@section('title-for-admin','قسمت نمایش news اطلاعات')
@section('content-for-admin')
    <section class="data">
        <section class="row m-0">
            <section class="col-8 offset-2 mt-3">
                @if (session('delete'))
                    <section class="alert bg-success">
                        <h4 class="text-white text-center" style="direction: rtl;">{{session('delete')}}</h4>
                    </section>
                @endif
                @if(session("create"))
                    <section class="alert bg-success">
                        <h4 class="text-white text-center" style="direction: rtl;">{{session('create')}}</h4>
                    </section>
                @endif
            </section>
            <section class="col-12 p-5">
                <table class="table table-dark table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>title</th>
                        <th>summery</th>
                        <th>keywords</th>
                        <th>description</th>
                        <th>author</th>
                        <th>image</th>
                        <th>delete</th>
                        <th>update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($news as $item)
                        <tr>
                            <td class="text-justify">{{$item->title}}</td>
                            <td class="text-justify">{{$item->summery}}</td>
                            <td class="text-justify">{{$item->keywords}}</td>
                            <td class="text-justify">{{$item->description}}</td>
                            <td class="text-justify">{{$item->author}}</td>
                            @if (Str::startsWith($item->image,"NEWS_"))
                                <td><img class="img-fluid" src="{{asset("./images/news/".$item->image)}}"
                                         alt="{{$item->title}}" width="40" height="40"></td>
                            @else
                                <td><img class="img-fluid" src="{{$item->image}}" alt="{{$item->title}}"
                                         width="40" height="40"></td>
                            @endif
                            <td>
                                {!! Form::open(['route'=>['news.destroy','id'=>$item->id],'method'=>'delete']) !!}
                                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                            <td><a href="{{route('news.edit',$item->id)}}" class="btn btn-warning">update</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-danger" colspan="5">No Thing Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <a href="{{route('news.create')}}" class="btn btn-info mt-2">create news</a>
                <div class="d-flex justify-content-center mt-3 mb-5">
                    {{$news->links()}}
                </div>
            </section>
        </section>
    </section>
@endsection
