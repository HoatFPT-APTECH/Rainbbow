<div class="page-wrapper dashboard-wrap">
  <div class="content container-fluid">
      <div class="container">
          <h1>Create Promotion</h1>

          <form method="post" action="/admin/promotion/update/{{$Promotion->Id}}">
              @csrf
              <div class="form-group">
                  <label for="start">Start Date:</label>
                  <input type="datetime-local" class="form-control" id="start" name="Start"
                      value="2023-02-05T10:00" required>
              </div>

              <div class="form-group">
                  <label for="end">End Date:</label>
                  <input type="datetime-local" class="form-control" id="end" name="End"
                      value="2023-02-12T10:00" required>
              </div>

              <div class="form-group">
                  <label for="category">Category :</label>
                  <select name="PromotionCategrory_Id" class="form-select" aria-label="Default select example">
                      @foreach ($ListCategrory as $categrory)
                          <option {{$Promotion->Category_Id==$categrory->Id?"selected" : " "}} value={{ $categrory->Id }}>{{ $categrory->Name }} - ${{ $categrory->Coefficient }}
                          </option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for="category">For User :</label>
                  <select name="userId" class="form-select" aria-label="Default select example">
                      @foreach ($users as $u)
                          <option {{$Promotion->User_Id==$u->Id?"selected" : " "}} value={{ $u->Id }}>{{ $u->Id }}- {{ $u->Name }}</option>
                      @endforeach
                  </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
  </div>
</div>
