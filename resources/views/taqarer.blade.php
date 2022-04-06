<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/LOGO-.ico">
    <title>التقارير</title>
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
        <div class="userImg"><img src="{{ asset('img/LOGO .svg') }}"></div>
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
        <h1 class="upHeading">التقارير</h1>
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
                              <select name="masaqat" id="halaqaName" >
                                <!--option value="zOption" selected style="display: none;">اسم المساق  </option-->
                                <option selected disabled>إختار المساق</option>
                                  @foreach($masaqat as $masaqats)
                                <option value="{{$masaqats->id}}">{{$masaqats->masaq_name}}</option>
                                @endforeach
                            </select>
                            <!--input type="text" class="input-name halaqaInput " id="input-name"
                             placeholder="اسم الحلقة" name="halaqt"-->
                             <select name="halaqt" id="halaqaName" >

                                <option selected disabled>اسم الحلقة</option>
                                  @foreach($halaqts as $halaqt)
                                <option value="{{$halaqt->id}}">{{$halaqt->name}}</option>
                                @endforeach
                            </select>
                          </div>


              <div class="addHalaqt">

                <input type="date" class="input-name halaqaInput " id="Date_start"
                placeholder="تاريخ الميلاد" name="Date_start" required>

                <input type="date" class="input-name halaqaInput " id="Date_end"
                placeholder="تاريخ الميلاد" name="Date_end" required>

              </div>

              <input type="text" class="input-name halaqaInput " id="input-name"
                 placeholder="الرقم الشخصي" name="ID_person" required>

              <div class="addHalaqt buttons">
                <div class="addMasaqBtn">
                  <button class="masaqBtn" type="submit"> بحث </button>
                </div>

            </form>

        </div>
        </div>

        <section class="tableSec">
        <table id="example" class="table table-borderd">
          <thead>
          <tr>
            <th>الإسم</th>
            <th>الحالة</th>
          </tr>
         </thead>
         <tbody>
				@foreach($masaqat as $row)
				<tr>
				  <td title="الإسم">{{$row->masaq_name}}</td>
				  <td title="الحالة"></td>

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
