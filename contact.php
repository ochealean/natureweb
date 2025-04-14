<?php include('includes/header.php'); ?>

    <section id="main">
        <div class="container">
            <h1 class="page-title">Contact Us</h1>
            
            <form id="contact-form" action="process_contact.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                
                <button type="submit" class="button_1">Send Message</button>
            </form>
            
            <div class="contact-info">
                <h3>Our Office</h3>
                <p>123 Nature Way, Eco City</p>
                <p>Phone: (+63) 123-456-7890</p>
                <p>Email: info@natureswonders.com</p>
            </div>
        </div>
    </section>

<?php include('includes/footer.php'); ?>