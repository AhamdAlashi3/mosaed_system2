<!DOCTYPE html>
<html dir="rtl">
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
        <a href="masaqat"><p class="sideBarItem">المساقات </p></a>
        <a href="halaqts"><p class="sideBarItem">الحلقات </p></a>
        <a href="teacherDatas"><p class="sideBarItem">المعلمين </p></a>
        <a href="studentData.html"><p class="sideBarItem">الطلاب </p></a>
        <a href="{{ route('taqarer.index') }}"><p class="sideBarItem">التقارير </p></a>
        <a  href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <p class="sideBarItem">{{ __('تسجيل الخروج') }}</p>
        </a>
        <div class="person">
          <div class="row ">
            {{-- <div class="col-4 mohamedImg">
            </div> --}}
            <div class="col-8">
              {{-- <p sideBarItem> الإداري : {{ Auth::user()->honor }} </p> --}}
            </div>
          </div>
        </div>
      </side>
      <div class="home-content">
        <section class="navHome">
        <h1 class="upHeading masaqtHeading">المساقات</h1>
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
            <a href="masaqat"><p class="sideBarItem">المساقات </p></a>
            <a href="./halaqts"><p class="sideBarItem">الحلقات </p></a>
            <a href="teacherData.html"><p class="sideBarItem">المعلمين </p></a>
            <a href="studentData.html"><p class="sideBarItem">الطلاب </p></a>
            <a href="{{ route('taqarer.index') }}"><p class="sideBarItem">التقارير </p></a>



              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
             </form>
            <div class="person">
              <div class="row ">
                {{-- <div class="col-4 mohamedImg">
                </div> --}}
                {{-- <div class="col-8">
                  <p sideBarItem> الإداري : محمد خليل </p>
                </div> --}}
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
				   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" dir="rtl">
                      <strong>{{session()->get('Error')}}</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
					  </button>
				   </div>
				@endif
      <section class="AllMasaqContent">
      <section class="masaqSec">
      <div class="addMasaqBtn">

          <button class="masaqBtn masaqBtn1 " onclick="addFunction()">إضافة مساق</button>
      </div>
       <div class="masaqName">
           <h3>المساقات</h3>
           <!--div class="line"></div-->
           <div class="row masaqActive">
               <div class="col-2">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn" >
                    <!--svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                    fill="currentColor" class="bi bi-three-dots-vertical svgIcon dropbtn"
                    viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3
                        0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5
                         0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                      </svg--></button>
                    <!--div id="myDropdown" class="dropdown-content">
                      <a href="#home">تعديل</a>
                      <a href="#about">مسح</a>
                    </div-->
                  </div>
               </div>

								<div class="table-responsive ">
                 <table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr >
												<th class="border-bottom-0" style="font-size:16px">#</th>
                        <th class="border-bottom-0"style="font-size:16px">اسم المساق</th>
                        <th class="border-bottom-0" style="font-size:16px">العمليات</th>

											</tr>
                    </thead>
                    <tbody>
											<?php $n=0;?>
											@foreach($masaqat as $row)
											<?php $n++;?>
											<tr>
												<td>{{$n}}</td>
                        <td title="المساق">{{$row->section}}</td>
                        <td>

                    <a class="btn btn-outline-success btn-sm"
									     data-id ="{{$row->id}}"
										   data-section="{{$row->section}}"
										   data-toggle="modal"
                       href="#Edit_section" title="Edit">تعديل</a>

                                 <a class="btn btn-outline-danger btn-sm"
									            data-id ="{{$row->id}}"
									    	   data-section="{{$row->section}}"
									    	   data-toggle="modal"
									    	   href="#Delete_section" title="Delete">حذف</a>

						</td>
                        @endforeach
                   </tbody>
                 </table>
                </div>
               <!--div class="col-8 nameOfMasaq">

               @foreach($masaqat as $row)
                   <p>{{$row->section}}</p>
               @endforeach
               </div-->

               <!--div class="line"></div-->
           </div>
       </div>
    </section>
    <section class="newMasaq">
        <h2>إضافة مساق</h2>
        <form action="{{ route('masaqat.store')}}" method="post">
						  {{csrf_field()}}
            <input type="text" class="input-name enterMasaqName" id="input-name"  name="section" placeholder="اسم المساق">
            <button class="masaqBtn addBtn" type="submit">إضافة </button>
        </form>
    </section>
    </section>
    <!-- Basic modal Edit Sections-->
		<div class="modal" id="Edit_section">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
						<div class="modal-header">
						   <h6 class="modal-title">تعديل المساق</h6>
						   <button aria-label="Close" class="close" data-dismiss="modal" type="button">
						   <span aria-hidden="true">&times;</span></button>
						</div>
					<div class="modal-body">
            <form action="masaqat/update" method="post">
            {{method_field('head')}}
						{{csrf_field()}}

							<div class="form-group">
							  <label for="section" style="margin-left:80%">إسم المساق</label>
							  <input type="hidden" name="id" id="id">
							  <input type="text" name="section" id="section" class="form-control" >
							</div>
							<div class="modal-footer">
								<button class="btn  btn-success" type="submit">تاكيد</button>
								<button class="btn  btn-secondary" data-dismiss="modal" type="button">إلغاء</button>
							</div>
            </form>
          </div>
				</div>
			</div>
		</div>
    <!-- End Basic modal  Edit section-->
    <!-- Basic modal Delete Sections-->
		<div class="modal" id="Delete_section">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
						<div class="modal-header">
						   <h6 class="modal-title">حذف المساق</h6>
						   <button aria-label="Close" class="close" data-dismiss="modal" type="button">
						   <span aria-hidden="true">&times;</span></button>
						</div>
					<div class="modal-body">
            <form action="masaqat/destroy" method="POST">
            {{method_field('GET')}}
						{{csrf_field()}}

							<div class="form-group">
							  <label for="section" class="text-danger" style="margin-left:50%">هل انت متاكد من عملية الحذف ؟</label>
							  <input type="hidden" name="id" id="id">
							  <input type="text"   name="section" id="section" class="form-control" readonly>
							</div>
							<div class="modal-footer">
								<button class="btn  btn-danger" type="submit">تاكيد</button>
								<button class="btn  btn-info" data-dismiss="modal" type="button">إلغاء</button>
							</div>
            </form>
          </div>
				</div>
			</div>
		</div>
		<!-- End Basic modal  Delete section-->
  </div>
  </div>
    <!-- Js Files -->
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="{{ asset('js/banddle.js') }}"></script>
    <script src="{{ asset('js/icon.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ asset('js/table-data.js') }}"></script>
    <script src="{{ asset('js/modal-popup.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>

