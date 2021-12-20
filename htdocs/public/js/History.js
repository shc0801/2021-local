class App {
    constructor() {
        this.init();
    }

    init() {
        this.tabs = localStorage.tabs == null ? "" : localStorage.tabs;
        this.datas = localStorage.datas == null ? {} : JSON.parse(localStorage.datas);
        this.years = Object.keys(this.datas).sort((a, b) => b - a);

        
        if(this.tabs != "") {
            this.render();
        } else if(this.years.length != 0) {
            this.tabs = this.years[0];
            localStorage.tabs = this.years[0];
            this.render();
        }
        
        this.addEvent();
    }

    render() {
        console.log(this.tabs, this.datas, this.years)
        $(".tabs").html("");
        $(".title").html(`${this.tabs}년`);
        $(".history").html(`<div class="t-head">
                                <div class="cell-15">등록날짜</div>
                                <div class="cell-60">이름</div>
                                <div class="cell-25">수정 / 삭제</div>
                            </div>`);

        this.drawTable();
        this.drawTab();
        this.addEvent();
    }
    
    drawTable() {
        this.datas[this.tabs].forEach((item, i) => {
            $(".history").append(`  <div class="t-row">
                                        <div class="cell-15">${item.year}. ${item.month}. ${item.day}</div>
                                        <div class="cell-60">${item.content}</div>
                                        <div class="cell-25">
                                            <button data-id="${i}" data-toggle="modal" data-target="#update" class="brown-btn update-btn mr-1">수정</button>
                                            <button data-id="${i}" class="brown-btn delete-btn">삭제</button>
                                        </div>
                                    </div>`);
        })
    }
    
    drawTab() {
        console.log(this.years);
        this.years.forEach(item => {
            $(".tabs").append(`<button data-year=${item} class="tab ${item == this.tabs ? "btn-filled" : ""} col-lg-3 brown-btn text-center border">${item}년</button>`)
        })
    }

    addEvent() {
        $("#write").off().on("submit", e => {
            e.preventDefault();

            let content = $("#write_content").val();
            let date = $("#write_date").val();

            let year = date.split("-")[0];
            let month = date.split("-")[1];
            let day = date.split("-")[2];
            
            if(this.datas[year] == undefined) {
                this.datas[year] = [];
            }
            
            this.datas[year].push({
                date: date,
                year: year,
                month: month,
                day: day,
                content: content
            });

            localStorage.datas = JSON.stringify(this.datas);
            localStorage.tabs = year;

            alert("등록되었습니다.");

            location.reload();
        });

        $("#update").off().on("submit", e => {
            e.preventDefault();

            let id = $("#id").val();
            let content = $("#update_content").val();
            let date = $("#update_date").val();

            let year = date.split("-")[0];
            let month = date.split("-")[1];
            let day = date.split("-")[2];
            
            if(this.datas[year] == undefined) {
                this.datas[year] = [];
            }
            
            if(year == this.tabs) {
                this.datas[this.tabs][id] = ({
                    date: date,
                    year: year,
                    month: month,
                    day: day,
                    content: content
                });
            } else {
                this.delete(id);
                
                this.datas[year].push({
                    date: date,
                    year: year,
                    month: month,
                    day: day,
                    content: content
                });
            }
            console.log(this.datas[2020]);
            localStorage.datas = JSON.stringify(this.datas);

            alert("수정되었습니다.");

            location.reload();
        })

        $("#history").find(".update-btn").off().on("click", e => {
            let id = e.target.dataset.id;
            $("#id").val(id);
            $("#update_content").val(this.datas[this.tabs][id].content);
            $("#update_date").val(this.datas[this.tabs][id].date);
        })
        
        $("#history").find(".delete-btn").off().on("click", e => {
            let id = e.target.dataset.id;
            
            if(confirm("정말 삭제하시겠습니까?")) {
                this.delete(id);

                localStorage.datas = JSON.stringify(this.datas);

                alert("삭제되었습니다.");

                location.reload();
            }
        })

        $("#history").find(".tab").off().on("click", e => {
            this.tabs = e.target.dataset.year;
            localStorage.tabs = e.target.dataset.year;

            document.querySelectorAll(".tab").forEach(item => item.classList.remove("btn-filled"))
            e.target.classList.add("btn-filled");

            this.render();
        })
    }

    delete(id) {
        this.datas[this.tabs].splice(id, 1);
        if(this.datas[this.tabs].length == 0) {
            delete this.datas[this.tabs];
            delete localStorage.tabs;
        }
    }
}

window.onload = () => {
    let app = new App();
}

location.getQueryString = function() {
    let search = this.search;
    if(search == "") return {};
    else {
        return search.split("&").reduce((p, c) => {
            let [key, value] = c.split("=");
            p[key] = value;
            return p;
        }, {});
    }
}