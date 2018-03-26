  <!-- Contact Modal -->
  <div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactTitle">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-pink text-left">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 id="contactTitle" class="modal-title">Contact Me</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <form id="contactForm" class="mb-15" name="contactForm" role="form">
            <!-- Status Alert Box -->
            <div id="status" class="alert fade in alert-dismissible hideAlert" role="alert">
              <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p></p>
            </div>
            <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input id="name" class="form-control" type="text" name="name" placeholder="Your Full Name" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input id="email" class="form-control" type="email" name="email" placeholder="Your Email Address" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="subject">Subject</label>
              <input id="subject" class="form-control" type="text" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="message">Message</label>
              <textarea id="msg" class="form-control" name="msg" rows="6" placeholder="Your message here..." required></textarea>
            </div>
            <small>* All fields are required</small>
            <div style="display:none">
              <label for="robot">Are you a robot?</label>
              <input id="robot" type="text" name="robot">
              <p>Please leave this field blank! This is to prevent spam.</p>
            </div>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn td-btn outline small white" data-dismiss="modal">Cancel</button>
            <input id="sendMessage" class="btn td-btn outline small white" type="submit" name="submit" value="Send Message">
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->