<!-- Default form contact -->
<form class="text-center border border-info p-4" action="<?php echo base_url('Contact/Insert'); ?>"  method="post">

    <p class="h4 mb-4">Contact Us</p>

    <!-- Name -->
    <input type="text" name="name" class="form-control mb-4" placeholder="Name" required>

    <!-- Email -->
    <input type="email" name="email" class="form-control mb-4" placeholder="E-mail" required>

    <!-- Subject -->
    <label>Subject</label>
    <select class="browser-default custom-select mb-4" name="subject" required>
        <option value="" selected disabled>Choose option</option>
        <option value="Feedback">Feedback</option>
        <option value="Report a bug">Report a bug</option>
        <option value="Feature request">Feature request</option>
    </select>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" name="message" rows="15" placeholder="Message" required></textarea>
    </div>

    <!-- Send button -->
    <button class="btn btn-primary btn-block" type="submit">Send</button>

</form>
<!-- Default form contact -->