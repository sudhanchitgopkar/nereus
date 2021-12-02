
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="browse.css">
        <title>create</title>
    </head>
    <body>
        <script type="text/javascript">
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>
        
        <div style="text-align:center;">
            <div>
                <div class="N-logo">N.</div>

                <div class="dropdown" style="padding-top: 38px !important; margin-right: 30px;">
                    <button onclick="myFunction()" class="dropbtn">
                        <!-- Dropdown -->
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="index.html">Home</a>
                        <a href="browse.php">Browse</a>
                        <a href="#contact">Log Out</a>
                    </div>
                </div>
            </div>
            


    </body>

    
    


    

    </html>