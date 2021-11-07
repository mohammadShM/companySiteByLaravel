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
                        <th>fullName</th>
                        <th>email</th>
                        <th>comment</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($contact as $item)
                        <tr>
                            <td>{{$item->fullName}}</td>
                            <td>{{$item->email}}</td>
                            <td class="text-justify">{{$item->comment}}</td>
                            <td>
                                {!! Form::open(['route'=>['contact.delete','id'=>$item->id],'method'=>'delete']) !!}
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
                <div class="d-flex justify-content-center mt-3 mb-5">
                    {{$contact->links()}}
                </div>
            </section>
        </section>
    </section>
@endsection
