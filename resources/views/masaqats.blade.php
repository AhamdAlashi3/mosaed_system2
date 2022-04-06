<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/LOGO-.ico">
    <title>المساقات</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>
<body dir="rtl">
  <div class="homeContent">
    <div class="home">
      <side class="sideBar">
        <div class="userImg"><img src="img/LOGO .svg"></div>
        <a href="home"><p class="sideBarItem">الصفحة الرئيسية</p></a>
        <a href="masaqats"><p class="sideBarItem">المساقات </p></a>
        <a href="halaqts"><p class="sideBarItem">الحلقات </p></a>
        <a href="teacherDatas"><p class="sideBarItem">المعلمين </p></a>
        <a href="studentDatas"><p class="sideBarItem">الطلاب </p></a>
        <a href="{{ route('taqarer.index') }}"><p class="sideBarItem">التقارير </p></a>

        <div class="person">
          <div class="row ">
            {{-- <div class="col-4 mohamedImg">
            </div> --}}
            <div class="col-8">
            <p sideBarItem> الإداري : {{ Auth::user()->name }}</p>
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
      <div class="home-content">
        <section class="navHome">
        <h1 class="upHeading">المساقات</h1>
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
            <a href="home"><p class="sideBarItem">الصفحة الرئيسية</p></a>
            <a href="masaqats"><p class="sideBarItem">المساقات </p></a>
            <a href="halaqts"><p class="sideBarItem">الحلقات </p></a>
            <a href="teacherDatas"><p class="sideBarItem">المعلمين </p></a>
            <a href="studentDatas"><p class="sideBarItem">الطلاب </p></a>
            <a href="{{ route('taqarer.index') }}"><p class="sideBarItem">التقارير </p></a>
            <div class="person">
              <div class="row ">
                {{-- <div class="col-4 mohamedImg">
                </div> --}}
                <div class="col-8">
                <p sideBarItem> الإداري : {{ Auth::user()->name }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
      @if(session()->has('Add'))
				   <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                      <strong>{{session()->get('Add')}}</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
					  </button>
				   </div>
        @endif
        @if(session()->has('Error'))
				   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                      <strong>{{session()->get('Error')}}</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
					  </button>
				   </div>
        @endif
        @if(session()->has('import'))
				   <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                      <strong>{{session()->get('import')}}</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
					  </button>
				   </div>
        @endif
      <section class="AllDataContent">
       <div class="addHalaqtSec InfoSec">
         <form  action="{{ route('masaqats.store')}}" method="post">
						  {{csrf_field()}}
              <div class="addHalaqt firstData">

                <input type="number" class="input-name halaqaInput " id="input-name"
                placeholder="الرقم المساق" name="id" required>

                <input type="text" class="input-name halaqaInput " id="masaq_name"
                placeholder="إسم المساق" name="masaq_name" required>

              </div>


              <div class="addHalaqt">
                {{-- <label>تاريح بدء المساق</label> --}}
                <input type="date" class="input-name halaqaInput " id="Date_start"
                placeholder="تاريح بدء المساق" name="Date_start" title="تاريح بدء المساق" required>

                <input type="date" class="input-name halaqaInput " id="Date_end"
                placeholder="تاريح انتهاء المساق" name="Date_end" title="تاريح انتهاء المساق" required>

                {{-- <select name="Day" id="Day">
                    <option value="zOption" selected style="display: none;">أيام التدريس   </option>
                    <option style="background-color: red;" value="الأحد"> الأحد </option>
                    <option style="background-color: green;" value="الإثنين">  الإثنين</option>
                    <option style="background-color: red;" value="الثلاثاء">الثلاثاء</option>
                    <option style="background-color: green;" value="الأربعاء">الأربعاء</option>
                    <option style="background-color: red;" value="الخميس">الخميس</option>
                    <option style="background-color: red;" value="الجمعة">الجمعة</option>
                    <option style="background-color: green;" value="السبت">السبت</option>
                  </select> --}}

                  {{-- <select name="Day" id="Day">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                     <label for="vehicle1"> I have a bike</label><br>
                  </select> --}}



                <div>



                  {{-- <div style="background-color: green;";>
                    <input  id="Day" type="checkbox" name="Day[]" value="السبت">السبت
                  </div>

                  <div style="background-color: red;">
                    <input id="Day" type="checkbox" name="Day[]" value="الأحد">الأحد
                 </div>

                <div style="background-color: green;">
                    <input id="Day" type="checkbox" name="Day[]" value="الإثنين">الإثنين
                </div>

                <div style="background-color: red;">
                    <input id="Day" type="checkbox" name="Day[]" value="الثلاثاء">الثلاثاء
                </div>

                <div style="background-color: green;">
                    <input id="Day" type="checkbox" name="Day[]" value="الأربعاء">الأربعاء
                </div>

                <div style="background-color: red;">
                    <input id="Day" type="checkbox" name="Day[]" value="الخميس">الخميس
                </div>

                <div style="background-color: red;">
                    <input id="Day" type="checkbox" name="Day[]" value="الجمعة">الجمعة
                </div> --}}

            </div>
              </div>


              <div class="addHalaqt buttons">

                <div class="addMasaqBtn">
                  <button class="masaqBtn" type="submit"> إضافة مساق </button>
                    <h2 id="h2" style="color: white ; ">أيام التدريس</h2>

                </div>

                <div style="background-color: seagreen;" class="boxmasaq">
                    <input value="الأحد" id="Day" type="checkbox" name="Day[]" value="الأحد">الأحد
                </div>

                <div style="background-color: seagreen;" class="boxmasaq">
                    <input  value="الإثنين" id="Day" type="checkbox" name="Day[]" value="الإثنين">الإثنين
                </div>

                <div style="background-color:seagreen;" class="boxmasaq">
                    <input  value="الثلاثاء" id="Day" type="checkbox" name="Day[]" value="الثلاثاء">الثلاثاء
                  </div>

                  <div style="background-color: seagreen;" class="boxmasaq">
                    <input  value="الأربعاء" id="Day" type="checkbox" name="Day[]" value="الأربعاء">الأربعاء
                  </div>

                  <div style="background-color: seagreen" class="boxmasaq">
                    <input  value="الخميس" id="Day" type="checkbox" name="Day[]" value="الخميس">الخميس
                  </div>

                  <div style="background-color: seagreen" class="boxmasaq">
                    <input  value="الجمعة" id="Day" type="checkbox" name="Day[]" value="الجمعة">الجمعة
                  </div>

                <div style="background-color: seagreen" class="boxmasaq">
                    <input  value="السبت"  id="Day" type="checkbox" name="Day[]" value="السبت">السبت
                </div>

            </form>

        </div>
        </div>

        <section class="tableSec">
        <table id="example" class="table table-borderd">
          <thead>
          <tr>
            <th>رقم المساق</th>
            <th>إسم المساق</th>
            <th>تاريخ بدء المساق</th>
            <th>تاريخ إنتهاء المساق</th>
            <th>أيام التدريس</th>
          </tr>
         </thead>
         <tbody>
				@foreach($masaqat as $row)
				<tr>
				  <td title="رقم المساق">{{$row->id}}</td>
				  <td title="اسم المساق">{{$row->masaq_name}}</td>
                  <td title="تاريخ بدء المساق">{{$row->Date_start}}</td>
                  <td title="تاريخ انتهاء المساق">{{$row->Date_end}}</td>
                  <td title="أيام التدريس">{{$row->Day}}</td>
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
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/banddle.js') }}"></script>
    <script src="{{ asset('js/icon.js') }}"></script>
</body>
</html>
