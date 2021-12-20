<!-- 비주얼 -->
<div id="sub-visual">
    <img class="background-image" src="/images/1 (63).jpg" alt="visual" title="visual">
    <img class="background-image" src="/images/1 (92).jpg" alt="visual" title="visual">
    <img class="background-image" src="/images/1 (52).jpg" alt="visual" title="visual">
    <div class="pos-center text-white text-center">
        <span>MUHEONG MUNWAJAE</span>
        <h2>문화재 등록</h2></h4>
    </div>
</div>

<div class="top-nav border-top border-bottom py-3">
    <div class="container">
        HOME
        <i class="fa fa-angle-right mx-2"></i>
        문화재 등록</h2>
    </div>
</div>

<div class="container py-5">
    <form action="/register/nih" method="post" enctype="multipart/form-data">
        
        <div class="row">
            <div class="form-group col-lg-3">
                <label class="col-form-label">순번 (필수)</label>
                <input name="sn" type="text" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">고유 키값 (필수)</label>
                <input name="no" type="text" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">문화재종목 (필수)</label>
                <input name="ccmaName" type="text" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">지정호수 (필수)</label>
                <input name="crltsnoNm" type="text" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">문화재명(국문) (필수)</label>
                <input name="ccbaMnm1" type="text" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">문화재명(한자)</label>
                <input name="ccbaMnm2" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">시도명</label>
                <input name="ccbaCtcdNm" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">시군구명</label>
                <input name="ccsiName" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">관리자</label>
                <input name="ccbaAdmin" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">종목코드 (필수)</label>
                <input name="ccbaKdcd" type="text" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">시도코드 (필수)</label>
                <input name="ccbaCtcd" type="text" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">지정번호 (필수)</label>
                <input name="ccbaAsno" type="text" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">지정해제여부</label>
                <input name="ccbaCncl" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">문화재연계번호</label>
                <input name="ccbaCpno" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">경도</label>
                <input name="longitude" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">위도</label>
                <input name="latitude" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">문화재분류</label>
                <input name="gcodeName" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">문화재분류2(종류)</label>
                <input name="bcodeName" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">문화재분류3</label>
                <input name="mcodeName" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">문화재분류4</label>
                <input name="scodeName" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">수량</label>
                <input name="ccbaQuan" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">지정(등록일)</label>
                <input name="ccbaAsdt" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">소재지 상세</label>
                <input name="ccbaLcad" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">시대</label>
                <input name="ccceName" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">소유자</label>
                <input name="ccbaPoss" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">지정해제일</label>
                <input name="ccbaCndt" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">이미지</label>
                <input name="image" type="file" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">설명</label>
                <input name="content" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group flex-col">
            <div class="flex-end">
                <button class="brown-btn">등록</button>
            </div>
        </div>
    </form>
</div>