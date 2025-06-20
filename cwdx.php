<?php
require 'db.php';

$searchTerm = isset($_GET['search']) ? trim($_GET['search']) : "";

$sql = "SELECT * FROM pack INNER JOIN solution ON solution.sol_id = pack.solution_sol_id";
$params = [];
$types = "";

if (!empty($searchTerm)) {
    $sql .= " WHERE solution.sol_name LIKE ?";
    $params[] = "%" . $searchTerm . "%";
    $types = "s";
}

$results = Databases::Search($sql, $params, $types);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editable Pack Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .editable-input {
            width: 100px;
        }
    </style>
</head>
<body>
<div class="container py-4">
    <h2 class="mb-4 text-success fw-bold text-uppercase text-center">Pack & Solution Editor</h2>

    <!-- Search Form -->
    <form method="get" class="row g-3 mb-3 d-flex justify-content-end">
        <div class="col-md-4 d-flex justify-content-end">
            <input type="text" name="search" class="form-control" placeholder="Search by Solution Name..." value="<?= htmlspecialchars($searchTerm) ?>">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-outline-primary w-100">Search</button>
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button class="btn btn-success mt-3" id="saveBtn">SAVE CHANGES</button>
        </div>
    </form>

    <!-- Editable Table -->
    <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
            <thead class="table-primary">
                <tr>
                    <th>Pack ID</th>
                    <th>Solution</th>
                    <th>Pack Name</th>
                    <!-- <th>Pack Desc</th> -->
                    
                    <th class="text-decoration-line-through">Before Price</th>
                    <th>Pack Price</th>
                    <!-- <th>AUD</th> -->
                    <th>Sol ID</th>
                    
                    <!-- <th>Sol Desc</th> -->
                </tr>
            </thead>
            <tbody>
                <?php if ($results && $results->num_rows > 0): ?>
                    <?php while ($row = $results->fetch_assoc()): ?>
                        <tr data-pack-id="<?= $row['pack_id'] ?>">
                            <td><?= $row['pack_id'] ?></td>
                            <td><?= htmlspecialchars($row['sol_name']) ?></td>
                            <td><?= htmlspecialchars($row['pack_name']) ?></td>
                            <!-- <td><?= htmlspecialchars($row['pack_desc']) ?></td> -->
                             <td>
                                <input type="number" step="0.01" class="form-control editable-input pack-before-price" value="<?= $row['pack_before_price'] ?>">
                            </td>
                            <td>
                                <input type="number" step="0.01" class="form-control editable-input pack-price" value="<?= $row['pack_price'] ?>">
                            </td>
                            
                            <!-- <td><?= htmlspecialchars($row['aud']) ?></td> -->
                            <td><?= $row['sol_id'] ?></td>
                            
                            <!-- <td><?= htmlspecialchars($row['sol_desc']) ?></td> -->
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9" class="text-danger fw-bold">No data found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    
</div>

<!-- Bootstrap 5 JS + jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $("#saveBtn").on("click", function (event) {
    event.preventDefault(); // ← stops form submission

    const password = prompt("Enter password to save changes:");
    if (password !== "hix") {
        alert("Wrong password!");
        return;
    }

    let updatedRows = [];

    $("tr[data-pack-id]").each(function () {
        const row = $(this);
        const packId = row.data("pack-id");
        const newPrice = row.find(".pack-price").val();
        const newBeforePrice = row.find(".pack-before-price").val();

        const originalPrice = row.find(".pack-price")[0].defaultValue;
        const originalBeforePrice = row.find(".pack-before-price")[0].defaultValue;

        if (newPrice !== originalPrice || newBeforePrice !== originalBeforePrice) {
            updatedRows.push({
                pack_id: packId,
                pack_price: newPrice,
                pack_before_price: newBeforePrice
            });
        }
    });

    if (updatedRows.length === 0) {
        alert("No changes detected.");
        return;
    }

    $.ajax({
        url: "assets/process/update_prices.php",
        method: "POST",
        contentType: "application/json",
        data: JSON.stringify({ rows: updatedRows }),
        success: function (response) {
            console.log("Success response:", response); // for debugging
            alert(response);
            location.reload();
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error); // for debugging
            alert("Failed to update. Please try again.");
        }
    });
});

</script>
</body>
</html>
