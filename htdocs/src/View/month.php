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
                <a href="/month?year=<?=date('Y', $t_prev)?>&month=<?=date('m', $t_prev)?>" class="icon fs-5 pb-3 mx-1">
                    <i class="fa fa-angle-left"></i>
                </a>
                <div class="title pt-2"><?=$year?>년 <?=$month?>월</div>
                <a href="/month?year=<?=date('Y', $data["t_next"])?>&month=<?=date('m', $data["t_next"])?>" class="icon fs-5 pb-3 mx-1">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <div class="cal-body mt-2">
                <div class="cal-item flex-col-between day text-brown">일</div>
                <div class="cal-item flex-col-between day">월</div>
                <div class="cal-item flex-col-between day">화</div>
                <div class="cal-item flex-col-between day">수</div>
                <div class="cal-item flex-col-between day">목</div>
                <div class="cal-item flex-col-between day">금</div>
                <div class="cal-item flex-col-between day text-dbrown">토</div>

                <?php for($i = 0; $i < date("w", $t_first); $i++): ?>
                    <div class="disabled border"></div>
                <?php endfor; ?>
                
                <?php for($day = 1; $day <= date("d", $t_last); $day++): ?>
                    <div class="cal-item flex-col-between py-2"><?=$day?>
                        <div> 
                        <?php foreach($shows as $show) { ?>
                            <?php if(explode("-", $show->showDate)[2] == $day) { ?>
                                <a href="/update/show?id=<?=$show->showUid ?>&type=month" class="show_day text-black"><?=$show->showName?></a>
                            <?php } ?>
                        <?php } ?>
                        </div>
                    </div>
                <?php endfor; ?>
                
                <?php for($i = 0; $i < 6 - date("w", $t_last); $i++):?>
                    <div class="disabled border"></div>
                <?php endfor;?>
            </div>
            <div class="flex-col pt-3">
                <a href="/register/show?type=month" class="flex-end brown-btn">일정등록</a>
            </div>
        </div>
    </div>