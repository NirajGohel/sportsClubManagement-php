<?php
  include "$_SERVER[DOCUMENT_ROOT]/SCM/config.php";
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SCM | Events</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="admin_event.css">
</head>
<body>
<div class="container-fluid header text-center">
  Manage Events
</div>

<div class="container box">
  Event Details<br>
  <span style="font-size:16;color:gray;">Click on the respective event to manage</span>

  <a href="add_event.php"><button style="float:right;">Add Event</button></a>

  <table>
    <tr>
      <td>No</td>
      <td>Event name</td>
      <td>Date</td>
      <td>Time</td>
      <td>Duration(hours)</td>
      <td>Update</td>
      <td>Delete</td>
    </tr>

    <?php
      try {
        $stmt = $pdo->prepare("select * from event");
        $stmt->execute();

        if ($stmt->rowCount() == 0) {
          echo "<td colspan='7' align='center'>No Events</td>";
        }
        else{
          $row = $stmt->fetch();
          
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    ?>

    <!-- <tr>
      <td>1</td>
      <td>Niraj Gohel</td>
      <td>Leader</td>
      <td><a href=""><img src="res/update.svg" alt=""></a></td>
      <td><a href=""><img src="res/delete.svg" alt=""></a></td>
    </tr> -->

  </table>

  <div class="footer">
    <a href="index.html"><button>Back</button></a>
  </div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->

</body>
</html>
