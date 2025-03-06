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

function submitVisitRequest() {
    // Get form values
    var fullName = document.getElementById('fullName').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var businessName = document.getElementById('businessName').value;
    var message = document.getElementById('message').value;

    // Validate required fields (basic validation)
    if (!fullName || !email || !phone || !businessName || !message) {
        Swal.fire('Error', 'All fields are required!', 'error');
        return;
    }

    // Prepare form data to send
    var formData = new FormData();
    formData.append('fullName', fullName);
    formData.append('email', email);
    formData.append('phone', phone);
    formData.append('businessName', businessName);
    formData.append('message', message);

    // Get button element
    var submitButton = document.getElementById('th-btn');

    // Change button text to show spinner
    submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'req_a_vist.php', true);

    // Handle response
    xhr.onload = function () {
        if (xhr.status === 200) {
            // If everything is OK
            var responseT = xhr.responseText;
            if (responseT === 'success') {
                Swal.fire('Success', 'Your request has been submitted!', 'success');
            } else {
                Swal.fire(responseT);
            }

            // Reset the button text to original
            submitButton.innerHTML = 'Request a Visit <i class="fa-regular fa-arrow-right ms-2"></i>';
        } else {
            // Handle server error
            Swal.fire('Error', 'Something went wrong. Please try again later.', 'error');

            // Reset the button text to original
            submitButton.innerHTML = 'Request a Visit <i class="fa-regular fa-arrow-right ms-2"></i>';
        }
    };

    // Send the request with form data
    xhr.send(formData);
}

function addToCart(id) {

    var xmlhttp = new XMLHttpRequest();  // Create a new XMLHttpRequest object
    var url = "assets/process/addtocart.php";      // The PHP file that will handle the request

    // Prepare the request parameters
    var params = "id=" + encodeURIComponent(id);

    // Set up the HTTP request
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4) { // Check if the request is completed

            if (xmlhttp.status === 200) {
                if (xmlhttp.responseText == "success") {
                    Swal.fire({
                        text: "Package has been added to the cart.",
                        showCancelButton: true,
                        confirmButtonText: 'OK',
                        cancelButtonText: 'Go to Cart',
                        customClass: {
                            confirmButton: 'th-btn style4',
                            cancelButton: 'th-btn', // Optional: Add a custom class for the "Go to Cart" button
                            htmlContainer: 'box-text2 fw-semibold mt-3',
                        }
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.cancel) {
                            // Redirect to cart.php when "Go to Cart" button is clicked
                            window.location.href = 'cart.php';
                        }
                    });


                } else if ("aa") {
                    Swal.fire({
                        text: "Package has been already added.",
                        showCancelButton: true,
                        confirmButtonText: 'OK',
                        cancelButtonText: 'Go to Cart',
                        customClass: {
                            confirmButton: 'th-btn style4',
                            cancelButton: 'th-btn', // Optional: Add a custom class for the "Go to Cart" button
                            htmlContainer: 'box-text2 fw-semibold mt-3',
                        }
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.cancel) {
                            // Redirect to cart.php when "Go to Cart" button is clicked
                            window.location.href = 'cart.php';
                        }
                    });

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

function getAQ(id) {

    var uname = document.getElementById('uname').value;
    var umobile = document.getElementById('umobile').value;
    var uemail = document.getElementById('uemail').value;

    // Validate required fields (basic validation)
    if (!uname || !umobile || !uemail) {
        Swal.fire({
            text: "All fields are required.",
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'th-btn style4',
                htmlContainer: 'box-text2 fw-semibold mt-3',
            }
        })
    }

    // Prepare form data to send
    var formData = new FormData();
    formData.append('uname', uname);
    formData.append('umobile', umobile);
    formData.append('uemail', uemail);
    formData.append('uid', id);

    // Get button element
    var submitButton = document.getElementById('th-btnq');

    // Change button text to show spinner
    submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'addquot.php', true);

    // Handle response
    xhr.onload = function () {
        if (xhr.status === 200) {
            // If everything is OK
            var responseT = xhr.responseText;
            if (responseT === 'success') {
                Swal.fire({
                    text: "Your request was received successfully. Our team will reach out to you shortly.",
                    allowOutsideClick: false,
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'th-btn style4',
                        htmlContainer: 'box-text2 text-success fw-semibold mt-3',
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            } else {
                Swal.fire({
                    text: responseT,
                    allowOutsideClick: false,
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'th-btn style4',
                        htmlContainer: 'box-text2 fw-semibold mt-3',
                    }
                });
            }

            submitButton.innerHTML = 'Send&nbsp;<i class="fa fa-credit-card-alt ms-2"></i>';
        } else {
            Swal.fire('Error', 'Something went wrong. Please try again later.', 'error');

            submitButton.innerHTML = 'Send&nbsp;<i class="fa fa-credit-card-alt ms-2"></i>';
        }
    };

    // Send the request with form data
    xhr.send(formData);

}

