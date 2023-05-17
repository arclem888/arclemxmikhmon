<div class="card">
  <div class="row">
    <div class="col-12">
      <div class="card-sq">
        <div class="card-header-sq"><i class="fa fa-gear"></i> <b>Arclem x Zero Tier One</b> <span id="a-mess"></span></div>
        <div class="card-body">
          <table class="table">
            <tbody>
              <tr>
                <td style="min-width:100px">Network name</td>
                <td colspan="2"><input id='networkname' class="form-control adm" type="text" value="" autocomplete="off"></td>
              </tr>
              <tr>
                <td style="min-width:100px">Node ID</td>
                <td colspan="2"><input id='nodeid' readonly class="form-control adm" type="text" value="" autocomplete="off"></td>
              </tr>
            </tbody>  
          </table>
          <div class="btn-group">
              <button class="bg-btn-group" id="btn-joinnetwork" ><i class="fa fa-wifi" ></i> Join Network</button>
              <button class="bg-btn-group" id="btn-leavenetwork" ><i class="fa fa-minus-circle" ></i> Leave network</button>
              <button class="bg-btn-group" id="btn-info" ><i class="fa fa-info" ></i> ZeroTier Info</button>
              <button class="bg-btn-group" id="btn-listnetworks" ><i class="fa fa-laptop" ></i> List Networks</button>            
          </div>
          <div>
            <pre id="api-mess"></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>