<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table Comment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
        <div class="col text-center">
            <h2>Show Comment</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-7">
        <table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Comment</th>
    </tr>
  </thead>
  <tbody>
  <?php
include "connect.php";
$query = mysqli_query($con, "select*from tamu");
while ($data = mysqli_fetch_array($query)) 
{
?>
    <tr>
      <td><?php echo $data['user']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['comment']; ?></td>
    </tr>
    <?php
}
?>
  </tbody>
</table>
<a href="index.html">Berikan Komentar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>