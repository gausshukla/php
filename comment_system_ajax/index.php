<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
          <link rel="icon" type="image/x-icon" href="https://roshanbaghwar.github.io/assets/img/portfolio/portfolio-5.png">

    <title>Gaurav Shukla</title>
</head>
<body>
<img src="https://media-exp1.licdn.com/dms/image/D4D03AQH5X5EJxV7nDg/profile-displayphoto-shrink_400_400/0/1645631000984?e=1657756800&v=beta&t=ScHHM_8tlrNH0zowgYmxcLEfcFcp24rXnoOsx925MqU" width="300" height="300" title="Pranuhz">
<p>I'm currently pursuing B.Tech @CSIT from IET MJPRU Bareilly.<br>I'm in first year and exploring Web Development and DSA.<br>I love to take challenges</p>
<h2 style="color:rgb(69, 16, 16)">Skills-</h2>
<ul>
  <li>C++</li>
  <li>Competitive Coding</li>
  <li>HTML</li>
  <li>CSS</li>
</ul>  
<h2>Contacts-</h2>

<a href="https://www.linkedin.com/in/pranuhz/" target ="_blank"><img src="https://i.pinimg.com/564x/c2/2e/8f/c22e8f079cded9ea507d9fccf981f263.jpg" width="52px" height="52px"></a>

<a href="https://github.com/pranuhz" target ="_blank"><img src="https://i.pinimg.com/564x/46/91/bb/4691bb7da1394f0c7895d5ba52601a90.jpg" width="52px" height="52px"></a>

<a href="mailto:gaurav.pranu@gmail.com" target ="_blank" title="gaurav.pranu@gmail.com"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/2560px-Gmail_icon_%282020%29.svg.png" width="52px" height="52px"></a>

<a href="https://www.stopstalk.com/user/profile/pranuhz" target ="_blank"><img src="https://www.stopstalk.com/static/images/stopstalk-logo.png" width="52px" height="52px"></a>



<a href="https://www.codechef.com/users/pranuhz" target ="_blank"><img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/zruiknbedz8yqafxbazb" width="52px" height="52px"></a>

<a href="https://codeforces.com/profile/pranuhz" target ="_blank"><img src="https://roshanbaghwar.github.io/assets/img/portfolio/portfolio-5.png" width="52px" height="52px"></a>
<br>
<p1 style="text-align:right">Made By Gaurav Shukla</p1>
 <br>
<button onclick="window.print()">Print this page as a CV</button>
<br>
    <div class="wrapper">
        <form id="form">
            <div class="inputBox">
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" placeholder="Enter your name" required>
            </div>
            <div class="inputBox">
                <label for="msg">Message:</label>
                <br>
                <textarea id="msg" placeholder="Enter your message" required></textarea>
            </div>
            <button id="btn"> Send </button>
        </form>
        <hr>
        <div class="content" id="content">
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(function(){
            function loadData(){
                $.ajax({
                    url: 'select-data.php',
                    type: 'POST',
                    success: function(data){
                        $("#content").html(data);
                    }
                });
            }

            loadData();

            $("#btn").on("click", function(e){
                e.preventDefault();
                var name = $("#name").val();
                var msg = $("#msg").val();

                $.ajax({
                    url: 'insert-data.php',
                    type: 'POST',
                    data: {name: name, msg: msg},
                    success: function(data){
                        if (data == 1) {
                            loadData();
                            alert('Comment Submitted Successfully.');
                            $("#form").trigger("reset");
                        }else {
                            alert("Comment Can't Submit.");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>