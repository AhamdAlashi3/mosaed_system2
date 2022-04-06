
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/LOGO-.ico">
    <title>الصفحة الرئيسة</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
  </head>
  <body dir="rtl">


  <div class="homeContent">
    <div class="home">
      <!-- ==============SideBar============= -->
      <side class="sideBar">
        <div class="userImg"><img src="img/LOGO .svg"></div>
      <!--span style="color:#FFF;font-size:20px;font-family:serf">{{Auth::user()->email}}</span-->

        <a href="{{route('home')}}"><p class="sideBarItem">الصفحة الرئيسية</p></a>
        <a href="masaqats"><p class="sideBarItem">المساقات </p></a>
        <a href="halaqts"><p class="sideBarItem">الحلقات </p></a>
        <a href="teacherDatas"><p class="sideBarItem">المعلمين </p></a>
        <a href="studentDatas"><p class="sideBarItem">الطلاب </p></a>
        <a href="{{route('taqarer.index')}}"><p class="sideBarItem">التقارير </p></a>




        <div class="person">
          <div class="row ">
            {{-- <div class="col-4 mohamedImg">
            </div> --}}
            <div class="col-8">
              <p sideBarItem> الإداري :  {{ Auth::user()->name }} </p>

            </div>
            <a  href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <p class="sideBarItem">{{ __('تسجيل الخروج') }}</p>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
          </div>

        </div>

      </side>

      <!-- ==============Home Content============= -->
      <div class="home-content">
        <section class="navHome">
        <h1 class="upHeading">الصفحةالرئيسية</h1>
        <div class="barIcon">
          <button class="navbar-toggler iconColor" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-card-text iconNav" viewBox="0 0 16 16">
            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
            <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="sideBarSmall">
            <div class="userImg"><img src="img/LOGO .svg"></div>
            <a href="index.html"><p class="sideBarItem">الصفحة الرئيسية</p></a>
            <a href="masaqat.html"><p class="sideBarItem">المساقات </p></a>
            <a href="halaqt.html"><p class="sideBarItem">الحلقات </p></a>
            <a href="teacherData.html"><p class="sideBarItem">المعلمين </p></a>
            <a href="studentData.html"><p class="sideBarItem">الطلاب </p></a>
            <a href="{{ route('taqarer.index') }}"><p class="sideBarItem">التقارير </p></a>
            <div class="person">
              <div class="row ">
                {{-- <div class="col-4 mohamedImg">
                </div> --}}
                <div class="col-8">
                  <p sideBarItem> الإداري : محمد خليل </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
         <section class="row boxes" dir="rtl" style="margin: auto;">
         <!--Start -->
          <div class="box" title="إجمالي الحلقات">
            <button class="number" style="font-family:ciro">
              {{$masaqats}}
            </button>
            <h3>إجمالي المساقات</h3>
          </div>
         <!--End-->
            <style>
            .number{
              font-family:ciro
            }
         </style>
         <!--Start -->
          <div class="box" title="إجمالي الحلقات">
            <button class="number">
            {{$halaqts}}
            </button>
            <h3>إجمالي الحلقات</h3>
          </div>
         <!--End-->
         <!--Start -->
          <div class="box" title="إجمالي المعلمين">
            <button class="number">
              {{$teacherDatas}}
            </button>
            <h3>إجمالي المعلمين</h3>
          </div>
         <!--End-->
         <!--Start -->
             <div class="box" title="إجمالي الطلاب">
             <button class="number">
              {{$studentDatas}}
              </button>
              <h3>إجمالي الطلاب</h3>
             </div>
         <!--End-->
          {{-- <div class="box box5">
            <button class="number">0</button>
            <h3>إجمالي حضور الطلاب</h3>
          </div> --}}

          <section class="tableSec">
            <table id="example" class="table table-borderd">
              <thead>
              <tr>
                <th>رقم المساق</th>
                <th>تاريخ بدء المساق</th>
                <th>تاريخ إنتهاء المساق</th>
                <th>عدد الطلاب المشاركين</th>
              </tr>
             </thead>
             <tbody>

                    @foreach($masaqat as $row)
                    <tr>
                      <td title="رقم المساق">{{$row->masaq_name}}</td>
                      <td title="تاريخ بدء المساق">{{$row->Date_start}}</td>
                      <td title="تاريخ انتهاء المساق">{{$row->Date_end}}</td>
                      <td title="عدد الطلاب المشاركين">{{$studentDatas}}</td>
                    </tr>

                  @endforeach
              </tbody>
             </table>
           </section>



        </section>
      </div>
    </div>

  </div>



    <!-- Js Files -->
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="{{ asset('js/banddle.js') }}"></script>
    <script src="{{ asset('js/icon.js') }}"></script>
  </body>
</html>
