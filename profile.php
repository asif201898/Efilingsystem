<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Account</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f0f0f0;
      padding: 20px;
    }

    .profile-box {
      max-width: 1200px;
      margin: 0 auto;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 20px;
    }

    .profile-picture {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .profile-picture img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-right: 20px;
    }

    .file-input {
      position: relative;
      overflow: hidden;
      display: inline-block;
      margin-top: 10px;
      cursor: pointer;
    }

    .file-input input[type=file] {
      font-size: 100px;
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="profile-box">
      <h2>Manage Account</h2>
      <form>
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" class="form-control" id="first-name" value="Md. Sanwar" readonly>
        </div>

        <div class="form-group">
          <label for="middle-name">Middle Name</label>
          <input type="text" class="form-control" id="middle-name" value="">
        </div>

        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" class="form-control" id="last-name" value="Hossain" readonly>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" value="sanwar.iit.nstu@gmail.com" readonly>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="•••••••">
          <small class="form-text text-muted">Leave this blank if you don't want to change the password.</small>
        </div>

        <div class="profile-picture">
          <img src="image/1.jpeg" alt="Profile Picture">
          <div class="file-input">
            <input type="file" id="profile-picture" accept="image/*">
            <label for="profile-picture" class="btn btn-primary">Choose file</label>
            <span id="file-name"></span>
          </div>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Show the selected file name after choosing a profile picture
    document.getElementById('profile-picture').addEventListener('change', function() {
      var fileName = this.files[0].name;
      document.getElementById('file-name').innerText = fileName;
    });
  </script>
</body>

</html>
