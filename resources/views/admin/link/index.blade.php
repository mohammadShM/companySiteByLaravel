@extends('admin.layouts.master')
@section('title-for-admin','قسمت نمایش link اطلاعات')
@section('content-for-admin')
    <section class="data">
        <section class="row m-0">
            <section class="col-10 offset-1 mt-3">
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
            <section class="col-10 offset-1 mt-4 jumbotron">
                <table class="table table-dark table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>link</th>
                        <th>url</th>
                        <th>update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($links as $item)
                        <tr>
                            <td>{{$item->link}}</td>
                            <td>{{$item->url}}</td>
                            <td>
                                {!! Form::open(['route'=>['link.destroy','id'=>$item->id],'method'=>'delete']) !!}
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
                <a href="{{route('link.create')}}" class="btn btn-info mt-2">create link</a>
                <div class="d-flex justify-content-center mt-3 mb-5">
                    {{$links->links()}}
                </div>
            </section>
        </section>
    </section>
@endsection
