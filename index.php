<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section id="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h1 class="contact-title">Contact Information</h1>
                <ul class="info-list">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Let's Talk:</span> + 1235 2355 98
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Email:</span> info@gmail.com
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website:</span> www.mysite.com
                    </li>
                </ul>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="contact-form">
                <h1 class="contact-title">Send us a message</h1>
                <form action="#" method="POST">
                    <input type="text" placeholder="Your Name" class="form-input">
                    <input type="email" placeholder="Your Email" class="form-input">
                    <input type="tel" placeholder="Your Phone" class="form-input">
                    <textarea placeholder="Your Message" class="form-input"></textarea>
                    <button type="submit" onclick="submitForm()" class="submit-button">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    function submitForm() {

      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var contact = document.getElementById('contact').value;
      var message = document.getElementById('message').value;


      $.ajax({
        url: 'submit_form.php',
        type: 'POST',
        data: {
          name: name,
          email: email,
          contact: contact,
          message: message
        },
        success: function(data) {

          alert('Your message has been saved successfully!');

          document.getElementById('name').value = '';
          document.getElementById('email').value = '';
          document.getElementById('contact').value = '';
          document.getElementById('message').value = '';
        },
        error: function(error) {

          alert('There was an error saving your message');
        }
      });
    }

    document.getElementById('contactForm').addEventListener('submit', function(event) {
      event.preventDefault(); 
      submitForm(); 
    });
  </script>
</body>
</html>




