
<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
        <div class="container">
           
                <h1>Edit Promotion</h1>
                <form method="post" action="/admin/promotion/update/{{ $Promotion->Id }}">
                @csrf
                <div class="form-group">
                    <label for="startInput">Start</label>
                    <input type="text" class="form-control" id="startInput" name="Start" value="{{ $Promotion->Start}}">
                </div>
                <div class="form-group">
                    <label for="end">End</label>
                    <input type="text" class="form-control" id="end" name="end" value="{{$Promotion->End}}" >
                </div>
                <button type="submit" class="btn btn-primary">Submit </button>
            </form>
        </div>
    </div>
</div>
