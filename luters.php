<!DOCTYPE html>
<html>
<form style="background-color:#66b3ff">

</form>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1 id="title">My Profile</h1>
<div id="form-outer">
  <p id="description">
    
  </p>
  <form id="survey-form" method="GET" action="">
    <div class="rowTab">
      <div class="labels">
        <label id="name-label" for="name">Name: </label>
      </div>
      <div class="rightTab">
        <input autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your name" required>
      </div>
    </div>
    
    <div class="rowTab">
      <div class="labels">
        <label id="fname-label" for="fname">Father's Name: </label>
      </div>
      <div class="rightTab">
        <input autofocus type="text" name="fname" id="fname" class="input-field" placeholder="Enter your father's name" required>
      </div>
    </div>
    
    <div class="rowTab">
      <div class="labels">
        <label id="mname-label" for="mname">Mother's Name: </label>
      </div>
      <div class="rightTab">
        <input autofocus type="text" name="mname" id="mname" class="input-field" placeholder="Enter your mother's name" required>
      </div>
    </div>
    
    <div class="rowTab">
      <div class="labels">
        <label id="email-label" for="email">Email: </label>
      </div>
      <div class="rightTab">
        <input type="email" name="email" id="email" class="input-field" required placeholder="Enter your Email">
      </div>
    </div>
    <!--<div class="rowTab">
      <div class="labels">
        <label id="number-label" for="age">Age: </label>
      </div>
      <div class="rightTab">
        <input type="number" name="age" id="number" min="1" max="125" class="input-field" placeholder="Age" required>
      </div>
    </div>-->
    
    <!--<div class="rowTab">
      <div class="labels">
        <label id="dob-label" for="dob">D.O.B: </label>
      </div>
      <div class="rightTab">
        <input type="date" name="dob" id="iddob" class="input-field" required>
      </div>
    </div>-->
    
    <div class="rowTab">
      <div class="labels">
        <label for="department">Department: </label>
      </div>
      <div class="rightTab">
        <select id="dropdown" name="department" class="dropdown">
        <option disabled value>Select an option</option>
        <option value="it">IT</option>
        <option value="cse">EDUCATION</option>
        <option value="ece">NURSING</option>
        <option value="mech">CRIMINOLOGY</option>
        <!--<option value="civil">CIVIL</option>
        <option value="other">Other</option>-->
        </select>
      </div>
    </div>
    
    <div class="rowTab">
      <div class="labels">
        <label for="gender">Gender: </label>
      </div>
      <div class="rightTab">
        <ul style="list-style: none;">
          <li class="radio"><label><input name="radio-buttons" value="male"  type="radio" class="userRatings" >Male</label></li>
          <li class="radio"><label><input name="radio-buttons" value="female"  type="radio" class="userRatings" >Female</label></li>
          <!--<li class="radio"><label><input name="radio-buttons" value="others"  type="radio" class="userRatings" >Others</label></li>-->
        </ul>
      </div>
    </div>
    <div class="rowTab">
      <div class="labels">
        <label for="address">Address: </label>
      </div>
      <div class="rightTab">
        <textarea id="comments" class="input-field" style="height:50px;resize:vertical;" name="address" placeholder="Enter your address here..."></textarea>
      </div>
    </div>
    <!--<div class="rowTab">
      <div class="labels">
        <label for="pincode">Pincode: </label>
      </div>
      <div class="rightTab">
       <input type="number" name="pincode" id="idpincode" class="input-field" style="height:20px;resize:vertical;" placeholder="6 - - - - -"></div>
    </div>-->
    
       <div class="rowTab">
      <div class="labels">
        <label for="language">Language Known: </label>
      </div>
      <div class="rightTab">
        <ul id="language" style="list-style: none;">
          <li class="checkbox"><label><input name="prefer" value="english" type="checkbox" class="userRatings">English</label></li>
          <li class="checkbox"><label><input name="prefer" value="tamil" type="checkbox" class="userRatings">Tagalog</label></li>
          <li class="checkbox"><label><input name="prefer" value="hindi" type="checkbox" class="userRatings">Visayan</label></li>
          <li class="checkbox"><label><input name="prefer" value="malayalam" type="checkbox" class="userRatings">Hiligaynon</label></li>
          <li class="checkbox"><label><input name="prefer" value="kannada" type="checkbox" class="userRatings">Ilocano</label></li>
          <li class="checkbox"><label><input name="prefer" value="telugu" type="checkbox" class="userRatings">Bicolano</label></li>
          <li class="checkbox"><label><input name="prefer" value="others" type="checkbox" class="userRatings">Others</label></li>
        </ul>
      </div>
    </div>

    <button id="submit" type="submit">Submit</button>
    <button id="reset" type="reset">Reset</button>
  </form>
</div>
</body>
</html>