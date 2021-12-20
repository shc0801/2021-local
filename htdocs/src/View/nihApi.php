<!-- 비주얼 -->
<div id="sub-visual">
    <img class="background-image" src="/images/1 (63).jpg" alt="visual" title="visual">
    <img class="background-image" src="/images/1 (92).jpg" alt="visual" title="visual">
    <img class="background-image" src="/images/1 (52).jpg" alt="visual" title="visual">
    <div class="pos-center text-white text-center">
        <span>MUHEONG MUNWAJAE</span>
        <h2>무형문화재 현황 조회</h4>
    </div>
</div>

<div class="top-nav border-top border-bottom py-3">
    <div class="container">
        HOME
        <i class="fa fa-angle-right mx-2"></i>
        공개데이터
        <i class="fa fa-angle-right mx-2"></i>
        무형문화재 현황 조회
    </div>
</div>

<div class="container py-5">
    <div class="t-head">
        <div class="cell-100">전문주소</div>
    </div>
    <div class="t-row">
        <div class="cell-100">/openAPI/nihList.php</div>
    </div>

    <div class="header mt-4 py-3">
        <hr class="bg-brown">
        <div class="title text-brown">요청 전문 명세서</div>
    </div>
    <div class="t-head">
        <div class="cell-20">항목명</div>
        <div class="cell-20">국문명</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">샘플</div>
        <div class="cell-30">항목설명</div>
    </div>
    <div class="t-row">
        <div class="cell-20">pageNo</div>
        <div class="cell-20">페이지 번호</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">1</div>
        <div class="cell-30">요청 페이지 번호</div>
    </div>
    <div class="t-row">
        <div class="cell-20">numOfRows</div>
        <div class="cell-20">페이지당 항목수</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">3</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">bcodeName</div>
        <div class="cell-20">무형문화 종류</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">전통 공연</div>
        <div class="cell-30">포함(LIKE 검색)</div>
    </div>
    
    <div class="header mt-4 py-3">
        <hr class="bg-brown">
        <div class="title text-brown">응답 전문 명세서</div>
    </div>
    <div class="t-head">
        <div class="cell-20">항목명</div>
        <div class="cell-20">국문명</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">샘플</div>
        <div class="cell-30">항목설명</div>
    </div>
    <div class="t-row">
        <div class="cell-20">numOfRows</div>
        <div class="cell-20">페이지 번호</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">3</div>
        <div class="cell-30">요청 항목 수</div>
    </div>
    <div class="t-row">
        <div class="cell-20">pageNo</div>
        <div class="cell-20">페이지 번호</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">1</div>
        <div class="cell-30">요청 페이지 번호</div>
    </div>
    <div class="t-row">
        <div class="cell-20">totalCount</div>
        <div class="cell-20">페이지당 항목수</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">11</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">items</div>
        <div class="cell-20"></div>
        <div class="cell-10"></div>
        <div class="cell-20"></div>
        <div class="cell-30">조회 결과 항목 목록(0..n)</div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaKdcd</div>
        <div class="cell-20">종목코드</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">17</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaAsno</div>
        <div class="cell-20">지정번호</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">170000</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaCtcd</div>
        <div class="cell-20">시도코드</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">11</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaCpno</div>
        <div class="cell-20">연계번호</div>
        <div class="cell-10"></div>
        <div class="cell-20">1271100170000</div>
        <div class="cell-30"> 문화재 연계번호</div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccmaName</div>
        <div class="cell-20">문화재종목</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">국가무형문화재</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaMnm1</div>
        <div class="cell-20">문화재명(국문)</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">봉산탈춤</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaMnm2</div>
        <div class="cell-20">문화재명(한자)</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">鳳山탈춤</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">gcodeName</div>
        <div class="cell-20">문화재분류</div>
        <div class="cell-10"></div>
        <div class="cell-20">무형문화재</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">bcodeName</div>
        <div class="cell-20">문화재분류2(종류)</div>
        <div class="cell-10"></div>
        <div class="cell-20">전통 공연·예술</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">mcodeName</div>
        <div class="cell-20">문화재분류3</div>
        <div class="cell-10"></div>
        <div class="cell-20">연희</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">scodeName</div>
        <div class="cell-20">문화재분류4</div>
        <div class="cell-10"></div>
        <div class="cell-20"></div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaQuan</div>
        <div class="cell-20">수량</div>
        <div class="cell-10"></div>
        <div class="cell-20"></div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaAsdt</div>
        <div class="cell-20">지정(등록일)</div>
        <div class="cell-10"></div>
        <div class="cell-20">19670616</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaCtcdNm</div>
        <div class="cell-20">시도명</div>
        <div class="cell-10"></div>
        <div class="cell-20">서울특별시</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccsiName</div>
        <div class="cell-20">시군구명</div>
        <div class="cell-10"></div>
        <div class="cell-20"></div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaLcad</div>
        <div class="cell-20">소재지 상세</div>
        <div class="cell-10"></div>
        <div class="cell-20">서울특별시</div> 
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccceName</div>
        <div class="cell-20">시대</div>
        <div class="cell-10"></div>
        <div class="cell-20">서울특별시</div> 
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaPoss</div>
        <div class="cell-20">소유자</div>
        <div class="cell-10"></div>
        <div class="cell-20"></div> 
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaAdmin</div>
        <div class="cell-20">관리자</div>
        <div class="cell-10"></div>
        <div class="cell-20"></div> 
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaCncl</div>
        <div class="cell-20">지정해제여부</div>
        <div class="cell-10"></div>
        <div class="cell-20"></div> 
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">ccbaCndt</div>
        <div class="cell-20">지정해제일</div>
        <div class="cell-10"></div>
        <div class="cell-20"></div> 
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">image</div>
        <div class="cell-20">이미지</div>
        <div class="cell-10"></div>
        <div class="cell-20">data:image/….....</div> 
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">content</div>
        <div class="cell-20">설명</div>
        <div class="cell-10"></div>
        <div class="cell-20">탈춤이란…</div> 
        <div class="cell-30"></div>
    </div>
</div>