function applyCoupon(total) {

    var xmlhttp = new XMLHttpRequest();  // Create a new XMLHttpRequest object
    var url = "assets/process/couponprocess.php";      // The PHP file that will handle the request
    var id = document.getElementById("c_code").value;
    // Prepare the request parameters
    var params = "id=" + encodeURIComponent(id) + "&total=" + encodeURIComponent(total);


    // Set up the HTTP request
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4) { // Check if the request is completed

            if (xmlhttp.status === 200) {
                if (xmlhttp.responseText == "success") {
                    location.reload();
                } else if (xmlhttp.responseText == "em") {
                    Swal.fire({
                        text: "Please Enter the Coupon Code.",
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'th-btn',
                            htmlContainer: 'box-text2 fw-semibold mt-3',
                        }
                    })

                } else if (xmlhttp.responseText == "au") {
                    Swal.fire({
                        text: "Coupon Limit Exceeded.",
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'th-btn',
                            htmlContainer: 'box-text2 fw-semibold mt-3',
                        }
                    })

                } else if (xmlhttp.responseText == "ex") {
                    Swal.fire({
                        text: "Sorry! Coupon Code has been Expired or Invalid.",
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'th-btn',
                            htmlContainer: 'box-text2 fw-semibold mt-3',
                        }
                    })

                } else if (xmlhttp.responseText == "ot") {
                    Swal.fire({
                        text: "Please add Packages to the Cart First.",
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'th-btn',
                            htmlContainer: 'box-text2 fw-semibold mt-3',
                        }
                    })

                } else {
                    Swal.fire({
                        text: xmlhttp.responseText,
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'th-btn',
                            htmlContainer: 'box-text2 fw-semibold mt-3',
                        }
                    })
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

