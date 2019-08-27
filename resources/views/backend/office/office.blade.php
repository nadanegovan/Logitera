@extends('backend.master')
@section('site-title')
    ロジとら
@endsection
@section('main-content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            @if(Session::has('msg'))
                <script>
                    $(document).ready(function(){
                        swal("{{Session::get('msg')}}","", "success");
                    });
                </script>
            @endif
            <h3 class="page-title bold">貨物管理
                    <hr>
            </h3>
            <div class="col-md-8">
                <form method="post" class="form-inline" action="{{route('luggage.search')}}">
                    {{csrf_field()}}
                    <input style="color: blue" class="input-small form-control" value="{{$search}}" type="text" name="search" placeholder="検索語を入力">
                    <button class="btn purple-medium" name="filter">検索</button>
                </form>
            </div>
            <br>
            <hr>
            <br>
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box purple-medium">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-briefcase"></i>貨物リスト
                            </div>
                            <div class="tools">
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        荷物ID
                                    </th>
                                    <th>
                                        積日時
                                    </th>
                                    <th>
                                        積地
                                    </th>
                                    <th>
                                        市区町村
                                    </th>
                                    <th>
                                        降日時
                                    </th>
                                    <th>
                                        降地
                                    </th>
                                    <th>
                                        市区町村
                                    </th>
                                    <th>
                                        荷物
                                    </th>
                                    <th>
                                        荷物重量
                                    </th>
                                    <th>
                                        車輌
                                    </th>
                                    <th>
                                        運賃(税抜)
                                    </th>
                                    <th>
                                        電話番号
                                    </th>
                                    <th>
                                        動作
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($luggage as $data)
                                <tr id="row1">
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->loading_date}}</td>
                                    <td>{{$data->loading_space}}</td>
                                    <td>{{$data->loading_city}}</td>
                                    <td>{{$data->drop_date}}</td>
                                    <td>{{$data->drop_space}}</td>
                                    <td>{{$data->drop_city}}</td>
                                    <td>{{$data->baggage_name}}</td>
                                    <td>{{$data->baggage_weight}}</td>
                                    <td>{{$data->vehicle_inf}}</td>
                                    <td>{{$data->fares_money}}</td>
                                    <td>{{$data->phone_number}}</td>
                                    <td>
                                        <a class="btn red" data-toggle="modal" href="#deleteModal{{$data->id}}"><i class="fa fa-trash"></i> 削除</a>
                                    </td>
                                </tr>

                                <div id="deleteModal{{$data->id}}" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                    {{csrf_field()}}
                                    <input type="hidden" value="" id="delete_id">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h2 class="modal-title" style="color: red;">本当に削除しますか？</h2>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn default">閉める</button>
                                                <a type="submit" href="{{route('luggage.delete', $data->id)}}" class="btn red" id="delete"><i class="fa fa-trash"></i> 削除</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
         
        </div>
    </div>
@endsection