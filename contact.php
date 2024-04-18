<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact and Location</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
   .container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

h2 {
    margin-top: 20px;
    color: #333; /* Dark gray color */
}

.contact-info p {
    margin-bottom: 10px;
}

.contact-info .email,
.contact-info .phone {
    font-weight: bold;
    color: #007bff; /* Blue color */
}

.location p {
    color:  #007bff; /* Dark gray color */
    font-size:50%;
}

iframe {
    width: 100%;
    height: 300px;
    border: none;
}
.container {
    color: #c90076;
    background-color:#6fa8dc;
    font-size:2rem;
    border-radius:5px;
    margin-top:30px;
}
.button a{
  position:absolute;
  text-decoration: none;
  background-color: cyan;
  align-items: center;
  justify-content: center;
  color: orange;
  border: 2px solid #333;
  text-align: center;
  width: 90px;
  height: 28px;
  padding-top:6px;
  top:5px;
  left:10px;
  margin:3px;
  cursor:pointer;
  font-size:18px;
  border-radius:20px
  }
</style>
<body>
<div class="button">
        <a href= "index.php" >Back</a>

</div>
    
<div class="container">
        <h2>Contact Us</h2>
        <p>Feel free to reach out to us via email or phone:</p>
        <ul>
            <li>Email: vjtorremocha@gmail.com</li> 
            <li>Phone: 09708192765</li>
        </ul>
        <h2>Our Location</h2>
        <p>We are located at:</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206948.854256677!2d-0.2416812645504138!3d51.528558249758656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b5f8b271a9%3A0x6e30f4d7c06b44f9!2sLondon%2C%20UK!5e0!3m2!1sen!2suk!4v1627498807154!5m2!1sen!2suk" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</body>
</html>