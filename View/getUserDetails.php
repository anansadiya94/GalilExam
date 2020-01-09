<script>
  // Set page title
  document.title = "Get User Details";

  // Retrieve user details data from locaStorage.
  var saveData = JSON.parse(localStorage.saveData || null) || {};
  
  // Store user details data in locaStorage.
  function saveUserDetails() {
    var person = {fullName: document.forms["userDetailsForm"]["fullName"].value, 
    emailAdress:document.forms["userDetailsForm"]["emailAdress"].value, 
    phoneNumber:document.forms["userDetailsForm"]["phoneNumber"].value};
    console.log(person);
    saveData.person = person;
    saveData.time = new Date().getTime();
    localStorage.saveData = JSON.stringify(saveData);
  }
</script>

<body>
  <div class="container">
    <h2>Fill your details please:</h2>
    <form name="userDetailsForm" action="index.php?page=displayUserDetails" onsubmit="return saveUserDetails()" method="post">
    <div class="form-group">
        <label for="fullName">Full name:</label>
        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="emailAdress">Email adress:</label>
        <input type="email" class="form-control" id="emailAdress" placeholder="Enter your email adress" required>
      </div>
      <div class="form-group">
        <label for="phoneNumber">Phone number:</label>
        <input type="number" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
      </div>
      <button type="submit" class="btn btn-default">Next</button>
    </form>
  </div>
</body>