<form class="form" method="post" action="mail/mail.php">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="form-group">
                <label>Your Name<span>*</span></label>
                <input type="text" name="name" required="required" placeholder="">
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="form-group">
                <label>Your Email<span>*</span></label>
                <input type="email" name="email" required="required" placeholder="">
            </div>
        </div>
        <div class="col-lg-12 col-12">
            <div class="form-group">
                <label>Write a review<span>*</span></label>
                <textarea name="message" rows="6" placeholder=""></textarea>
            </div>
        </div>
        <div class="col-lg-12 col-12">
            <div class="form-group button5">
                <button type="submit" class="btn">Submit</button>
            </div>
        </div>
    </div>
</form>