<!-- 비주얼 -->
<div id="sub-visual">
    <img class="background-image" src="/images/1 (63).jpg" alt="visual" title="visual">
    <img class="background-image" src="/images/1 (92).jpg" alt="visual" title="visual">
    <img class="background-image" src="/images/1 (52).jpg" alt="visual" title="visual">
    <div class="pos-center text-white text-center">
        <span>MUHEONG MUNWAJAE</span>
        <h2>공연 등록</h2></h4>
    </div>
</div>

<div class="top-nav border-top border-bottom py-3">
    <div class="container">
        HOME
        <i class="fa fa-angle-right mx-2"></i>
        공연 등록</h2>
    </div>
</div>

<div class="container py-5">
    <form action="/register/show" method="post" enctype="multipart/form-data">
        <input type="hidden" name="type" value="<?=$_GET["type"]?>">
        <div class="row">
            <div class="form-group col-lg-3">
                <label class="col-form-label">공연명 (필수)</label>
                <input name="showName" type="text" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">공연일 (필수)</label>
                <input name="showDate" type="date" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">공연시간 (필수)</label>
                <input name="showTime" type="time" class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">주관</label>
                <input name="organizer" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">공연장소</label>
                <input name="place" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">출연진</label>
                <input name="cast" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="col-form-label">공연내용</label>
                <input name="rm" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group flex-col">
            <div class="flex-end">
                <button class="brown-btn">등록</button>
            </div>
        </div>
    </form>
</div>