    <!-- 비주얼 -->
    <div id="sub-visual">
        <img class="background-image" src="/images/1 (63).jpg" alt="visual" title="visual">
        <img class="background-image" src="/images/1 (92).jpg" alt="visual" title="visual">
        <img class="background-image" src="/images/1 (52).jpg" alt="visual" title="visual">
        <div class="pos-center text-white text-center">
            <span>MUHEONG MUNWAJAE</span>
            <h2>월간 공연일정</h4>
        </div>
    </div>

    <div class="top-nav border-top border-bottom py-3">
        <div class="container">
            HOME
            <i class="fa fa-angle-right mx-2"></i>
            행사안내
            <i class="fa fa-angle-right mx-2"></i>
            월간 공연일정
        </div>
    </div>

    <style>
        .cal-body {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-template-rows: 3vh;

            border-top: 2px solid #9c846a;
        }
        .cal-item { text-align: center; border: 1px solid #eee; }
        .cal-item:not(.day) { height: 120px; }
        .day { height: 30px !important; }
    </style>


<div class="container py-5">
        <?php extract($data); $today = explode("-", date("Y-m-d")); ?>
        <div class="calender">
            <div class="cal-header flex-center">
                <a href="/year?year=<?=$prev_year?>" class="icon fs-5 pb-3 mx-1">
                    <i class="fa fa-angle-left"></i>
                </a>
                <div class="title pt-2"><?=$year?>년 </div>
                <a href="/year?year=<?=$next_year?>" class="icon fs-5 pb-3 mx-1">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            
            <div class="row">
                <?php for($month = 1; $month <= 12; $month++): ?>
                <div class="col-lg-6 flex-between my-2 py-3">
                    <div class="title"><?=$month?>월</div>
                    <div class="flex-col">
                        <?php foreach($shows as $show): ?>
                            <?php if($show->month == $month): ?>
                                <a href="/update/show?id=<?=$show->showUid ?>&type=year" class="show_day text-black"><?=$show->showName?></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
            
            <div class="flex-col pt-3">
                <a href="/register/show?type=month" class="flex-end brown-btn">일정등록</a>
            </div>
        </div>
    </div>