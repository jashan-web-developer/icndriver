
          <div class="modal-header">
            <h5 class="modal-title" id="commonModalLabel">Edit license details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <form id="license-edit-form" action="{{route('license.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-12 flash"></div>
            </div>
            @if($already_in_queue_to_approve==0)
            <div class="row" style="margin-bottom: 10px">
              <div class="col-12">
                <div class="form-group">
                  <input id="licenseimage" type="file" name="licensephoto"/>
                  <span class="invalid-feedback" id="licensephoto"></span>
                </div>
              </div>      				
			     </div>
           <div class="row">
             <div class="col-12">
                <div class="form-group">
                  @isset($license_query->licensephoto)
                    <img id="licenseimage_show" src="data:image/png;base64,{{ chunk_split(base64_encode($license_query->licensephoto)) }}" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img" />
                  @endisset
                </div>
              </div>
           </div>
           @else
           <div class="alert alert-warning">
             <p>Your Request for changes is in process. </p>
           </div>
           @endif
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closeModal" data-bs-dismiss="modal">Close</button>
            @if($already_in_queue_to_approve==0)
            <button type="submit" class="btn btn-primary">Save changes</button>
            @endif
          </div>
          </form>
        
