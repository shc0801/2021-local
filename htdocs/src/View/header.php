<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/font-awesome/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="/jQuery/jquery-3.5.1.min.js"></script>
    <script src="/bootstrap/bootstrap-4.5.0-dist/js/bootstrap.js"></script>
</head>
<body>
    <input type="checkbox" name="open-aside" id="open-aside" hidden>
    <!-- 헤더 -->
    <header>
        <div class="header-top flex-between d-lg-flex d-none">
            <div class="header-top-menu flex-center">
                <div><a class="px-3" href="#">유네스코 문화유산</a></div>
                <div><a class="px-3" href="#">3D문화유산</a></div>
                <div><a class="px-3" href="#">기록유산</a></div>
                <div><a class="px-3" href="#">사이트맵</a></div>
                <div><a class="px-3" href="#">알림 / 소식</a></div>
            </div>
            <div class="utility d-flex">
                <div class="auth">
                    <a class="mx-2" href="#">로그인</a>
                    <a class="mx-2" href="#">회원가입</a>
                    <a class="mx-2" href="#">문의하기</a>
                </div>
                <select class="ml-4">
                    <option value="한국어">한국어</option>
                    <option value="English">English</option>
                    <option value="中文(简体)">中文(简体)</option>
                    <option value="日本語">日本語</option>
                </select>
            </div>
        </div>
        <div class="header-bottom flex-between">
            <a href="#" class="logo"><img src="/images/logo.png" alt="logo" title="logo"></a>
            <nav class="d-lg-flex d-none">
                <div class="nav-item">
                    <a href="/">HOME</a>
                </div>
                <div class="nav-item">
                    <div class="header-sub">
                        <div class="sub d-flex">
                            <div class="sub-utility">
                                <img class="background-image" src="/images/심벌/정부상징_심벌.png" alt="배경심벌" title="배경심벌">
                                <div class="title text-brown">무형문화재관리원</div>
                            </div>
                            <div class="sub-menu row pl-5">
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="#" class="fs-1 bold">소개</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="#" class="fs-1 bold">일반현황</a>
                                    <div class="mt-2"><a href="#">- 설립목적</a></div>
                                    <div class="mt-2"><a href="./history.html">- 연혁</a></div>
                                    <div class="mt-2"><a href="#">- 역할</a></div>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="#" class="fs-1 bold">주요업무계획</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="#" class="fs-1 bold">조직 및 구성</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="./phone.html" class="fs-1 bold">전화번호</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#">무형문화재관리원</a>
                </div>
                <div class="nav-item">
                    <div class="header-sub">
                        <div class="sub d-flex">
                            <div class="sub-utility">
                                <img class="background-image" src="/images/심벌/정부상징_심벌.png" alt="배경심벌" title="배경심벌">
                                <div class="title text-brown">무형문화재 현황</div>
                            </div>
                            <div class="sub-menu row pl-5">
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="/nihs?tab=전통 공연·예술" class="fs-1 bold">전통 공연·예술</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="/nihs?tab=전통기술" class="fs-1 bold">전통기술</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="/nihs?tab=전통지식" class="fs-1 bold">전통지식</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="/nihs?tab=구전 전통 및 표현" class="fs-1 bold">구전 전통 및 표현</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="/nihs?tab=전통 생활관습" class="fs-1 bold">전통 생활관습</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="/nihs?tab=의례·의식" class="fs-1 bold">의례·의식</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="/nihs?tab=전통 놀이·무예" class="fs-1 bold">전통 놀이·무예</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="/nihs?tab=전체 현황" class="fs-1 bold">전체 현황</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/nihs">무형문화재 현황</a>
                </div>
                <div class="nav-item">
                    <div class="header-sub">
                        <div class="sub d-flex">
                            <div class="sub-utility">
                                <img class="background-image" src="/images/심벌/정부상징_심벌.png" alt="배경심벌" title="배경심벌">
                                <div class="title text-brown pl-5">행사 안내</div>
                            </div>
                            <div class="sub-menu row pl-5">
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="#" class="fs-1 bold">공연</a>
                                    <div class="mt-2"><a href="/month">- 월간 공연 일정</a></div>
                                    <div class="mt-2"><a href="/year">- 연간 공연 일정</a></div>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="#" class="fs-1 bold">전시</a>
                                    <div class="mt-2"><a href="#">- 관람 안내</a></div>
                                    <div class="mt-2"><a href="#">- 전시실</a></div>
                                    <div class="mt-2"><a href="#">- 디지털 체험관</a></div>
                                    <div class="mt-2"><a href="#">- 기획 전시실</a></div>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="#" class="fs-1 bold">교육</a>
                                    <div class="mt-2"><a href="#">- 전문 교육</a></div>
                                    <div class="mt-2"><a href="#">- 사회 교육</a></div>
                                    <div class="mt-2"><a href="#">- 연간 교육일정</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#">행사 안내</a>
                </div>
                <div class="nav-item">
                    <div class="header-sub">
                        <div class="sub d-flex">
                            <div class="sub-utility">
                                <img class="background-image" src="/images/심벌/정부상징_심벌.png" alt="배경심벌" title="배경심벌">
                                <div class="title text-brown pl-4">전승지원</div>
                            </div>
                            <div class="sub-menu row pl-5">
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="#" class="fs-1 bold">공방</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="#" class="fs-1 bold">공예품 갤러리</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="#" class="fs-1 bold">전수교육관 현황</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#">전승지원</a>
                </div>
                <div class="nav-item">
                    <div class="header-sub">
                        <div class="sub d-flex">
                            <div class="sub-utility">
                                <img class="background-image" src="/images/심벌/정부상징_심벌.png" alt="배경심벌" title="배경심벌">
                                <div class="title text-brown pl-4">공개 데이터</div>
                            </div>
                            <div class="sub-menu row pl-5">
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="/nihApi" class="fs-1 bold">무형문화재 현황 조회</a>
                                </div>
                                <div class="sub-item col-lg-3 flex-col mb-3">
                                    <a href="/showApi" class="fs-1 bold">공연 일정 조회</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#">공개 데이터</a>
                </div>
            </nav>
            <label for="open-aside" class="icon-bar d-lg-none"><span></span><span></span><span></span></label>
            <div class="search d-lg-flex d-none">
                <input type="search" placeholder="검색어를 입력해주세요">
                <i class="fa fa-search mt-1"></i>
            </div>
        </div>
    </header>
    <!-- 사이드바 -->
    <aside>
        <label for="open-aside" class="aside-background"></label>
        <div class="aside-content">
            <div class="utility d-flex px-4">
                <div class="auth">
                    <a class="mx-2" href="#">로그인</a>
                    <a class="mx-2" href="#">회원가입</a>
                    <a class="mx-2" href="#">문의하기</a>
                </div>
                <select class="ml-4">
                    <option value="한국어">한국어</option>
                    <option value="English">English</option>
                    <option value="中文(简体)">中文(简体)</option>
                    <option value="日本語">日本語</option>
                </select>
            </div>
            <nav class="mt-3">
                <div class="aside-sub">
                    <a href="#">무형문화재관리원</a>
                    <div class="sub-menu">
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">소개</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">일반현황</a>
                            <div class="mt-2"><a href="#">- 설립목적</a></div>
                            <div class="mt-2"><a href="#">- 연혁</a></div>
                            <div class="mt-2"><a href="#">- 역할</a></div>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">주요업무계획</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">조직 및 구성</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">전화번호</a>
                        </div>
                    </div>
                </div>
                <div class="aside-sub">
                    <a href="#">무형문화재 현황</a>
                    <div class="sub-menu">
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">전통 공연·예술</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">전통기술</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">전통지식</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">구전 전통 및 표현</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">전통 생활관습</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">의례·의식</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">전통 놀이·무예</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">전체 현황</a>
                        </div>
                    </div>
                </div>
                <div class="aside-sub">
                    <a href="#">행사 안내</a>
                    <div class="sub-menu">
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">공연</a>
                            <div class="mt-2"><a href="#">- 월간 공연 일정</a></div>
                            <div class="mt-2"><a href="#">- 연간 공연 일정</a></div>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">전시</a>
                            <div class="mt-2"><a href="#">- 관람 안내</a></div>
                            <div class="mt-2"><a href="#">- 전시실</a></div>
                            <div class="mt-2"><a href="#">- 디지털 체험관</a></div>
                            <div class="mt-2"><a href="#">- 기획 전시실</a></div>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">교육</a>
                            <div class="mt-2"><a href="#">- 전문 교육</a></div>
                            <div class="mt-2"><a href="#">- 사회 교육</a></div>
                            <div class="mt-2"><a href="#">- 연간 교육일정</a></div>
                        </div>
                    </div>
                </div>
                <div class="aside-sub">
                    <a href="#">전승지원</a>
                    <div class="sub-menu">
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">공방</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">공예품 갤러리</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">전수교육관 현황</a>
                        </div>
                    </div>
                </div>
                <div class="aside-sub">
                    <a href="#">공개 데이터</a>
                    <div class="sub-menu">
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">무형문화재 현황 조회</a>
                        </div>
                        <div class="sub-item flex-col">
                            <a href="#" class="bold">공연 일정 조회</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </aside>