@extends('layouts.app')

@section('content')
<div class="kt-portlet kt-portlet--height-fluid kt-current_info mr-4">
    @include('includes.info')
    <div class="kt-portlet__body ask_sign">
    <div  class = "ask-sign-title kt-align-center">
        会員情報修正登録
        <img class="kt-widget7__img member-icon" src="{{asset('media/img/member_icon.png')}}" alt="">
    </div>
    <div  class = "required-sign kt-align-right">
        <i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>必須
    </div>
    <!--begin::Portlet-->
    <div class="ask-sign-body">

        <!--begin::Form-->
        <form class="kt-form" action="{{route('memberedit')}}" method="post">
          {{ csrf_field() }}
            <div class="kt-portlet__body form-check">
              @if($errors->any())
                  <h6 style="color:#e96565">入力した内容に不備がございます。</h6>
              @endif
                <div class="form-group">
                    <label>問合番号</label>
                    <div class="input-group row">
                        <div class="col-lg-3">
                            <input type="text" name="number" id="inquiry_number" class="form-control" aria-describedby="basic-addon1" value="{{$user->member_id}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="font-weight-bolder">御社名</label>
                    <input type="text" class="form-control" id="corp_name" name="corp_name" value="{{old('corp_name')?old('corp_name'):$user->corp_name}}">
                    @if ($errors->has("corp_name"))
                        <h6 style="color:#e96565">
                        {{$errors->first("corp_name")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">フリガナ</label>
                    <input type="text" name="second_input" id="second_input" class="form-control" value="{{old('second_input')?old('second_input'):$user->second_input}}">
                    @if ($errors->has("second_input"))
                        <h6 style="color:#e96565">
                        {{$errors->first("second_input")}}
                        </h6>
                    @endif
                </div>

                <div class="form-group">
                    <label class="font-weight-bolder">ご住所郵便番号</label>
                    <input type="text" id="post_address" name="post_address" class="form-control" value="{{old('post_address')?old('post_address'):$user->post_address}}">
                    @if ($errors->has("post_address"))
                    <h6 style="color:#e96565">
                        {{$errors->first("post_address")}}
                    </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">ご担当者様</label>
                    <input type="text" class="form-control" id="hello" name="hello" value="{{old('hello')?old('hello'):$user->hello}}">
                    @if ($errors->has("hello"))
                        <h6 style="color:#e96565">
                            {{$errors->first("hello")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">フリガナ</label>
                    <input type="text" id="third_input" name="third_input" class="form-control" value="{{old('third_input')?old('third_input'):$user->third_input}}">
                    @if ($errors->has("third_input"))
                        <h6 style="color: #e96565">
                        {{$errors->first("third_input")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">TEL</label>
                    <input type="text" class="form-control" id="tel" name="tel" value="{{old('tel')?old('tel'):$user->tel}}">
                    @if ($errors->has("tel"))
                        <h6 style="color: #e96565">
                        {{$errors->first("tel")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">FAX</label>
                    <input type="text" class="form-control" id="fax" name="fax" value="{{old('fax')?old('fax'):$user->fax}}">
                    @if ($errors->has("fax"))
                        <h6 style="color: #e96565">
                        {{$errors->first("fax")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">メールアドレス</label>
                    <input type="text" class="form-control" id="email_address" name="email_address" value="{{old('email_address')?old('email_address'):$user->email_address}}">
                    @if ($errors->has("email_address"))
                        <h6 style="color: #e96565">
                        {{$errors->first("email_address")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">パスワード</label>
                    <input type="password" class="form-control" id="register_pwd" name="register_pwd">
                    @if ($errors->has("register_pwd"))
                        <h6 style="color: #e96565">
                        {{$errors->first("register_pwd")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">パスワード確認用</label>
                    <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd">
                    @if ($errors->has("confirm_pwd"))
                        <h6 style="color: #e96565">
                            {{$errors->first("confirm_pwd")}}
                        </h6>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label class="font-weight-bolder">紹介先</label>
                            <input type="text" class="form-control" id="contact_address" name="contact_address" value="{{old('contact_address')?old('contact_address'):$user->contact_address}}"  aria-describedby="postcode-error" aria-invalid="false">
                            @if ($errors->has("contact_address"))
                                <h6 style="color: #e96565">
                                {{$errors->first("contact_address")}}
                               </h6>
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label class="font-weight-bolder">「ロジとら」をどこで知りましたか？</label>
                            <input type="text" class="form-control" name="meeting_part" id="meeting_part" value="{{old('meeting_part')?old('meeting_part'):$user->meeting_part}}">
                            @if ($errors->has("meeting_part"))
                                <h6 style="color: #e96565">
                                {{$errors->first("meeting_part")}}
                                </h6>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="kt-form__actions kt-align-center">
                    <div><button type="submit" class="reset btn">登錄內容確認</button></div>

                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
    <!--end::Portlet-->
<!--end::Portlet-->
</div>

</div>
@endsection

@section('sidebar')
  @auth
    @include('includes.sidebar02')
  @else
    @include('includes.sidebar01')
  @endauth
@endsection
