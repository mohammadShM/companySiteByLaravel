@extends('admin.layouts.master')
@section('title-for-admin','قسمت نمایش comment اطلاعات')
@section('content-for-admin')
    <section class="data p-0 m-0">
        <section class="row m-0">
            <section class="col-8 offset-2 mt-3">
                @if (session('delete'))
                    <section class="alert bg-success">
                        <h4 class="text-white text-center" style="direction: rtl;">{{session('delete')}}</h4>
                    </section>
                @endif
                @if (session('update'))
                    <section class="alert bg-success">
                        <h4 class="text-white text-center" style="direction: rtl;">{{session('update')}}</h4>
                    </section>
                @endif
                @if (session('unUpdate'))
                    <section class="alert bg-danger">
                        <h4 class="text-white text-center" style="direction: rtl;">{{session('unUpdate')}}</h4>
                    </section>
                @endif
                @if (session('deleteAndUndelete'))
                    <section class="alert bg-success">
                        <h4 class="text-white text-center" style="direction: rtl;">{{session('deleteAndUndelete')}}</h4>
                    </section>
                @endif
            </section>
            <section class="col-12 mt-4 pl-5 pr-5" style="box-sizing: border-box;">
                <table class="table table-dark table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>fullName</th>
                        <th>email</th>
                        <th>comment</th>
                        <th>category news</th>
                        <th>status</th>
                        <th>delete</th>
                        <th>status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($comments as $item)
                        <tr>
                            <td class="text-justify">{{$item->fullName}}</td>
                            <td class="text-justify">{{$item->email}}</td>
                            <td class="text-justify">{{$item->comment}}</td>
                            <td class="text-justify" style="direction: rtl;">{{$item->news->title}}</td>
                            <td>
                                @if ($item->publish === 1)
                                    {!! Form::open(['route'=>['comment.update','id'=>$item->id],'method'=>'put']) !!}
                                    {!! Form::hidden('publish',0) !!}
                                    {{  Form::hidden('url',URL::previous())  }}
                                    {!! Form::submit('deActive',['class'=>'btn btn-success']) !!}
                                    {!! Form::close() !!}
                                @else
                                    {!! Form::open(['route'=>['comment.update','id'=>$item->id],'method'=>'put']) !!}
                                    {!! Form::hidden('publish',1) !!}
                                    {{  Form::hidden('url',URL::previous())  }}
                                    {!! Form::submit('Active',['class'=>'btn btn-warning']) !!}
                                    {!! Form::close() !!}
                                @endif
                            </td>
                            <td>
                                {!! Form::open(['route'=>['comment.delete','id'=>$item->id],'method'=>'delete']) !!}
                                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                            <td>
                                @if ($item->deleted_at === null)
                                    {!! Form::open(['route'=>['comment.undelete','id'=>$item->id],'method'=>'delete']) !!}
                                    {!! Form::submit('isSoftDelete',['class'=>'btn btn-success']) !!}
                                    {!! Form::close() !!}
                                @else
                                    {!! Form::open(['route'=>['comment.undelete','id'=>$item->id],'method'=>'delete']) !!}
                                    {!! Form::submit('isNotDelete',['class'=>'btn btn-warning']) !!}
                                    {!! Form::close() !!}
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-danger" colspan="6">No Thing Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-3 mb-5">
                    {{$comments->links()}}
                </div>
            </section>
        </section>
    </section>
@endsection
