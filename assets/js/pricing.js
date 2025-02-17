function showMore(id) {

    const showMoreList = document.getElementById("showMoreList_" + id);
    const showMoreBtn = document.getElementById("showMoreBtn_" + id);

    if (showMoreList.classList.contains("d-none")) {
        showMoreList.classList.remove("d-none");
        showMoreBtn.innerHTML = '<i class="bi bi-chevron-double-up h6"></i>&nbsp;Less Features';
    } else {
        showMoreList.classList.add("d-none");
        showMoreBtn.innerHTML = '<i class="bi bi-chevron-double-down h6"></i>&nbsp;More Features';
    }
}

function triggerBtn(id) {

    document.getElementById('resultsView').innerHTML = '<div class="container px-md-5">' +
        '<div class="row">' +
        '<div class="col-12 d-flex justify-content-center">' +
        '<img src="assets/img/loading.gif" class="img-fluid" style="width: 150px !important;">' +
        '</div>' +
        '</div>' +
        '</div>';


    let buttons = document.querySelectorAll(".gradient-border-button");
    buttons.forEach(btn => btn.classList.remove("gradient-border-button-active"));
    let clickedBtn = document.getElementById(`triggerBtn_${id}`);
    if (clickedBtn) clickedBtn.classList.add("gradient-border-button-active");

    var r = new XMLHttpRequest();
    var formData = new FormData();
    formData.append("id", id);

    r.open("POST", "assets/process/loadpacks.php", true);
    r.onreadystatechange = function () {
        if (r.readyState === 4 && r.status === 200) {
            console.log(r.responseText);
            document.getElementById("resultsView").innerHTML = r.responseText;
            document.getElementById('resBox').scrollIntoView({
                behavior: 'smooth'
            });
        }
    };
    r.send(formData);
}

function triggerBtnOnload(id) {

    document.getElementById('resultsView').innerHTML = '<div class="container px-md-5">' +
        '<div class="row">' +
        '<div class="col-12 d-flex justify-content-center">' +
        '<img src="assets/img/loading.gif" class="img-fluid" style="width: 150px !important;">' +
        '</div>' +
        '</div>' +
        '</div>';


    let buttons = document.querySelectorAll(".gradient-border-button");
    buttons.forEach(btn => btn.classList.remove("gradient-border-button-active"));
    let clickedBtn = document.getElementById(`triggerBtn_${id}`);
    if (clickedBtn) clickedBtn.classList.add("gradient-border-button-active");

    var r = new XMLHttpRequest();
    var formData = new FormData();
    formData.append("id", id);

    r.open("POST", "assets/process/loadpacks.php", true);
    r.onreadystatechange = function () {
        if (r.readyState === 4 && r.status === 200) {
            console.log(r.responseText);
            document.getElementById("resultsView").innerHTML = r.responseText;
        }
    };
    r.send(formData);
}

