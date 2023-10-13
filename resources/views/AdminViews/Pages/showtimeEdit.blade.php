
<div class="page-wrapper dashboard-wrap">
  <div class="content container-fluid">
<div class="container">

  <h1>Edit Showtime</h1>
  <form action="/admin/showtime/update/{{$Showtime->Id}}" method="POST">
    @csrf
   
      <div class="form-group">
          <label for="startInput">Start:</label>
          <input type="datetime-local" class="form-control" id="startInput" name="Start" value="{{$Showtime->Start}}" placeholder="Select start date">
        </div>
        <div class="form-group">
          <label for="endInput">End:</label>
          <input type="datetime-local" class="form-control" id="endInput" name="End" value="{{$Showtime->End}}" placeholder="Select end date">
        </div>
        <div class="form-group">
          <label for="movieIdInput">Movie :</label>
          <select name="Movie_Id" id="">
            @foreach ($movie as $m )
            <option value="{{$m->Id}}" {{($m->Id==$Showtime->movie->Id)?'selected': ''}}  > {{$m->Name}}  </option>
            @endforeach
          
          </select>
         
        </div>
        <div class="form-group">
          <label for="cinemaIdInput">Cinema :</label>
          <select name="Cinema_Id" onchange=" getRooms(this.value)">
            @foreach ($cinema as $c )
            <option value="{{$c->Id}}" {{($c->Id==$Showtime->cinema->Id)?'selected': ''}}  > {{$c->Name}}  </option>
            @endforeach
          </select>
         
         
        </div>
        <div class="form-group">
          <label for="roomIdInput">Room :</label>
          <select name="Room_id"  id="roomIdInput" >
            <?php if (sizeof($room)===0) { ?>
              echo "<option>No Room in this cinema</option>"
          <?php  }

            ?>
            @foreach ($room as $r )
            <option value="{{$r->Id}}" {{($r->Id==$Showtime->room->Id)?'selected': ''}}  > {{$r->Name}}  </option>
            @endforeach
          </select>
         
         
        </div>
 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>
