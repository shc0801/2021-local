<!-- 비주얼 -->
<div id="sub-visual">
    <img class="background-image" src="/images/1 (63).jpg" alt="visual" title="visual">
    <img class="background-image" src="/images/1 (92).jpg" alt="visual" title="visual">
    <img class="background-image" src="/images/1 (52).jpg" alt="visual" title="visual">
    <div class="pos-center text-white text-center">
        <span>MUHEONG MUNWAJAE</span>
        <h2>공연 일정 조회</h4>
    </div>
</div>

<div class="top-nav border-top border-bottom py-3">
    <div class="container">
        HOME
        <i class="fa fa-angle-right mx-2"></i>
        공개데이터
        <i class="fa fa-angle-right mx-2"></i>
        공연 일정 조회
    </div>
</div>

<div class="container py-5">
    <div class="t-head">
        <div class="cell-100">전문주소</div>
    </div>
    <div class="t-row">
        <div class="cell-100">/openAPI/showList.php</div>
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
        <div class="cell-20">searchType</div>
        <div class="cell-20">조회 구분</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">M</div>
        <div class="cell-30">M: 월별, Y: 년도별</div>
    </div>
    <div class="t-row">
        <div class="cell-20">year</div>
        <div class="cell-20">년도</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">2021</div>
        <div class="cell-30">4자리 년도</div>
    </div>
    <div class="t-row">
        <div class="cell-20">month</div>
        <div class="cell-20">월</div>
        <div class="cell-10">가변</div>
        <div class="cell-20">4</div>
        <div class="cell-30">월별 조회 시 필수(1~12)</div>
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
        <div class="cell-20">showType</div>
        <div class="cell-20">공연 종류</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">M</div>
        <div class="cell-30">요청 공연 종류</div>
    </div>
    <div class="t-row">
        <div class="cell-20">year</div>
        <div class="cell-20">년도</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">2021</div>
        <div class="cell-30">요청 년도</div>
    </div>
    <div class="t-row">
        <div class="cell-20">month</div>
        <div class="cell-20">월</div>
        <div class="cell-10">가변</div>
        <div class="cell-20">4</div>
        <div class="cell-30">요청 월</div>
    </div>
    <div class="t-row">
        <div class="cell-20">totalCount</div>
        <div class="cell-20">항목수</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">17</div>
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
        <div class="cell-20">showUid</div>
        <div class="cell-20">공연 고유번호</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">1</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">showName</div>
        <div class="cell-20">공연명</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">신노이</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">showDt</div>
        <div class="cell-20">공연일시</div>
        <div class="cell-10">필수</div>
        <div class="cell-20">2018-01-01 14:00</div>
        <div class="cell-30">공연일자 + 공연일시</div>
    </div>
    <div class="t-row">
        <div class="cell-20">organizer</div>
        <div class="cell-20">주관</div>
        <div class="cell-10"></div>
        <div class="cell-20">무형문화재관리원</div>
        <div class="cell-30"> 문화재 연계번호</div>
    </div>
    <div class="t-row">
        <div class="cell-20">place</div>
        <div class="cell-20">공연장소</div>
        <div class="cell-10"></div>
        <div class="cell-20">얼쑤마루</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">cast</div>
        <div class="cell-20">출연진</div>
        <div class="cell-10"></div>
        <div class="cell-20">미정</div>
        <div class="cell-30"></div>
    </div>
    <div class="t-row">
        <div class="cell-20">rm</div>
        <div class="cell-20">공연내용</div>
        <div class="cell-10"></div>
        <div class="cell-20"></div>
        <div class="cell-30"></div>
    </div>
</div>