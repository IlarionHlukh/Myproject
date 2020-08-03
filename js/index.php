<!doctype html>
<html lang="en">
  <head><link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <title>PHP сайт</title>
  </head>
  <body><link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal"><strong>PHP</strong></h5>


      <nav class="my-2 my-md-0 mr-md-3">
      </nav>
      <a class="btn btn-outline-primary" href="registr.html">Register</a><br>
      <a class="btn btn-outline-primary" href="sign%20in.html">Sign in</a><br>


  </div>
  <div

  </body class="container mt-5">
        <h5>Форма вхідних даних</h5>

  <?
  if($_POST['F']){
      $html="<table>";
      $html.="<tr>";
      $html.="<td>";
      $html.=$_POST['A'];
      $html.="</td>";
      $html.="<td>";
      $html.=$_POST['B'];
      $html.="</td>";
      $html.="<td>";
      $html.=$_POST['C'];
      $html.="</td>";
      $html.="<td>";
      $html.=$_POST['D'];
      $html.="</td>";
      $html.="</tr>";
      $html.="</table>";
  } else {
      $html.="<p></p>";
  }
  echo $html;
  ?>
  <body
  <table>
      <form method="POST" name="myForm">
          <div><input type="text" name="A" /></div>
          <div><input type="text" name="B" /></div>
          <div><input type="text" name="C" /></div>
          <div><input type="text" name="D" /></div>
          <div><input type="button" value="Добавити в таблицю" onclick="addNewRow(this.form.A.value, this.form.B.value,this.form.C.value,this.form.D.value);" /></div>
      </form>
            <table id="myTable"></table>

  <script>
          function
            addNewRow(val1, val2,val3, val4){
              var tbl = document.getElementById('myTable');
              var tblValue = tbl.innerHTML;

              tbl.innerHTML = tblValue + '<tr><td>'+val1+'</td><td>'+val2+'</td><td>'+val3+'</td><td>'+val4+'</td></tr>';
          }
      </script>

<table mt-10>
    <style>
        table {
            width: 500px;
            border: 5px solid deepskyblue;
            margin: auto;
        }
        td {
            text-align: center;
        }

</table>
</html>