class App {
    constructor() {
        this.init();
    }

    async init() {
        this.detail = [];
        await this.getNihs();
        
        setTimeout(() => {
            this.render();
        }, 500)
    }

    render() {
        let {page} = location.getQueryString();
        page = !isNaN(parseInt(page)) && parseInt(page) >= 1 ? parseInt(page) : 1; 


        const LIST_LENGTH = 8;
        const BLOCK_LENGTH = 10;
        const SPACING = 9;

        let totalPage = Math.ceil(this.detail.length / LIST_LENGTH);
        let startPage = Math.ceil(page / BLOCK_LENGTH) * BLOCK_LENGTH - SPACING;
        let endPage = startPage + SPACING > totalPage ? totalPage : startPage + SPACING;

        let prev = true;
        let next = true;

        if(startPage == 1) prev = false;
        if(endPage == totalPage) next = false;
        
        $(".nis-title").html(`총 ${this.detail.length}건 ${page}p / ${totalPage}p`);

        let sp = (page - 1) * LIST_LENGTH;
        let ep = sp + LIST_LENGTH;
        let data = this.detail.slice(sp, ep);

        $(".paging").html(`<a href="?page=1}" ${!prev ? "disabled" : ""} class="icon mx-1 bg-dbrown text-white">
                                <i class="fa fa-angle-left"></i>
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a href="?page=${startPage - 1}" ${!prev ? "disabled" : ""} class="icon mx-1 bg-brown text-white">
                                <i class="fa fa-angle-left"></i>
                            </a>`);
        for(let i = startPage; i <= endPage; i++) {
            $(".paging").append(`<a href="?page=${i}" class="icon mx-1 ${i == page ? "bg-brown text-white" : "bd-brown text-brown"}">${i}</a>`)
        }
        
        $(".paging").append(`<a href="?page=${endPage + 1}" ${!next ? "disabled" : ""} class="icon mx-1 bg-brown text-white">
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="?page=${totalPage}" ${!next ? "disabled" : ""} class="icon mx-1 bg-dbrown text-white">
                                <i class="fa fa-angle-right"></i>
                                <i class="fa fa-angle-right"></i>
                            </a>`);

        this.renderCard(data);
    }

    renderCard(data) {
        data.forEach(item => {
            $(".nih-row").append(`<div class="col-lg-3 my-2">
                                        <div class="card">
                                            <div class="card-header p-0" style="height: 150px">
                                                <img class="image" src="/xml/nihcImage/${item.image}" alt="no image">
                                            </div>
                                            <div class="card-body">
                                                <strong class="fs-n1 text-brown">무형문화재</strong>
                                                <div class="mt-1">
                                                    <small class="bold">이름</small>
                                                    <span class="ml-1">${item.name}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`);
        })
    }

    getNihs() {
        return fetch("/xml/nihList.xml")
            .then(res => res.text())
            .then(data => {
                let parser = new DOMParser();
                let xml = parser.parseFromString(data, "text/xml");

                Array.from(xml.querySelectorAll("item")).forEach((item, i) => {
                    let kcode = item.querySelector("ccbaKdcd").innerHTML;
                    let ccode = item.querySelector("ccbaCtcd").innerHTML;
                    let num = item.querySelector("ccbaAsno").innerHTML;

                    fetch(`/xml/detail/${kcode}_${ccode}_${num}.xml`)
                        .then(res => res.text())
                        .then(data => {
                            let parser = new DOMParser();
                            let xml = parser.parseFromString(data, "text/xml");

                            let item = xml.querySelector("item");

                            this.detail.push({
                                name: item.querySelector("ccbaMnm1").innerHTML.replace("<![CDATA[", "").replace("]]>", ""),
                                image: item.querySelector("imageUrl").innerHTML.replace("<![CDATA[", "").replace("]]>", ""),
                            });

                            return this.detail;
                        })
                });
            })
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