<!--script>
	$("#Edit_section").on('show.bs.modal', function(event){
		var button = $(event.relatedTarget)
		var id      = button.data('id')
    var section = button.data('section')
    var modal   = $(this)
    modal.find('.moda-body #id').val(id);
		modal.find('.moda-body #section').val(section);

 	})

</script-->

<script>
$('#Edit_section').on('show.bs.modal',function(event){
	   var button = $(event.relatedTarget)
	   var id       = button.data('id')
	   var section = button.data('section')
	   var modal = $(this)
	   modal.find('.modal-body #id').val(id);
	   modal.find('.modal-body #section').val(section);

   })

  </script>
  <script>
$('#Delete_section').on('show.bs.modal',function(event){
	   var button = $(event.relatedTarget)
	   var id       = button.data('id')
	   var section = button.data('section')
	   var modal = $(this)
	   modal.find('.modal-body #id').val(id);
	   modal.find('.modal-body #section').val(section);

   })

  </script>

</body>
</html>
<!--script>
$('#Edit_section').on('show.bs.modal',function(event){
	   var button = $(event.relatedTarget)
	   var id       = button.data('id')

	   var section = button.data('section')

	   var modal = $(this)
	   modal.find('.modal-body #id').val(id);
	   modal.find('.modal-body #section').val(section_name);

   })

  </script-->
