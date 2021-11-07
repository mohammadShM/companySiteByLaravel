@extends('admin.layouts.master')
@section('title-for-admin','قسمت نمایش seo اطلاعات')
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
            <section class="col-8 offset-2 mt-4">
                <table class="table table-dark table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>title</th>
                        <th>keywords</th>
                        <th>description</th>
                        <th>author</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($seos as $item)
                        <tr>
                            <td>{{$item->title}}</td>
                            <td>{{$item->keywords}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->author}}</td>
                            <td>
                                {!! Form::open(['route'=>['seo.destroy','id'=>$item->id],'method'=>'delete']) !!}
                                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
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
                <a href="{{route('seo.create')}}" class="btn btn-info mt-2">create seo</a>
                <div class="d-flex justify-content-center mt-3 mb-5">
                    {{$seos->links()}}
                </div>
            </section>
        </section>
    </section>
@endsection
