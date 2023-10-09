
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>View Showtime</h1>
    <form action="xuly.php" method="POST">
        <div class="form-group">
            <label for="startInput">Start:</label>
            <input readonly type="datetime-local" class="form-control" id="startInput" name="Start" value="{{$Showtime->Start}}" placeholder="Select start date">
          </div>
          <div class="form-group">
            <label for="endInput">End:</label>
            <input readonly type="datetime-local" class="form-control" id="endInput" name="End" value="{{$Showtime->End}}" placeholder="Select end date">
          </div>
          <div class="form-group">
            <label for="movieIdInput">Movie :</label>
            <select readonly name="Movie_Id" id="">
              @foreach ($movie as $m )
              <option value="{{$m->Id}}" {{($m->Id==$Showtime->movie->Id)?'selected': ''}}  > {{$m->Name}}  </option>
              @endforeach
            
            </select>
           
          </div>
          <div class="form-group">
            <label for="cinemaIdInput">Cinema :</label>
            <select readonly name="Cinema_Id" >
              @foreach ($cinema as $c )
              <option value="{{$c->Id}}" {{($c->Id==$Showtime->cinema->Id)?'selected': ''}}  > {{$c->Name}}  </option>
              @endforeach
            </select>
           
           
          </div>
          <div class="form-group">
            <label for="roomIdInput">Room :</label>
            <select readonly name="Room_id">
              @foreach ($room as $r )
              <option value="{{$r->Id}}" {{($r->Id==$Showtime->room->Id)?'selected': ''}}  > {{$r->Name}}  </option>
              @endforeach
            </select>
           
           
          </div>
   
      
    </form>
  </div>
</div>
</div>
