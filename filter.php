<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info"style="width:300px;" data-toggle="modal" data-target="#myModal">O</button>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width:300px;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-image: url(.jpg);">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Search Faults </h4>
        </div>
        <div class="modal-body" style="background-image: url(s.jpg);">
          <div class="form-group">
                 
<p align="center" style="color:#27c8f9;">    From:<input type="date"  style="width:200px;"class="form-control" id="usr"></p>

             <p align="center" style="color:#27c8f9;">       To:<input type="date"  style="width:200px;"class="form-control" id="tdate"></p>
</div>

<div class="form-group">
 <p align="center" style="color:#27c8f9;">
<label for="sel1">Type Of Faults</label>
  <select class="form-control" style="width:200px;" id="sel1">
<option>All Faults</option>    
<option>Land Slide</option>
    <option>Failed Joint</option>
    <option>Obstacle</option>
    
  
</select>
</p>
</div>
</br>

<div class="form-group">
<p align="center">
<button type="button" style="width:150px;"class="btn btn-info">Search </button>
</p>
        
</div>
      </div>
  <div class="modal-footer" style="background-image: url(.jpg);">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
