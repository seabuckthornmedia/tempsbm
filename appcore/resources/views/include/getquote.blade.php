<div class="jumbotron">
        <div class="container">
          <h1 class="display-4">Request a free Quote</h1>
          <p class="lead">We’re a professional bunch, and we want to work with you! Talk to us today to get started.</p>
          <hr class="my-4">
          <button type="button" data-toggle="modal" data-target="#quoterequest" class="btn btn-lg btn-block btn-primary">Request A Quote</button>
        </div>
      </div>
      <div id="quoterequest" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Request A Quote</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                  <div class="container">
                    <!-- Modal Form -->
                    <form action="{{ url('contact') }}" method="POST">
                      {{ csrf_field() }}
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <!-- Modal Rest Of The Contact Form-->
                          <div class="form-group text-left">
                              <label name="email">Email:</label>
                              <input id="email" name="email" class="form-control">
                          </div>
      
                          <div class="form-group text-left">
                              <label name="subject">Subject:</label>
                              <input id="subject" name="subject" class="form-control" value="Quote Request">
                          </div>
      
                          <div class="form-group text-left">
                              <label name="message">Message:</label>
                              <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                          </div>
                          <input type="submit" value="Send Message" class="btn btn-success">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>