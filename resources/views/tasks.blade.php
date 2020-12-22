<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div>

</div>
 <div class="container">
    <div class="text-center">
      <h1>Daily tasks</h1>
         <div class="row">
            <div class="col-md-05">
         <form method="post"action="/SaveTask">
         {{csrf_field()}}
            <input type="text"class="form-control"name="task"placeholder="Enter your task">
            <br>
            <input type="submit"class="btn btn-primary"value="Save">
            <input type="button"class="btn btn-warning"value="Clear"> 
         </form>
            <table class="table table-dark">
            <th>ID</th>
            <th>Task</th>
            <th>Completed</th>
            <tr>
              <td>1</td>
              <td>I have to learn laravel today</td>
              <td>Not yet</td>
            </tr>
            </table>
            </div>
        </div>
    </div>
   
 </div>
</body>
</html>