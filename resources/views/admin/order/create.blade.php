@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">주문 등록</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title text-center">&nbsp;</div>
                                <form action="{{ route('order.store') }}" method="POST">
                                    {{ @csrf_field() }}
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-md-2 col-sm-12 text-center">성명</label>
                                        <input class="form-control col-md-10 col-sm-12" type="text" name="name" id="name" placeholder="성춘향" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">mobile</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="mobile" id="mobile" placeholder="01012341234" value="{{ old('mobile') }}">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="password" class="col-md-2 col-sm-12 text-center">품명</label>
                                        <input class="form-control col-sm-12 col-md-10" type="text" name="fummung" id="fummung" placeholder="품명" value="{{ old('fummung') }}">
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">기타 사항</label>
                                        <textarea name="etc" class="form-control col-md-10 col-sm-12">{{ old('etc') }}</textarea>
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="password" class="col-md-2 col-sm-12 text-center">우편 번호</label>
                                        <input class="form-control col-sm-12 col-md-2" type="text" name="zip_code" id="zip_code" readonly >
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">지번주소</label>
                                        <input class="form-control col-sm-12 col-md-8" type="text" name="address" id="address" readonly >
                                    </div>
                                    <div class="form-group col-12 form-inline">
                                        <label for="id" class="col-sm-12 col-md-2 text-center">상세주소</label>
                                        <input class="form-control col-sm-12 col-md-8" type="text" name="address_detail" id="address_detail">
                                        <button type="button" class="btn btn-success" id="addressSearch">주소 검색</button>
                                        <div id="layer" style="display:none;position:fixed;overflow:hidden;z-index:1;-webkit-overflow-scrolling:touch;">
                                            <img src="//t1.daumcdn.net/postcode/resource/images/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" alt="닫기 버튼">
                                        </div>
                                    </div>
                                    <div class="col-12 form-inline form-group">
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">품</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="pum" id="pum" value="{{ old('pum') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">화장</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="hwajang" id="hwajang" value="{{ old('hwajang') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">뒷길</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="ditgil" id="ditgil" value="{{ old('ditgil') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">깃고대</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="gitgode" id="gitgode" value="{{ old('gitgode') }}">
                                        </div>
                                    </div>
                                    <div class="col-12 form-inline form-group">
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">진동</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="gindong" id="gindong" value="{{ old('gindong') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">치마</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="chima" id="chima" value="{{ old('chima') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">총장</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="chongjang" id="chongjang" value="{{ old('chongjang') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">나이</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="age" id="age" value="{{ old('age') }}">
                                        </div>
                                    </div>

                                    <div class="col-12 form-inline form-group">
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">재봉</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="abgil" id="abgil" value="{{ old('abgil') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">앞길</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="abgil" id="abgil" value="{{ old('abgil') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">깃</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="git" id="git" value="{{ old('git') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">긴 동</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="gindong" id="gindong" value="{{ old('gindong') }}">
                                        </div>
                                    </div>
                                    <div class="col-12 form-inline form-group">
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">섶 옆</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="subyub" id="subyub" value="{{ old('subyub') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">섭넓이</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="subnubi" id="subnubi" value="{{ old('subnubi') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">깃넓이</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="gitsubi" id="gitsubi" value="{{ old('gitsubi') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">재단</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="jedan" id="jedan" value="{{ old('jedan') }}">
                                        </div>
                                    </div>
                                    <div class="col-12 form-inline form-group">
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">디자인</label>
                                            <input class="form-control col-sm-12 col-md-10" type="text" name="design" id="design" value="{{ old('design') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">납품일</label>
                                            <input class="form-control col-sm-12 col-md-10" type="datetime-local" name="delivery_at" id="delivery_at" value="{{ old('delivery_at') }}">
                                        </div>
                                        <div class="col-md-3 form-inline form-group">
                                            <label for="id" class="col-sm-12 col-md-2 text-center">성별</label>
                                            <select name="gender" class="form-control col-sm-12 col-md-10">
                                                <option value="M">남자</option>
                                                <option value="F">여자</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">등록</button>
                                        <button type="button" class="btn btn-danger">취소</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section("script")
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>
        var element_layer = document.getElementById('layer');
        $(function() {
            $('#addressSearch').on('click', function() {
                daumPostcode();
            });
            $('#btnCloseLayer').on('click', function() {
                closeDaumPostcode();
            })
        })
        function daumPostcode()
        {
            new daum.Postcode({
                oncomplete: function(data) {
                    // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
                    // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                    // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                    var addr = ''; // 주소 변수
                    var extraAddr = ''; // 참고항목 변수

                    //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                    if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                        addr = data.roadAddress;
                    } else { // 사용자가 지번 주소를 선택했을 경우(J)
                        addr = data.jibunAddress;
                    }

                    // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                    if(data.userSelectedType === 'R'){
                        // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                        // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                        if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                            extraAddr += data.bname;
                        }
                        // 건물명이 있고, 공동주택일 경우 추가한다.
                        if(data.buildingName !== '' && data.apartment === 'Y'){
                            extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                        if(extraAddr !== ''){
                            extraAddr = ' (' + extraAddr + ')';
                        }
                        // 조합된 참고항목을 해당 필드에 넣는다.
                        console.log(extraAddr);
                        // document.getElementById("sample2_extraAddress").value = extraAddr;

                    } else {
                        // document.getElementById("sample2_extraAddress").value = '';
                    }

                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('zip_code').value = data.zonecode;
                    document.getElementById("address").value = addr;
                    // 커서를 상세주소 필드로 이동한다.
                    document.getElementById("address").focus();

                    // iframe을 넣은 element를 안보이게 한다.
                    // (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
                    element_layer.style.display = 'none';
                },
                width : '100%',
                height : '100%',
                maxSuggestItems : 5
            }).embed(element_layer);

            // iframe을 넣은 element를 보이게 한다.
            element_layer.style.display = 'block';

            // iframe을 넣은 element의 위치를 화면의 가운데로 이동시킨다.
            initLayerPosition();
        }

        function initLayerPosition(){
            var width = 500; //우편번호서비스가 들어갈 element의 width
            var height = 600; //우편번호서비스가 들어갈 element의 height
            var borderWidth = 2; //샘플에서 사용하는 border의 두께

            // 위에서 선언한 값들을 실제 element에 넣는다.
            element_layer.style.width = width + 'px';
            element_layer.style.height = height + 'px';
            element_layer.style.border = borderWidth + 'px solid';
            // 실행되는 순간의 화면 너비와 높이 값을 가져와서 중앙에 뜰 수 있도록 위치를 계산한다.
            element_layer.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width)/2 - borderWidth) + 'px';
            element_layer.style.top = (((window.innerHeight || document.documentElement.clientHeight) - height)/2 - borderWidth) + 'px';
        }

        function closeDaumPostcode() {
            // iframe을 넣은 element를 안보이게 한다.
            element_layer.style.display = 'none';
        }
    </script>

@endsection