function removeFromCart(id, total) {

    var xmlhttp = new XMLHttpRequest();  // Create a new XMLHttpRequest object
    var url = "assets/process/removefromcart.php";      // The PHP file that will handle the request

    // Prepare the request parameters
    var params = "id=" + encodeURIComponent(id) + "&total=" + encodeURIComponent(total);

    // Set up the HTTP request
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4) { // Check if the request is completed

            if (xmlhttp.status === 200) {
                if (xmlhttp.responseText == "success") {
                    location.reload();
                } else {
                    alert(xmlhttp.responseText);
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

function removeCoupon(id) {

    var xmlhttp = new XMLHttpRequest();  // Create a new XMLHttpRequest object
    var url = "assets/process/removecoupon.php";      // The PHP file that will handle the request

    // Prepare the request parameters
    var params = "id=" + encodeURIComponent(id);

    // Set up the HTTP request
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4) { // Check if the request is completed

            if (xmlhttp.status === 200) {
                if (xmlhttp.responseText == "success") {
                    location.reload();
                } else {
                    alert(xmlhttp.responseText);
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

function sendMessage() {
    // Get form values
    const fullName = document.getElementById('fname').value;
    const email = document.getElementById('fmail').value;
    const message = document.getElementById('fmessage').value;

    // Validate required fields (basic validation)
    if (!fullName || !email || !message) {
        Swal.fire('Error', 'All fields are required!', 'error');
        return;
    }

    // Prepare form data to send
    var formData = new FormData();
    formData.append('fullName', fullName);
    formData.append('email', email);
    formData.append('message', message);

    // Get button element
    var submitButton = document.getElementById('thh-btn');

    // Change button text to show spinner
    submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'sendmessage.php', true);

    // Handle response
    xhr.onload = function () {
        if (xhr.status === 200) {
            // If everything is OK
            var responseT = xhr.responseText;
            if (responseT === 'success') {
                Swal.fire('Success', 'Your request has been submitted!', 'success');
            } else {
                Swal.fire(responseT);
            }

            // Reset the button text to original
            submitButton.innerHTML = 'Get in Touch<i class="fa-regular fa-arrow-right ms-2"></i>';
        } else {
            // Handle server error
            Swal.fire('Error', 'Something went wrong. Please try again later.', 'error');

            // Reset the button text to original
            submitButton.innerHTML = 'Get in Touch<i class="fa-regular fa-arrow-right ms-2"></i>';
        }
    };

    // Send the request with form data
    xhr.send(formData);
}

function sendEBook(rbook) {
    // Get form values
    const firstname = document.getElementById('firstname').value;
    const lastname = document.getElementById('lastname').value;
    const workEmail = document.getElementById('workEmail').value;
    const companyName = document.getElementById('companyName').value;
    const mobileNumber = document.getElementById('mobileNumber').value;

    // Validate required fields (basic validation)
    if (!firstname || !lastname || !workEmail || !companyName || !mobileNumber) {
        Swal.fire('Error', 'All fields are required!', 'error');
        return;
    }

    // Prepare form data to send
    var formData = new FormData();
    formData.append('rbook', rbook);
    formData.append('firstname', firstname);
    formData.append('lastname', lastname);
    formData.append('workEmail', workEmail);
    formData.append('companyName', companyName);
    formData.append('mobileNumber', mobileNumber);

    // Get button element
    var submitButton = document.getElementById('thh-btn');

    // Change button text to show spinner
    submitButton.innerHTML = '<div class="spinner-border text-light" role="status"><span class="visually-hidden"></span></div>';

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'sendebook.php', true);

    // Handle response
    xhr.onload = function () {
        if (xhr.status === 200) {
            // If everything is OK
            var responseT = xhr.responseText;
            if (responseT === 'success') {
                Swal.fire('Success', 'Done! Please check your Email.', 'success');
                submitButton.style.backgroundColor = '#FF5C35'; // Change button color
            } else {
                Swal.fire(responseT);
            }

            // Reset the button text to original
            submitButton.innerHTML = 'Get in Touch<i class="fa-regular fa-arrow-right ms-2"></i>';
        } else {
            // Handle server error
            Swal.fire('Error', 'Something went wrong. Please try again later.', 'error');

            // Reset the button text to original
            submitButton.innerHTML = 'Get in Touch<i class="fa-regular fa-arrow-right ms-2"></i>';
        }

    };

    // Send the request with form data
    xhr.send(formData);
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

let CatID = 0;

function changeCategory(event, id) {

    const buttons = document.querySelectorAll('.tagcloud a');
    const listItems = document.querySelectorAll('ul li a');

    buttons.forEach(button => {
        button.classList.remove('bg-orange');
    });
    listItems.forEach(button => {
        button.classList.remove('bg-orange');
    });

    const clickedButton = Array.from(buttons).find(button => {
        return button.getAttribute('data-id') == id;
    });

    if (clickedButton) {
        clickedButton.classList.add('bg-orange');
    }

    const listButton = Array.from(listItems).find(button => {
        return button.getAttribute('data-id') == id;
    });

    if (listButton) {
        listButton.classList.add('bg-orange');
    }

    CatID = id;

    var r = new XMLHttpRequest();
    var formData = new FormData();
    formData.append("id", id);

    r.open("POST", "assets/process/blogchange.php", true);
    r.onreadystatechange = function () {
        if (r.readyState === 4 && r.status === 200) {
            document.getElementById("resultsView").innerHTML = r.responseText;
            document.getElementById('top').scrollIntoView({
                behavior: 'smooth'
            });
        }
    };
    r.send(formData);

}

function toggleReadMore(id) {
    const blogDesc = document.getElementById('blogDesc' + id);
    const readMoreBtn = document.getElementById('readMoreBtn' + id);

    // If the text is currently truncated, reveal the full text
    if (blogDesc.classList.contains('truncate')) {
        blogDesc.classList.remove('truncate');
        readMoreBtn.innerHTML = 'Read Less <i class="fa-regular fa-arrow-right ms-2"></i>';
    } else {
        // If the text is full, truncate it back to 3 lines
        blogDesc.classList.add('truncate');
        readMoreBtn.innerHTML = 'Read More <i class="fa-regular fa-arrow-left ms-2"></i>';
    }
}


function blogPagination(id) {

    var r = new XMLHttpRequest();
    var formData = new FormData();
    formData.append("id", id);
    formData.append("catid", CatID);

    r.open("POST", "assets/process/blogpagination.php", true);
    r.onreadystatechange = function () {
        if (r.readyState === 4 && r.status === 200) {
            document.getElementById("resultsView").innerHTML = r.responseText;
            document.getElementById('top').scrollIntoView({
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

