    <div class="modal fade Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true" id="Modal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                @if(Session::get('success'))                    
                    <h2>{{Session::get('success')}}</h2>
                @endif
                @if(Session::get('error'))                    
                    <h2>{{Session::get('error')}}</h2>
                @endif
                </div>
                <div class="modal-footer">
                </div>
          </div>
        </div>
    </div>