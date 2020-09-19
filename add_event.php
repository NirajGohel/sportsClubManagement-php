<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SCM | Add Event</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="registration.css">
</head>
<body>
<div class="container-fluid header text-center">
  Sports Club Management | Administration
</div>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-6 box">
      Add Event

      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="inputbox">
            <form action="db_add_event.php" method="post">
              Name of event<br>
              <input type="text" name="name" autocomplete="off" required><br>

              Date<br>
              <input type="date" name="date" autocomplete="off" required><br>

              Time<br>
              <input type="time" name="time" required>

              Duration<br>
              <input type="number" name="duration" autocomplete="off" required>

              <div class="footer">
                <input type="reset" value="Reset" name="submit">
                <input type="submit" value="Add" name="submit">
              </div>

            </form>
          </div>
        </div>
    </div>

    </div>
  </div>
</div>

</body>
</html>
