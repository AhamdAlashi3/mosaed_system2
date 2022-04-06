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
    <div class="wrapper signUpPage">
        <div class="content">
          <div class="head">
            <div class="logo">
                <img src="img/LOGO .svg">
            </div>
            <p class="heading">التسجيل </p>
          </div>
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="SingUpInfo">
              <div class="AllInput">

                <div class=" formControl">
                  <!--nput type="text" class="inputName" id="inputName" placeholder="اسم الحلقات" required-->
                  <input id="inputName" type="text"class="inputName @error('name') is-invalid @enderror"
                  name="name" placeholder="اسم الحلقات" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

                <div class="formControl">
                <input id="honor" type="text" class="inputName @error('honor') is-invalid @enderror"
                 name="honor"  required  placeholder="إسم مشرف الحلقات">

                </div>
                <div class="formControl">
                <input id="phone" type="text" class="inputName @error('phone') is-invalid @enderror"
                 name="phone" required  placeholder="رقم الهاتف">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="formControl">
                <input id="email" type="email" class="inputName @error('email') is-invalid @enderror"
                 name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="البريد الالكتروني ">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="formControl">
                    <input id="password "  type="password" class="inputName @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="كلمة مرور المشرف">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="formControl">
                  <!--input type="text" class="inputName" id="inputName" placeholder=" رقم هوية مشرف الحلقات"required-->
                  <input id="password-confirm" type="password" class="inputName" name="password_confirmation"
                  required autocomplete="new-password" placeholder="تاكيد كلمة المرور">
                </div>

                <!--div class="formControl">
                  <input type="tel" class=" inputName" id="inputName" placeholder=" البحرين 973+"required>
                </div>
                <div class="formControl">
                  <input type="email" class=" inputName" id="inputName" placeholder="البريد الإلكتروني" required>
                </div-->
                <!--div class="formControl">
                    <button class="SignUpBtn">التسجيل</button>
                </div-->

              <!----->

                  <div class="formControl">
                     <button type="submit" class="SignUpBtn">
                       {{ __('التسجيل') }}
                      </button>
                 </div>

              <!----->
              <!---->
              <div class="goAccount">
                  <span>هل لديك حساب؟</span><a href="login">تسجيل دخول</a>
              </div>
              <!----->
              </div>
            </div>
        </div>
    </div>
</form>
    <!-- Js Files -->
    <script src="js/jQuery.js"></script>
    <script src="js/banddle.js"></script>
</body>
</html>
