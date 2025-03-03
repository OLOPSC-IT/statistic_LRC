<x-stats>

   <form action="/ps">

    @csrf
    <div class="container mb-5 mt-3">
        <div class="row">
            <div class="col-md-6">
                <label for="start_date">Start Date:</label>
                <input type="date" name="start_date" id="start_date" class="form-control" placeholder="YYYY-MM-DD">
            </div>
            <div class="col-md-6">
                <label for="end_date">End Date:</label>
                <input type="date" name="end_date" id="end_date" class="form-control" placeholder="YYYY-MM-DD">
            </div>
            <div class="col-md-6 mt-4" >
                <button class="btn btn-success">ENTER</button>
            </div>
        </div>
    </div>
   </form>
    

</x-stats>