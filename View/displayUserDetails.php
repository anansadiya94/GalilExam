<script>
  // Set page title
  document.title = "Get User Details";
  
  // Retrieve user details data from locaStorage
  var saveData = JSON.parse(localStorage.saveData || null) || {};

  // Load user details data from localStorage
  window.onload = function insertUserDetails() {
    console.log(saveData.person || "default");
    document.getElementById('tdFullName').innerHTML = saveData.person["fullName"];
    document.getElementById('tdEmailAdress').innerHTML = saveData.person["emailAdress"];
    document.getElementById('tdPhoneNumber').innerHTML = saveData.person["phoneNumber"];
  }
</script>

<body>
  <div class="container">
    <h2>User details</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Full name</th>
          <th>Email adress</th>
          <th>Phone number</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td id="tdFullName"></td>
          <td id="tdEmailAdress"></td>
          <td id="tdPhoneNumber"></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
