
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
    <h1>Create Showtime</h1>
   {{--  <form method="post" action="/admin/performer"> --}}
    <form method="post" action="/admin/showtime/store">
      @csrf
      <div class="form-group">
        <label for="startInput">Start:</label>
        <input type="datetime-local" class="form-control" id="startInput" name="Start" placeholder="Select start date">
      </div>
      <div class="form-group">
        <label for="endInput">End:</label>
        <input type="datetime-local" class="form-control" id="endInput" name="End"  placeholder="Select end date">
      </div>
      <div class="form-group">
        <label for="movieIdInput">Movie :</label>
        <select readonly name="Movie_Id" id=""  required >
          <option >Choose Film</option>
          @foreach ($movie as $m )
          <option value="{{$m->Id}}"   > {{$m->Name}}  </option>
          @endforeach
        
        </select>
       
      </div>
      <div class="form-group">
        <label for="cinemaIdInput">Cinema :</label>
        <select readonly name="Cinema_Id" onchange=" getRooms(this.value)" required >
          <option  selected> Choose Cinema</option>
          @foreach ($cinema as $c )
          <option value="{{$c->Id}}"   > {{$c->Name}}  </option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="roomIdInput">Room :</label>
        <select readonly name="Room_id" id="roomIdInput" >
        <option value="null"> Choose Room </option>
        </select>
      
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>

