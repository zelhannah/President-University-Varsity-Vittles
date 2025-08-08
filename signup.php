<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PresUniverse</title>
  <link rel="stylesheet" href="register.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <style>
        .register-link p a:hover {
            text-decoration: underline;
        }  
        .error-message {
            color: red;
            margin-top: 5px;
        }
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
 
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
   
}


body {
    display: flex;
    justify-content: center ;
    align-items: center;
    min-height: 100vh; 
    background: #4B0303;
    background: url('bg2.jpg') no-repeat;
    background-size: cover;
    background-position: center ;
}
.wrapper{
    width: 420px;
    background:white;
    border: 2px solid black;
    backdrop-filter: blur(20px);
    color: black;
    border-radius: 10px;
    padding: 30px 40px; 
}


.wrapper h1{
    font-size: 36px;
    text-emphasis: center; 
}


.wrapper .input-box{
    position: relative; 
    width: 100%;
    height: 50px;

margin: 30px 0; 
}


.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    font-size: 16px;
    color: black; 
    padding: 20px 45px 20px 20px; 
    


   
    border: 2px solid black;
    border-radius: 40px;
}


.input-box input::placeholder{
color: black;
}



.input-box i{
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}




.wrapper button{
    width: 100%;
    height: 45px;
    background: white; 
    border: none;
    border-radius: 40px; 
    border: 2px solid black;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1); 
    cursor: pointer;
    
    color: #333;
    font-weight: 600;
}



    </style>

<script>
    $(document).ready(function() {
        $('form').submit(function(event) {
            event.preventDefault(); // Mencegah pengiriman formulir secara langsung
            if (isRegistrationValid()) {
                register();
            }
        });
    });

    function isRegistrationValid() {
        let isValid = true;

        // Validation using jQuery
        let email = $('#email').val();
        let atIndex = email.indexOf("@");
        let dotIndex = email.lastIndexOf(".");
    
        // Mendapatkan elemen untuk pesan kesalahan
        let errorMessage = $("#error-message");

        if (atIndex < 1 || dotIndex < atIndex + 2 || dotIndex + 2 >= email.length) {
            errorMessage.text("Invalid email format!");
            $('#email').css('border', '2px solid red');
            isValid = false;
        } else {
            errorMessage.text(""); // Menghapus pesan kesalahan jika email valid
            $('#email').css('border', ""); // Mengembalikan warna border ke kondisi normal
        }

        return isValid;
    }

    function register() {
        // Reset border dan pesan kesalahan sebelum alert
        $('#email').css('border', '');
        $("#error-message").text('');

        setTimeout(function () {
            alert("Your account has been registered");
            window.location.href = "login.html"; // Mengarahkan ke halaman login setelah alert
        }, 100); // Angka 100 = waktu delay 
    }
</script>
</head>

<body>
  <div class="wrapper">
    <form action="loginprofil.html" method="post">
        <h1>Sign Up</h1>

        <div class="input-box">
            <input type="text" placeholder="Full name" pattern="[a-z]{3,}" title="lowercase and minimum 3 characters" required>
            <i class='bx bxs-user-detail'></i>
        </div>

        <div class="input-box">
            <input type="text" placeholder=" Enter Your Email" required id="email" name="email">
            <i class='bx bxs-envelope' ></i>
            <div class="error-message" id="error-message"></div>
        </div>

        <div class="input-box">
            <input type="text" placeholder=" Create Username" pattern="[a-z, 0-9]{4,}" title="lowercase and minimum 4 characters" required>
            <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
            <input type="password" placeholder=" Create Password" required pattern="(?=.*[A-Z]).{8,}" title="At least 1 capital and 8 characters">
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <button type="submit" class="button" style="font-size: 16px;">Sign Up</button>
    </form>
</div>
</body>
</html>
