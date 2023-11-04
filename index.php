<!-- index.php -->
<!DOCTYPE html>
<html>

<head>
    <title>2023</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/cozmo/jsQR/master/dist/jsQR.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Style for the camera container */
        #cameraContainer {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 20vh;
            top: 0;
            /* เพิ่มคุณสมบัติ top: 0 เพื่อเลื่อนขึ้นไปด้านบน */
        }

        /* Style for the video element */
        #videoElement {
            border: 2px solid #000;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 350px;
            height: 350px;
            position: absolute;
            top: 0;
            /* เพิ่มคุณสมบัติ top: 0 เพื่อเลื่อนขึ้นไปด้านบน */
            left: 50%;
            margin-top: -100px;
            margin-left: -170px;
            transform: scale(1);
        }

        @media (max-width: 767px) {
            #videoElement {
                object-fit: cover;
                /* Make the video fill the container while maintaining aspect ratio */
            }
        }

        /* เพิ่มคอนเทนเนอร์เพื่อจัดกลางและความสูงเต็มจอ */
        #contentContainer {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;

        }

        @import url('https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700');

        html {
            font-family: 'Poppins', sans-serif;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn {
            padding: 1em 2.1em 1.1em;
            border-radius: 3px;
            margin: 8px 8px 8px 8px;
            color: #fbdedb;
            background-color: #fbdedb;
            display: inline-block;
            background: #e74c3c;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
            font-family: sans-serif;
            font-weight: 800;
            font-size: .85em;
            text-transform: uppercase;
            text-align: center;
            text-decoration: none;
            -webkit-box-shadow: 0em -0.3rem 0em rgba(0, 0, 0, 0.1) inset;
            -moz-box-shadow: 0em -0.3rem 0em rgba(0, 0, 0, 0.1) inset;
            box-shadow: 0em -0.3rem 0em rgba(0, 0, 0, 0.1) inset;
            position: relative;
        }

        .btn:hover,
        .btn:focus {
            opacity: 0.8;
        }

        .btn:active {
            -webkit-transform: scale(0.80);
            -moz-transform: scale(0.80);
            -ms-transform: scale(0.80);
            -o-transform: scale(0.80);
            transform: scale(0.80);
        }

        .btn.block {
            display: block !important;
        }

        .btn.circular {
            border-radius: 50em !important;
        }

        /* Colours */
        .orange {
            background-color: #e96633;
        }

        .green {
            background-color: #5bbd72;
        }

        .purple {
            background-color: #564f8a;
        }

        .pink {
            background-color: #f41476;
        }

        .blue {
            background-color: #58b5b5;
        }
        .yellow {
            background-color: #f0b15d;
        }
        /* Responsive */
        @media (max-width: 767px) {
            .btn-container {
                flex-wrap: wrap;
            }

            .btn {
                flex: 0 0 100%;
            }
        }

        .h2 {
            font-size: 3em;
            text-align: center;
            font-weight: bold;
        }

        @media (max-width: 767px) {
            .h2 {
                font-size: 1.3em;
            }
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .form-group {
            flex: 0 0 26%;
            /* ปรับขนาดของกล่อง input ตามความต้องการ */
            margin-bottom: 10px;
        }
    </style>
</head>

<body style="background: linear-gradient(90deg, rgba(47,228,62,0.5523459383753502) 34%, rgba(255,188,0,0.7820378151260504) 100%);">
    <div class="container">
        <div class="row">
            <!-- <div class="col-sm">
      <img style="width: 20%; height: auto; float: right;" src="images/nu.png" class="rounded" alt="...">
    </div> -->
            <div class="col-sm">
                <img style="width: 30%; height: auto; float: right;" src="images/logo.png" class="rounded" alt="...">
            </div>
            <!-- <div class="col-sm">
      <img style="width: 20%; height: auto; float: right;" src="images/20.png" class="rounded" alt="...">
    </div>
    <div class="col-sm">
      <img style="width: 50%; height: auto; float: right;" src="images/t2f.png" class="rounded" alt="...">
    </div> -->
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-auto">
                <p class="h2"> Scanning QrCode to Receive Food <img width="10%" src="images/qrcode.png"> </p>
                <p style="text-decoration: underline;" class="h2">29 June 2023</p> <br>
                <hr>

                <div class="btn-container">
                    <button id="btnRegister" class="btn pink circular">Register</button> <br>
                    <button id="btnMorning" class="btn orange circular">Morning Break</button> <br>
                    <button id="btnLunch" class="btn green circular">Lunch</button> <br>
                    <button id="btnAfternoon" class="btn purple circular">Afternoon Break</button> <br>
                    <button id="btnBanquet" class="btn yellow circular">Banquet</button>

                </div>
                <hr>
                <form method="POST" id="myForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputCity"><b>ID Card</b></label>
                            <input style=" border-radius: 20px;" type="text" class="form-control" id="inputCity" name="inputCity" required>
                        </div>
                        <div class="form-group">
                            <label for="inputState"><b>Type</b></label>
                            <select style="width: 130%; border-radius: 20px;" id="inputState" class="form-control" name="inputState">
                                <option selected disabled>Choose...</option>
                                <option value="register">Register</option>
                                <option value="morning">Morning Break</option>
                                <option value="lunch">Lunch</option>
                                <option value="afternoon">Afternoon Break</option>
                                <option value="banquet">Banquet</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputZip"></label>
                            <button type="submit" class="btn blue circular" id="submitButton">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <!-- Container to display the camera feed -->
        <div id="cameraContainer" class="row justify-content-center mt-5" style="display: none;">
            <div class="col-auto">
                <video id="videoElement" autoplay></video>
            </div>
        </div>
    </div>
    <script>
        // Handle form submission
        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault(); // ป้องกันฟอร์มไม่ให้ส่งข้อมูล

            var idCard = document.getElementById('inputCity').value;
            var mealType = document.getElementById('inputState').value;

            // สร้างอ็อบเจกต์ XMLHttpRequest
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_qr4.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // ตั้งค่า callback function เมื่อการร้องขอ AJAX เสร็จสิ้น
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);

                    if (response.success) {
                        if (response.statusUpdated) {
                            Swal.fire({
                                title: '<strong>Success</strong>',
                                html: '<br> Registered',
                                footer: response.name,
                                icon: 'success'
                            }).then(() => {
                                window.location.href = 'index.php';
                            });
                        } else {
                            // Show success message for existing status
                            Swal.fire(
                                'Fail',
                                'Failed to register !',
                                'error'
                            ).then(() => {
                                window.location.href = 'index.php';
                            });
                        }
                    } else {
                        Swal.fire(
                            'Error',
                            'No Data !',
                            'warning'
                        ).then(() => {
                            window.location.href = 'index.php';
                        });
                    }
                }
            };

            // สร้างสตริงข้อมูลที่จะส่งไปยังเซิร์ฟเวอร์
            var data = 'inputCity=' + encodeURIComponent(idCard) + '&inputState=' + encodeURIComponent(mealType);

            // ส่งคำขอ AJAX
            xhr.send(data);
        });
    </script>
    <script>
        // Function to handle QR code scanning
        function scanQRCode(mealType) {
            // Get the camera container element
            var cameraContainer = document.getElementById('cameraContainer');

            // Get the video element
            var video = document.getElementById('videoElement');

            // Get the button elements
            var btnMorning = document.getElementById('btnMorning');
            var btnLunch = document.getElementById('btnLunch');
            var btnAfternoon = document.getElementById('btnAfternoon');
            var btnRegister = document.getElementById('btnRegister');

            // Check if the camera is already open
            if (cameraContainer.style.display === 'flex') {
                // Hide the camera container
                cameraContainer.style.display = 'none';
                // Stop the video stream
                var stream = video.srcObject;
                var tracks = stream.getTracks();
                tracks.forEach(function(track) {
                    track.stop();
                });

                // Exit full screen mode
                document.exitFullscreen();

                // Reset button text
                btnMorning.textContent = 'Morning Break';
                btnLunch.textContent = 'Lunch';
                btnAfternoon.textContent = 'Afternoon Break';
                btnRegister.textContent = 'Register';
                btnBanquet.textContent = 'Banquet';

                // Remove the zoomed class from the video element

                return;
            }

            // Request access to the camera
            navigator.mediaDevices.getUserMedia({
                    video: {
                        facingMode: 'environment'
                    }
                })
                .then(function(stream) {
                    // Show the camera container and set full screen
                    video.setAttribute("playsinline", true);
                    cameraContainer.style.display = 'flex';

                    // Display the camera feed in the video element
                    video.srcObject = stream;

                    // Update button text based on meal type
                    if (mealType === 'morning') {
                        btnMorning.textContent = 'Morning Break (Scanning...)';
                    } else if (mealType === 'lunch') {
                        btnLunch.textContent = 'Lunch (Scanning...)';
                    } else if (mealType === 'afternoon') {
                        btnAfternoon.textContent = 'Afternoon Break (Scanning...)';
                    } else if (mealType === 'register') {
                        btnRegister.textContent = 'Register (Scanning...)';
                    } else if (mealType === 'banquet') {
                        btnBanquet.textContent = 'Banquet (Scanning...)';
                    }
                    // Create canvas element to capture image frame
                    var canvas = document.createElement('canvas');
                    var context = canvas.getContext('2d');
                    var qrResult = null;

                    // Function to process captured image frame
                    function processImage() {
                        // Draw video frame onto the canvas
                        context.drawImage(video, 0, 0, canvas.width, canvas.height);

                        // Get the image data from the canvas
                        var imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                        var code = jsQR(imageData.data, imageData.width, imageData.height);

                        if (code && code.data) {
                            // QR code is scanned, get the value
                            qrResult = code.data;

                            // Check if the status is already 'ได้รับอาหารแล้ว' in the respective table
                            $.post('save_qr3.php', {
                                qrData: qrResult,
                                mealType: mealType
                            }, function(response) {
                                if (response.success) {
                                    if (response.statusUpdated == true) {
                                        // Show success message for updating status                             
                                        Swal.fire({
                                            title: '<strong>Success</strong>',
                                            html: '<br> Registered',
                                            footer: response.name,
                                            icon: 'success'
                                        }).then(() => {
                                            window.location.href = 'index.php';
                                            // Close the camera
                                            scanQRCode(mealType);
                                        });

                                    } else {
                                        // Show success message for existing status
                                        Swal.fire(
                                            'Fail',
                                            'Failed to register !',
                                            'error'
                                        ).then(() => {
                                            window.location.href = 'index.php';
                                            // Close the camera
                                            scanQRCode(mealType);
                                        });
                                    }
                                } else {
                                    Swal.fire(
                                        'Error',
                                        'No Data !',
                                        'warning'
                                    ).then(() => {
                                        window.location.href = 'index.php';
                                        // Close the camera
                                        scanQRCode(mealType);
                                    });
                                }
                            });
                        } else {
                            // QR code is not found, try again
                            setTimeout(processImage, 100);
                        }
                    }

                    // Process the captured image frames
                    processImage();
                })
                .catch(function(error) {
                    console.error('Unable to access the camera.', error);
                });
        }


        // Attach click event handlers to the buttons
        $('#btnMorning').click(function() {
            scanQRCode('morning');
        });

        $('#btnLunch').click(function() {
            scanQRCode('lunch');
        });
        $('#btnAfternoon').click(function() {
            scanQRCode('afternoon');
        });
        $('#btnRegister').click(function() {
            scanQRCode('register');
        });
        $('#btnBanquet').click(function() {
            scanQRCode('banquet');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>