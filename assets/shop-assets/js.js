document.addEventListener("DOMContentLoaded", function () {
    const rightPanel = document.querySelector(".right");
    const dragHandle = document.querySelector(".drag-handle");

    let isOpen = false;

    dragHandle.addEventListener("click", function () {
        isOpen = !isOpen;
        rightPanel.classList.toggle("open", isOpen);
    });
});


function changeFeatures(id,uid) {
    var btn = document.getElementById('featureButton' + id);
    var btn2 = document.getElementsByName('select-btn'); // btn2 is a collection (array-like)

    // Loop through all elements with the name 'select-btn' and remove 'cb-active' from each
    btn2.forEach(element => {
        element.classList.remove('gradient-border-button-active');
        element.classList.add('gradient-border-button');
    });

    // Apply class changes to the clicked button
    // btn.classList.remove('gradient-border-button');
    btn.classList.add('gradient-border-button-active');

    // Show loading overlay
    document.getElementById('loadingOverlay').classList.remove('d-none');

    var xmlhttp = new XMLHttpRequest();  // Create a new XMLHttpRequest object
    var url = "changefeatures.php";      // The PHP file that will handle the request

    // Set up the HTTP request
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define what happens when the request is completed
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('results').innerHTML = xmlhttp.responseText;
            changeSideFeatures(id,uid);
        } else if (xmlhttp.readyState == 4) {
            console.log("Error: " + xmlhttp.status); // If there is an error
            document.getElementById('loadingOverlay').classList.add('d-none');
        }
    };

    // Send the request with the ID as a parameter
    xmlhttp.send("id=" + encodeURIComponent(id));
}

function changeSideFeatures(tid,uid) {

    var xmlhttp = new XMLHttpRequest();  // Create a new XMLHttpRequest object
    var url = "changesidefeatures.php";      // The PHP file that will handle the request

    // Set up the HTTP request
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define what happens when the request is completed
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('results_side').innerHTML = xmlhttp.responseText;
            document.getElementById('loadingOverlay').classList.add('d-none');
        } else if (xmlhttp.readyState == 4) {
            console.log("Error: " + xmlhttp.status); // If there is an error
            document.getElementById('loadingOverlay').classList.add('d-none');
        }
    };

    var params = "&uid=" + encodeURIComponent(uid) + "&tid=" + encodeURIComponent(tid);
    // Send the request with the ID as a parameter
    xmlhttp.send(params);
}


function addFeatures(uid, id, tid) {
    // Show loading overlay
    document.getElementById('loadingOverlay').classList.remove('d-none');

    var xmlhttp = new XMLHttpRequest();  // Create a new XMLHttpRequest object
    var url = "addfeatures.php";      // The PHP file that will handle the request

    // Prepare the request parameters
    var params = "id=" + encodeURIComponent(id) + "&uid=" + encodeURIComponent(uid) + "&tid=" + encodeURIComponent(tid);

    // Set up the HTTP request
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define what happens when the request is completed
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4) { // Check if the request is completed

            if (xmlhttp.status === 200) {
                if(xmlhttp.responseText=="ara"){
                    document.getElementById('loadingOverlay').classList.add('d-none');
                    Swal.fire({
                        text: "The feature has already been added.",
                        confirmButtonText: 'OK!',
                        customClass: {
                            confirmButton: 'th-btn',
                            htmlContainer: 'box-text2 fw-semibold mt-3',
                        }
                      });
                }else{
                    document.getElementById('results_side').innerHTML = xmlhttp.responseText;
                    document.getElementById('loadingOverlay').classList.add('d-none');
                }
                
            } else {
                // Error: log the error status
                console.error("Error: " + xmlhttp.status);
            }
        }
    };

    // Send the request with the ID and UID as parameters
    xmlhttp.send(params);
}

function removeFeatures(uid, id, tid) {
    // Show loading overlay
    document.getElementById('loadingOverlay').classList.remove('d-none');

    var xmlhttp = new XMLHttpRequest();  // Create a new XMLHttpRequest object
    var url = "removefeatures.php";      // The PHP file that will handle the request

    // Prepare the request parameters
    var params = "id=" + encodeURIComponent(id) + "&uid=" + encodeURIComponent(uid) + "&tid=" + encodeURIComponent(tid);

    // Set up the HTTP request
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define what happens when the request is completed
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4) { // Check if the request is completed

            if (xmlhttp.status === 200) {
                if(xmlhttp.responseText=='ara'){
                    document.getElementById('loadingOverlay').classList.add('d-none');
                    Swal.fire({
                        text: "The feature has already been removed.",
                        confirmButtonText: 'OK!',
                        customClass: {
                            confirmButton: 'th-btn',
                            htmlContainer: 'box-text2 fw-semibold mt-3',
                        }
                      });
                }else{
                    document.getElementById('results_side').innerHTML = xmlhttp.responseText;
                    document.getElementById('loadingOverlay').classList.add('d-none');
                }
                
            } else {
                // Error: log the error status
                console.error("Error: " + xmlhttp.status);
            }
        }
    };

    // Send the request with the ID and UID as parameters
    xmlhttp.send(params);
}


