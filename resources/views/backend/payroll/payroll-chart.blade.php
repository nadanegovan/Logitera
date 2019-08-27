@extends('backend.master')
@section('site-title')
    ロジとら
@endsection
@section('main-content')
    <div class="page-content-wrapper">

        <div class="page-content">
            @if(Session::has('msg'))
            <script>
                $(document).ready(function(){
                    swal("{{Session::get('msg')}}","", "success");
                });
            </script>
            @endif
            <h3 class="page-title bold">空車管理
            </h3>
            <div class="col-md-8">
                <form method="post" class="form-inline" action="{{route('emptycar.search')}}">
                    {{csrf_field()}}
                    <input style="color: blue" class="input-small form-control" value="{{$search}}" type="text" name="search" placeholder="検索語を入力">
                    <button class="btn purple" name="filter">検索</button>
                </form>
            </div>
            <br>
            <hr>
            <br>
            <div class="portlet box purple">
                <div class="portlet-title col-md-12">
                    <div class="caption col-md-4">
                        <i class="fa fa-th"></i>空車リスト</div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered table-hover" id="order_table">
                            <thead>
                                <tr>
                                    <th scope="col"> 空車ID </th>
                                    <th scope="col"> 空車日時 </th>
                                    <th scope="col"> 空車地</th>
                                    <th scope="col"> 市区町村 </th>
                                    <th scope="col"> 積可能地 </th>
                                    <th scope="col"> 降日時 </th>
                                    <th scope="col"> 降可能地 </th>
                                    <th scope="col"> 車輌 </th>
                                    <th scope="col"> 電話番号 </th>
                                    <th scope="col"> 動作 </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($emptycar as $data)

                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->emptycar_date}}</td>
                                    <td>{{$data->emptycar_space}}</td>
                                    <td>{{$data->emptycar_city}}</td>
                                    <td>{{$data->emptycar_land_pos_loading}}</td>
                                    <td>{{$data->drop_date}}</td>
                                    <td>{{$data->land_pos_drop}}</td>
                                    <td>{{$data->vehicle_inf}}</td>
                                    <td>{{$data->phone_number}}</td>
                                    <td>
                                        <a href="{{route('emptycar.delete', $data->id)}}" class="btn btn-danger">削除</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{$emptycar->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
