@extends('layouts.app')

@section('content')

    <!--begin:: Widgets/Blog-->
    <div class="kt-current_info__wrapper" style="padding-top: 50px;">
        <div class="kt-current_info__text1 kt-align-center">
            無料会員登録
                <img alt="Logo" style= "vertical-align: sub;" src="{{asset('media/img/arrow-man.png')}}" class="kt-header__brand-logo-sticky" />
            <p class="kt-font-xl kt-font-boldest"> 会員登録すると、明日以降の全ての情報が閲覧可能</p>
        </div>
    </div>
    <div class="kt-portlet" style="background-color: #efefef; color: #000;font-size: 15px;font-weight: bold;border-radius: 5px;">
        <div class="text-center mt-5" style="color: #000;">
            <h3><b>入力フォーム</b></h3>
        </div>
        <!--begin::Form-->
        <form class="kt-form" action="/register" method="post">
            {{ csrf_field() }}
            <div class="kt-portlet__body">
                @if($errors->any())
                    <h6 style="color:#e96565">入力した内容に不備がございます。</h6> 
                @endif
                <div class="form-group ">
                    <label class="font-weight-bolder">御社名</label>
                    <input type="text" class="form-control" id="corp_name" name="corp_name" value="{{old('corp_name')}}">
                    @if ($errors->has("corp_name"))
                        <h6 style="color:#e96565">
                        {{$errors->first("corp_name")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">フリガナ</label>
                    <input type="text" name="second_input" id="second_input" class="form-control" value="{{old('second_input')}}">
                    @if ($errors->has("second_input"))
                        <h6 style="color:#e96565">
                        {{$errors->first("second_input")}}
                        </h6>
                    @endif
                </div>

                <div class="form-group">
                    <label class="font-weight-bolder">ご住所郵便番号・プルダウン・住所</label>
                    <input type="text" id="post_address" name="post_address" class="form-control" value="{{old('post_address')}}">
                    @if ($errors->has("post_address"))
                    <h6 style="color:#e96565">
                        {{$errors->first("post_address")}}
                    </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">ご担当者様</label>
                    <input type="text" class="form-control" id="hello" name="hello" value="{{old('hello')}}">
                    @if ($errors->has("hello"))
                        <h6 style="color:#e96565">
                            {{$errors->first("hello")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">フリガナ</label>
                    <input type="text" id="third_input" name="third_input" class="form-control" value="{{old('third_input')}}">
                    @if ($errors->has("third_input"))
                        <h6 style="color: #e96565">
                        {{$errors->first("third_input")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">TEL</label>
                    <input type="text" class="form-control" id="tel" name="tel" value="{{old('tel')}}">
                    @if ($errors->has("tel"))
                        <h6 style="color: #e96565">
                        {{$errors->first("tel")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">FAX</label>
                    <input type="text" class="form-control" id="fax" name="fax" value="{{old('fax')}}">
                    @if ($errors->has("fax"))
                        <h6 style="color: #e96565">
                        {{$errors->first("fax")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">メールアドレス</label>
                    <input type="text" class="form-control" id="email_address" name="email_address" value="{{old('email_address')}}">
                    @if ($errors->has("email_address"))
                        <h6 style="color: #e96565">
                        {{$errors->first("email_address")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">パスワード</label>
                    <input type="password" class="form-control" id="register_pwd" name="register_pwd" value="{{old('register_pwd')}}">
                    @if ($errors->has("register_pwd"))
                        <h6 style="color: #e96565">
                        {{$errors->first("register_pwd")}}
                        </h6>
                    @endif
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">パスワード確認用</label>
                    <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd" value="{{old('confirm_pwd')}}">
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
                            <input type="text" class="form-control" id="contact_address" name="contact_address" value="{{old('contact_address')}}"  aria-describedby="postcode-error" aria-invalid="false">
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
                            <input type="text" class="form-control" name="meeting_part" id="meeting_part" value="{{old('meeting_part')}}">
                            @if ($errors->has("meeting_part"))
                                <h6 style="color: #e96565">
                                {{$errors->first("meeting_part")}}
                                </h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-2" style="color: #000;">
                <h5><b>プルダウン電話営業・FAX営業・メール広告・紹介・新聞広告・その他利用規約をご確認の<br>上、「登録内容確認」を教えてください。登録内容確認のボタン</b></h5>
            </div>
            <div class="text-center mt-5" style="color: #000;">
                <h5><b>操作不明点がございましたら、お気軽にお問い合わせください。<br> 受付時間8:00〜18:00<br>0120-050-570</b></h5>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions d-flex justify-content-center flex-wrap">
                    <button class="btn first_time_btn" type="submit">登録内容確認</button>
                </div>
            </div>
            <div class="kt-space-40"></div>
            <div class="kt-space-20"></div>
        </form>

        <!--end::Form-->
    </div>
    <!--end:: Widgets/Blog-->
@endsection

@section('sidebar')
  @include('includes.sidebar02')
@endsection