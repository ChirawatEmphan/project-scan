<?php
// Retrieve the QR code data and meal type from the AJAX request
$qrData = $_POST['qrData'];
$mealType = $_POST['mealType'];

// TODO: Perform necessary validation and sanitization on the data
$qrData = sanitizeInput($qrData);
$mealType = sanitizeInput($mealType);

// Function to sanitize input data
function sanitizeInput($input) {
    // Perform necessary sanitization and validation
    $sanitizedInput = trim($input);
    $sanitizedInput = htmlspecialchars($sanitizedInput);
    // Additional sanitization/validation steps if needed
    return $sanitizedInput;
}

// Connect to your MySQL database
$servername = 'localhost';
$username = '';
$password = '';
$dbname = '';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$response = array();

// Update the table and column based on mealType
$tableName = '';
$statusColumn = '';

  
if ($mealType === 'morning') {
    $tableName = 'save_db_scan_2_1';
    $statusColumn = 'status_1';
} else if ($mealType === 'lunch') {
    $tableName = 'save_db_scan_2_2';
    $statusColumn = 'status_2';
} else if ($mealType === 'afternoon') {
    $tableName = 'save_db_scan_2_3';
    $statusColumn = 'status_3';
} else if ($mealType === 'register') {
    $tableName = 'save_db_scan_2_4';
    $statusColumn = 'status_4';
} else if ($mealType === 'banquet') {
    $tableName = 'save_db_scan_2_5';
    $statusColumn = 'status_5';
}
// Check if the status is already 'ได้รับอาหารแล้ว' in the respective table
if (!empty($tableName) && !empty($statusColumn) ) {
    $checkStmt = $conn->prepare("SELECT $statusColumn FROM $tableName WHERE qr_data = ?");
    $checkStmt->bind_param('s', $qrData);
    $checkStmt->execute();
    $checkStmt->bind_result($status);
    $checkStmt->fetch();
    $checkStmt->close();
// Check if qrData exists in the database
$checkExistsStmt = $conn->prepare("SELECT COUNT(*) FROM $tableName WHERE qr_data = ?");
$checkExistsStmt->bind_param('s', $qrData);
$checkExistsStmt->execute();
$checkExistsStmt->bind_result($count);
$checkExistsStmt->fetch();
$checkExistsStmt->close();

if ($count === 0) {
    $response['success'] = false;
    $response['statusUpdated'] = false;
    // Return the JSON response and exit
    $conn->close();
    exit(json_encode($response));
}

        if ($status === 'ได้รับอาหารแล้ว') {
            $response['success'] = true;
            $response['statusUpdated'] = false;
        } else {
        // Update the status column in the respective table
        $updateStmt = $conn->prepare("UPDATE $tableName SET $statusColumn = 'ได้รับอาหารแล้ว' WHERE qr_data = ?");
        $updateStmt->bind_param('s', $qrData);
        $updateResult = $updateStmt->execute();

        if ($updateResult) {
            $response['success'] = true;
            $response['statusUpdated'] = true;

            // Retrieve the name from the respective table
            $nameStmt = $conn->prepare("SELECT name FROM $tableName WHERE qr_data = ?");
            $nameStmt->bind_param('s', $qrData);
            $nameStmt->execute();
            $nameStmt->bind_result($name);
            $nameStmt->fetch();
            $nameStmt->close();
            
              // Add the name to the response
              $response['name'] = $name;
        } else {
            $response['success'] = false;
            $response['statusUpdated'] = false;
        }

        $updateStmt->close();
    }
} else {
        // Invalid meal type
        $response['success'] = false;
        $response['statusUpdated'] = false;
        // Return the JSON response and exit
        $conn->close(); // ปิดการเชื่อมต่อฐานข้อมูลก่อน
        exit(json_encode($response)); // สิ้นสุดการทำงานและส่ง JSON response ตรงนี้
}

// Return the JSON response
header('Content-Type: application/json');
echo json_encode($response);

// Close the database connection
$conn->close();
?>