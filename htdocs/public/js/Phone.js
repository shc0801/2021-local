class App {
    constructor() {
        this.init();
    }

    async init() {
        this.phones = await this.getPhones();
        
        if(this.phones.statusCd != "200") {
            alert(this.phones.statusMsg);
            location.href = "/";
        }
        
        this.phones = this.phones.items;
        this.tabs = "전체"

        this.clearTab();

        this.render();
        this.addEvent();
    }

    render() {
        $(".phone-row").html("");
        if(this.tabs == "전체") {
            this.phones.forEach(item => {
                $(".phone-row").append(`<div class="col-lg-3 my-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <strong class="fs-n1 text-brown">무형문화재관리원</strong>
                                                    <div class="mt-1">
                                                        <small class="bold">부서</small>
                                                        <span class="ml-2">${item.deptNm}</span>
                                                    </div>
                                                    <div class="mt-1">
                                                        <small class="bold">이름</small>
                                                        <span class="ml-2">${item.name}</span>
                                                    </div>
                                                    <div class="mt-1">
                                                        <small class="bold">연락처</small>
                                                        <span class="ml-2">${item.telNo}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`);
            })
        } else {
            $(".title").html(`${this.tabs}`);
            this.phones.forEach(item => {
                if(item.deptNm == this.tabs) {
                    $(".phone-row").append(`<div class="col-lg-3 my-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <strong class="fs-n1 text-brown">무형문화재관리원</strong>
                                                    <div class="mt-1">
                                                        <small class="bold">부서</small>
                                                        <span class="ml-2">${item.deptNm}</span>
                                                    </div>
                                                    <div class="mt-1">
                                                        <small class="bold">이름</small>
                                                        <span class="ml-2">${item.name}</span>
                                                    </div>
                                                    <div class="mt-1">
                                                        <small class="bold">연락처</small>
                                                        <span class="ml-2">${item.telNo}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`);
                }
            })
        }
    }

    addEvent() {
        $(".tabs").find("button").off().on("click", e => {
            this.tabs = e.target.dataset.tab;
            this.clearTab();
            this.render();
        })
    }

    clearTab() {
        document.querySelectorAll(".tab").forEach(item => item.classList.remove("btn-filled"));
        document.querySelector(`.${this.tabs}`).classList.add("btn-filled");
    }

    getPhones() {
        return fetch("/restAPI/phone.php")
            .then(res => res.json())
    }
}

window.onload = () => {
    let app = new App();
}

location.getQueryString = function() {
    let search = this.search.substr(1);
    if(search == "") return {};
    else {
        return search.split("&").reduce((p, c) => {
            let [key, value] = c.split("=");
            p[key] = value;
            return p;
        }, {});
    }
}