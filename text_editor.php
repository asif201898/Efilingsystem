<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

  <style>
    .summernote {
      margin-left: 500px;
    }

    .form-group {
      padding-left: 5px;
      word-spacing: 5;
    }
  </style>
</head>

<body>
  <div class="page-header">
    <h1>Application Form</h1>
    <small>Home / Dashboard / Apllication Form</small>
  </div>
  <form action="" method="post">
    <textarea id="summernote" ><b>
        <p>Date <br> To, <br>From, <br> Subject: Application for financial approval.<br> <br>Dear [Recipient's Name],
          <br><br><br>Body<br>.....<br>......<br>......<br><br>
        <p>Your Faithfully,</p>
        <p>[Your Name]</p>
        </p>
      </b></textarea>
    
    <div class="form-group">
        <label for="fileUpload">Attach Files:</label>
        <input type="file" class="form-control-file" id="fileUpload" name="fileUpload[]" multiple>
    </div>
    <div class="form-group">
      <button type="button" class="btn btn-primary" id="saveBtn">Save</button>
      <button type="button" class="btn btn-success" id="sendBtn">Send</button>
      <label for="">Choose Destination</label>
      <select name="" id="">
      <option value="sectionOfficer">Section Officer</option>
        <option value="teacher">Teacher</option>
        <option value="registrar">Registrar</option>
        <option value="deptHead">Department Head</option>
        <option value="vc">VC</option>
      </select>
      <label for="">User</label>
      <select name="" id="">
      <option value="sectionOfficer">Section Officer</option>
        <option value="teacher">Teacher</option>
        <option value="registrar">Registrar</option>
        <option value="deptHead">Department Head</option>
        <option value="vc">VC</option>
      </select>
      <button type="button" class="btn btn-secondary" id="cancelBtn">Cancel</button>
    </div>


  </form>
  <script>
    $(document).ready(function () {
      $('#summernote').summernote();
    });
  </script>
  <script>
    $('#summernote').summernote({
      placeholder: 'Hello Bootstrap 5',
      tabsize: 4,
      height: 400
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

           