<div class="modal fade" id="exportContacts" tabindex="-1" aria-modal="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-list="{&quot;valueNames&quot;: [&quot;name&quot;]}">
            <div class="card-header">
    
              <!-- Title -->
              <h4 class="card-header-title" id="exampleModalCenterTitle">
                Export contacts
              </h4>
    
              <!-- Close -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
            </div>
            <div class="card-header">
    
              <!-- Form -->
                <div class="input-group input-group-flush input-group-merge input-group-reverse">
                  <input class="form-control list-search" id="exportInput" value="{{ $export }}" type="search" placeholder="Export">
                  <div class="input-group-text">
                    <button class="btn btn-primary" onClick="CopyToClipboard()">
                    <span class="fe fe-copy"></span>
                    </button>
                  </div>
                </div>
    
            </div>
            <div class="card-body">
    
            </div>
          </div>
        </div>
      </div>
    </div>