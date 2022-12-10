<!-- Customer UI -->

<html>
  <head>
    <title>View Profile | Customer</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <style>
      :root {
        --clr-bg: #e7eeef;
        --clr-primary: #243c58;
        --clr-secondary: #5d7793;
        --clr-tertiary: #699cc5;
        --clr-quaternary: #696f6e;
        --clr-accent: rgb(255, 136, 0);
      }

      * {
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      body {
        background-color: var(--clr-bg);
      }

      .heading {
        font-size: 22px;
        color: var(--clr-accent);
        font-weight: bold;
        margin: 10px 20px;
      }

      a {
        color: var(--clr-primary);
        text-decoration: none;
      }

      .left-section {
        background-color: var(--clr-secondary);
        height: 100%;
        padding: 10px;
        color: #fff;
      }

      .left-section ul {
        list-style-type: none;
        padding: 0;
      }

      .left-section ul li {
        margin: 14px 0;
      }

      .left-section ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 20px;
        display: flex;
        flex-direction: column;
      }

      .left-section ul li a:hover {
        color: var(--clr-accent);
      }

      .right-section {
        background-color: #fff;
        height: 100%;
        padding: 10px;
      }

      .right-section a {
        color: var(--clr-primary);
        text-decoration: none;
        font-size: 18px;
      }

      .right-section a:hover {
        color: var(--clr-accent);
      }

      .right-section fieldset {
        width: 100%;
        height: 80%;
        border: 2px solid var(--clr-primary);
        border-radius: 10px;
        text-align: center;
        padding: 10px;
        align-items: center;
      }

      .right-section fieldset legend {
        color: var(--clr-primary);
        font-weight: bold;
      }

      .right-section fieldset table {
        width: 50%;
        height: 70%;
      }

      .img-box {
        padding-top: 20px;
      }

      label {
        font-size: 18px;
        font-weight: bold;
        color: #000;
      }
    </style>
  </head>
  <body>
    <table
      align="center"
      width="100%"
      height="100%%"
      style="border-collapse: collapse"
    >
      <tr>
        <td class="left-section" style="padding-bottom: 100px">
          <h4 class="heading">View Profile</h4>
          <hr style="margin: 0 10px" />
          <ul style="margin-left: 20px; margin-top: 20px">
            <li><a href="menuCus.html">Main Menu</a></li>
            <li><a href="viewProfile.php">View Profile</a></li>
            <li><a href="editProfile.php">Edit Profile</a></li>
            <li><a href="#">View Album</a></li>
            <li><a href="#">Change Profile Picture</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="#">View Ticket Cart</a></li>
          </ul>
        </td>
        <td class="right-section" style="padding: 80px">
          <fieldset>
            <legend>PROFILE</legend>
            <form
              action="../controllers/regCheck.php"
              method="post"
              enctype="multipart/form-data"
            >
              <table align="center">
                <tr>
                  <td><label for="name">Name</label></td>
                  <td>:</td>
                  <td>
                    Khaled Hossain
                    <!-- php code -->
                  </td>
                </tr>
                <br />
                <br />
                <br />
                <tr>
                  <td><label for="email">Email</label></td>
                  <td>:</td>
                  <td>
                    khaled@aiub.edu
                    <!-- php code -->
                  </td>
                </tr>
                <tr>
                  <td><label for="gender">Gender</label></td>
                  <td>:</td>
                  <td>
                    Male
                    <!-- php code -->
                  </td>
                </tr>
                <tr>
                  <td><a href="editProfile.php">Edit Profile</a></td>
                </tr>
                <tr>
                  <td class="img-box" colspan="2">
                    <img src="" alt="img" width="100px" height="100px" /><a
                      href="#"
                      ><br />Change</a
                    >
                  </td>
                </tr>
              </table>
            </form>
          </fieldset>
        </td>
      </tr>
    </table>
  </body>
</html>
