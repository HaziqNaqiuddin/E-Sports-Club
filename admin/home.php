<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>E-Sports Club UiTM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-red w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo1.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>E-Sports Hub</b></h4>
    <p class="w3-text-black">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#Home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-white"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Home</a> 
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT E-SC</a> 
  <a href="#COMMITTEE" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
  <a href="#MEMBERSHIP" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
<a href="#ACTIVITY" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a>  
    <a href="#ACHIEVEMENTS" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
      <a href="#Club Collaboration" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>CLUB COLLABORATION</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  <a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-white"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Administrator</a> 
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="Home">
   
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Welcome to E-Sports Club</b></h1>
   <hr>

   <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
    <p align="center"><img src="photo/logo3.jpg" alt="Me" style="width:200%"></p>
    </div>

  
    
  <!-- About -->
  <div id="ABOUT" class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>E-Sport UiTM Club</b></h4>
    <p>UITM Esports Club emphasises skill development and personal improvement. Members can improve their gaming skills by participating in coaching sessions, workshops, and collaborative gameplay. The club functions as a talent incubator, cultivating aspiring esports players and providing a path for those interested in competing at higher levels. Furthermore, the UITM Esports Club acts as a liaison between academia and the game business, developing interactions with experts and providing insights into prospective career routes in the esports sector. UITM Esports Club promotes a holistic approach to esports, which not only enriches its members' gaming experiences but also contributes to the overall development of abilities such as teamwork, communication, and strategic thinking.</p>
    <hr>

    <!-- Committee -->
<div class="w3-container w3-padding-64 w3-center" id="COMMITTEE">
<h2>OUR TEAM</h2>
<p>Meet the team members:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photo/image1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Muhd Haziq Naqiuddin Bin Zulkipli</h3>
  <p>President</p>
</div>

<div class="w3-quarter">
  <img src="photo/image2.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Nureddy Nursal</h3>
  <p>Vice President</p>
</div>

<div class="w3-quarter">
  <img src="photo/image3.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Faris Bin Zakaria</h3>
  <p>Treasurer</p>
</div>

<div class="w3-quarter">
  <img src="photo/image5.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Angie Marcheria</h3>
  <p>Secretary</p>
</div>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photo/image4.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Firdaus Hashim</h3>
  <p>Event Coordinator</p>
</div>

<div class="w3-quarter">
  <img src="photo/image6.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Maureen Gabriella</h3>
  <p>Marketing and Public Relations Officer:</p>
</div>

<div class="w3-quarter">
  <img src="photo/image7.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ahmad Fuad Razali</h3>
  <p>Team Manager</p>
</div>

<div class="w3-quarter">
  <img src="photo/image8.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rachel Florencia</h3>
  <p>Community Outreach Coordinator</p>
</div>

</div>
</div>

<hr>
    
    <!-- Membership -->
    <h4><b>E-Sports UiTM Club Membership</b></h4>
    
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  
  
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  
  
  <p id="MEMBERSHIP" align="center"><h3>Membership form for E-Sports UiTM Club 2024</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
              <a href="edit_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
    <hr>


    <div id="ACTIVITY" class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3>Activities form for E-Sports UiTM Club (E-SC)</h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
              <a href="edit_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
    
    <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
   
 ?>
<hr>

<!-- Achievements -->
<div id="ACHIEVEMENTS" class="w3-container w3-">
  <h1>Achievements for for E-Sports UiTM Club (E-SC)
</h1>
</div>

<div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="photo/image9.jpg" style="width:100%">
      <div class="w3-container">
        <h5>Tournament Victories: UiTM eSports Club won the 2023 E-Football 2023 Open Championship, demonstrating unparalleled skills in the E-football game. The team's strategic brilliance and individual prowess won the title, cementing UiTM's position as a strong force in professional gaming.</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="photo/image10.jpg" style="width:100%">
      <div class="w3-container">
        <h5>National Acclaim: Named the 'Best Collegiate eSports Team' at the 2022 National eSports Awards, UiTM eSports Club's success extends beyond local borders, confirming its place as a top contender in the national eSports scene.</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="photo/image11.jpg" style="width:100%">
      <div class="w3-container">
        <h5>Community Impact: UiTM eSports Club organised Malaysia League E-football 2024, a charity gaming marathon that raised funds for the Gamers Outreach Foundation. This effort demonstrated the club's dedication to social responsibility by bringing the gaming community together for a worthwhile cause and emphasising eSports as a catalyst for positive change.</h5>
      </div>
    </div>
  </div>
</div>

</body>

   <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
   
    ?>
    <hr>
  <p id="Club Collaboration" align="center"><h3>Club form E-sports UiTM Club</h3></p>
    <a href="add_club.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Club ID</th>
          <th scope="col">Club Name</th>
          <th scope="col">Club Ownership</th>
          <th scope="col">Club Type</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `club`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["club_id"] ?></td>
            <td><?php echo $row["club_name"] ?></td>
            <td><?php echo $row["club_owner"] ?></td>
            <td><?php echo $row["club_type"] ?></td>
          
            <td>
              <a href="edit_club.php?club_id=<?php echo $row["club_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_club.php?club_id=<?php echo $row["club_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

   <div id="contact" class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <hr>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p id="contact" align="center"><h3>Contact Us for E-Sports UiTM Club (E-SC)</h3></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact Student ID</th>
          <th scope="col">Email</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Comment</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>

            <td>
              <a href="edit_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

  <!-- Contact Section -->
  

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
