<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/LOGO-.ico">
    <title>مساعِد</title>
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
                    <p class="headingPage">تسجيل الدخول</p>
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

                <div class="formControl">
                  <input id="password" type="password" placeholder=" كلمةالمرور " class="input-name @error('password') is-invalid @enderror"
                     name="password" required autocomplete="current-password">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong> كلمة المرور خطا </strong>
                        </span>
                     @enderror
                </div>

                <div class="form-check checkSec">
                    <div class="checkBoxline">
                        <input class="form-check-input  remmberCheckBox" type="checkbox" value="تذكر كلمة المرور" id="defaultCheck1"
                          name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} required>

                           <label class="form-check-label remmberPassword" for="remember defaultCheck1">
                               {{ __('تذكر كلمة المرور ') }}
                            </label>
                </div>


                            <div class="loginBotton">
                                <button type="submit" class="loginBtn">
                                    {{ __('تسجيل الدخول') }}
                                </button>
                          </div>
                      </div>
                       <div class="goSignUp">
                                <a href="{{ URL('http://127.0.0.1:8000/password') }}"><h3>هل نسيت كلمة المرور؟</h3></a>

                                <br>
                                <span>ليس لديك حساب؟</span><a href="{{url('register')}}">التسجيل </a><span>
                        </div>


                          <!--div class="loginBotton">
                         <button class="loginBtn">تسجيل الدخول</button>
                        </div>
                         </div>
                          <div class="goSignUp">
                              <p class="passWordQuestion">هل نسيت كلمة السر؟</p>
                            <span>ليس لديك حساب؟</span><a href="signup.html">التسجيل </a>
                        </div-->
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Js Files -->
    <script src="js/jQuery.js"></script>
    <script src="js/banddle.js"></script>
</body>
</html>
