<form  method="POST" enctype="multipart/form-data">
    @csrf
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-prepend">
                  <button type="button" id="inputGroupFileAddon03"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                  </button>
                </div>
                <div class="custom-file">
                  <input type="file" name="name_file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                  <label class="custom-file-label" for="inputGroupFile03">Upload CV</label>
                <input type="hidden" value="{{$idCustomerCV}}" name="customer_id">
                </div>
              </div>
        </div>
        <div class="col-md-12">
            <div class="input_field">
                <textarea name="note" id="" cols="300" rows="100" placeholder="Coverletter"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="submit_btn">
                <button class="boxed-btn3 w-100" type="submit">Apply Now</button>
            </div>
        </div>
    </div>
</form>

