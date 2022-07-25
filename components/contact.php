<section class="contact" id="contact">
    <div class="heading">
        <h2>Contact Me</h2>
    </div>
    <div class="contactContent">
        <div class="about">
            <div class="secHeading">
                <h2>About Me</h2>
            </div>
            <div class="aboutContent">
                <article class="article1">
                    <img src='./img/myavatar.png' alt="my avatar" />
                </article>
                <article class="article2">
                    <p>I am a Web Designer and Developer who likes to learn about my craft and likes to pass
                        along
                        what I learn to help others.</p>
                </article>
            </div>
        </div>
        <div class="form">
            <?php if($message_sent):
            ?>
            <h2>Thank You For Your Interest</h2>
            <?php
            else:
            ?>
            <form id="form" action="index.php#contact" method="POST">
                <div class="form-control">
                    <label for="firstName">First Name</label><small>Error message</small>
                    <input type="text" placeholder="First Name" id="firstName" name="firstName" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="form-control">
                    <label for="lastName">Last Name</label><small>Error message</small>
                    <input type="text" placeholder="Last Name" id="lastName" name="lastName" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>

                </div>
                <div class="form-control">
                    <label for="username">Email</label><small>Error message</small>
                    <input type="email" placeholder="Email" id="email" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>

                </div>
                <div class="form-control">
                    <label for="message">Reason For Visit</label>
                    <textarea type="text" placeholder="" id="message" name="message"></textarea>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

                <button type="submit" name="submit">Submit</button>
            </form>
            <?php endif;?>
            <?php 
            $errors = [];
            $firstName = htmlspecialchars(trim($_POST['firstName']));
            $lastName = htmlspecialchars(trim($_POST['lastName']));
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars(trim($_POST['message']));
            $myself = "dumas.jerry@gmail.com";
if (isset($_POST['submit'])) {
    if (filter_var($firstName)) {
        # code...
    }
    if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    $to = $myself;
            $from = $email;
            $subject = "Contact Form Inquiry";
            $body = "";

        $body.= "From: ".$firstName." ".$lastName."\r\n";
        $body.= "Email: ".$email."\r\n";
        $body.= "Message: ".$message."\r\n";

        $mail($to,$subject,$body);
    }
    
}else{
        header("Location: index.php#contact",302)
}
?>
        </div>
    </div>
</section>