<?php
session_start();
// Include your database connection file if necessary
require_once "db.php";

// Check if the ID is set in the request
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $result = Databases::Search("SELECT * FROM `features` WHERE `types_type_id` = '$id' ");

    for ($i = 1; $i <= $result->num_rows; $i++) {
        $row = $result->fetch_assoc();
?>
        <div class="col-6 col-lg-3 mt-3">
            <div class="card card-margine position-relative">
                <!-- "+" Button at Top Right -->
                <button class="btn btn-warning position-absolute top-0 end-0 m-2 rounded-circle d-flex justify-content-center align-items-center" onclick="addFeatures('<?php echo $_SESSION['user_id']; ?>','<?php echo $row['f_id']; ?>','<?php echo $row['types_type_id']; ?>');">+</button>

                <!-- Card content -->
                <div class="card-header border-0 bg-white d-flex justify-content-center align-items-center">
                    <img src="assets\img\card_img.svg" class="img-fluid" style="width: 100px;">
                </div>
                <div class="card-body pt-0">
                    <div class="widget-49">
                        <div class="widget-49-title-wrapper">
                            <div class="widget-49-meeting-info px-1 text-lg-center">
                                <p class="text-dark m-0 h5"><?php echo $row['f_name']; ?><i class="fa fa-check ms-2"></i></p>
                                <p class="box-text2 m-0">USD <?php echo $row['price']; ?></p>
                            </div>
                            <a class="custom-small-text mt-1 text-decoration-underline text-dark fw-bold px-1 div-hover" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $i; ?>">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?php echo $i; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered border-0">
                <div class="modal-content rounded-1 border-0">
                    <div class="modal-header border-0">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">CART<i class="fa fa-check ms-2"></i></h1>
                        <button type="button" class="btn text-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body border-0">
                        <?php echo $row['f_description']; ?>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="th-btn style4">Inquiry Now</button>
                        <button type="button" class="th-btn" onclick="addFeatures('<?php echo $_SESSION['user_id']; ?>','<?php echo $row['f_id']; ?>','<?php echo $row['types_type_id']; ?>');">Add</button>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
} else {
    echo "No ID provided.";
}
?>