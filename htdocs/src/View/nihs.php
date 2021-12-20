<!-- 비주얼 -->
<div id="sub-visual">
        <img class="background-image" src="/images/1 (63).jpg" alt="visual" title="visual">
        <img class="background-image" src="/images/1 (92).jpg" alt="visual" title="visual">
        <img class="background-image" src="/images/1 (52).jpg" alt="visual" title="visual">
        <div class="pos-center text-white text-center">
            <span>MUHEONG MUNWAJAE</span>
            <h2>무형문화재 현황</h4>
        </div>
    </div>

    <div class="top-nav border-top border-bottom py-3">
        <div class="container">
            HOME
            <i class="fa fa-angle-right mx-2"></i>
            무형문화재 현황
        </div>
    </div>

    <?php extract($data); ?>

    <div class="container text-center py-5">
        <div class="header flex-between border-bottom pb-2">
            <div>
                <hr class="bg-brown">
                <div class="title text-brown">무형문화재 현황</div>
            </div>
            <div class="pt-5">
                <a href="/nihs?type=normal&tab=<?=$tab?>" class="mx-1 <?=$type == "normal" ? " text-brown" : ""?>">
                    <i class="fa fa-table"></i>
                    앨범형
                </a>
                <a href="/nihs?type=list&tab=<?=$tab?>" class="mx-1 <?=$type == "list" ? " text-brown" : ""?>">
                    <i class="fa fa-list"></i>
                    목록형
                </a>
            </div>
        </div>

        <div class="flex-between py-2">
            <p class="nis-title mb-0">총 <?=$all?>건 <?=$page?>p / <?=$totalPage?>p</p>
            <a href="/register/nih" class="brown-btn">무형문화재 등록</a>
        </div>

        <?php if($type == "normal"): ?>
        <div class="row nih-row">
            <?php foreach($data as $nih): ?>
            <div class="col-lg-3 my-2">
                <div class="card">
                    <div class="card-header p-0" style="height: 150px">
                        <a href="/update/nih?id=<?=$nih->sn?>"><img class="image" src="/nihcImage?filename=<?=$nih->image?>" alt="no image"></a>
                    </div>
                    <div class="card-body">
                        <a href="/update/nih?id=<?=$nih->sn?>"><strong class="fs-n1 text-brown">무형문화재</strong></a>
                        <div class="mt-1">
                            <small class="bold">이름</small>
                            <span class="ml-2"><?=$nih->ccbaMnm1?></span>
                        </div>
                        <div class="mt-1">
                            <small class="bold">분류</small>
                            <span class="ml-2"><?=$nih->bcodeName?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
            <div class="t-head mt-4">
                <div class="cell-10">순번</div>
                <div class="cell-25">이름</div>
                <div class="cell-15">분류</div>
                <div class="cell-20">문화재종목</div>
                <div class="cell-30">관리자(단체)</div>
            </div>
            <?php foreach($data as $nih): ?>
            <div class="t-row">
                <div class="cell-10"><?=$nih->sn?></div>
                
                <div class="cell-25"><a href="/update/nih?id=<?=$nih->sn?>"><?=$nih->ccbaMnm1?></a></div>
                <div class="cell-15"><?=$nih->bcodeName?></div>
                <div class="cell-20"><?=$nih->ccmaName?></div>
                <div class="cell-30"><?=$nih->ccbaLcad?></div>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
        
        <div class="paging mt-4 flex-center">
            <a href="/nihs?type=<?=$type?>&page=<?=1?>&tab=<?=$tab?>" class="icon mx-1 bg-dbrown text-white">
                <i class="fa fa-angle-left"></i>
                <i class="fa fa-angle-left"></i>
            </a>
            <a href="/nihs?type=<?=$type?>&page=<?=$startPage - 1?>&tab=<?=$tab?>" class="icon mx-1 bg-brown text-white">
                <i class="fa fa-angle-left"></i>
            </a>
            <?php for($i = $startPage; $i <= $endPage; $i++): ?>
            <a href="/nihs?type=<?=$type?>&page=<?=$i?>&tab=<?=$tab?>" class="icon mx-1 <?=$i == $page ? "bg-brown text-white" : "bd-brown text-brown"?>"><?=$i?></a>
            <?php endfor; ?>
            <a href="/nihs?type=<?=$type?>&page=<?=$endPage + 1?>&tab=<?=$tab?>" class="icon mx-1 bg-brown text-white">
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="/nihs?type=<?=$type?>&page=<?=$totalPage?>&tab=<?=$tab?>" class="icon mx-1 bg-dbrown text-white">
                <i class="fa fa-angle-right"></i>
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>