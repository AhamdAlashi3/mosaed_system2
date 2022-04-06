<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/LOGO-.ico">
    <title>نسيت كلمة المرور</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>

<body dir="rtl">
    <div class="wrapper LoginPage">
        <div class="contentLogin">
            <div class="row ">
                <div class="col-md-5 logoImg">
                    <img src="img/LOGO .svg">
                </div>
                <div class="col-md-7 loginInfo">
                    <p class="headingPage">نسيت كلمة المرور</p>
                    <!--form class="formLogin"-->
                    <form class="formLogin" method="POST" action="{{ route('login') }}">
                        @csrf
                        <!--div class="formControl">
                            <input type="text" class="input-name" id="input-name" placeholder="اسم المستخدم">
                        </div-->
                 <div class="formControl">
                   <input id="email" type="email" placeholder="اسم المستخدم او البريد" class="input-name @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                      @enderror
                 </div>

                 <div class="loginBotton">
                    <button type="submit" class="loginBtn">
                        {{ __('إرسال') }}
                    </button>
              </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Js Files -->
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="{{ asset('js/banddle.js') }}"></script>
</body>
</html>
