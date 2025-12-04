<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>AROMA |Home</title>
  <style>
 body {
            background-color: #C2B7A2; /* pastel pink */
            margin: 0;
            padding: 0;
            font-family: 'Dessert Script', cursive;
            color: #333;
        }
		
/* ====== Header ====== */
header {
    width: 100%;
    background-color:#E3DFCE;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    color: black;
}

.logo {
    font-size:50px;
    font-weight:bold;
	font-family: 'Dessert Script', cursive;
	font-style: italic;
}

/* ====== Navigation Links ====== */
nav a {
    color: black;
    text-decoration: none;
    margin-left: 30px;
    font-size:40px;
    font-style: italic;
    font-weight: bold;
    transition: color 0.3s ease;
}

nav a:hover {
    color:white;
}

/* ====== Main Content ====== */
main {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

h1 {
    color:black;
    font-size:50px;
    text-align: center;
    margin-bottom: 20px;
}

h2 {
    color:black;
    font-size:30px;
    text-align: center;
	font-weight:bold;
    
}

/* ====== Horizontal Images ====== */
.image-row {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-bottom: 30px;
}

.image-row img,
.section-image {
    width:1400px;
    height:1800px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transition: transform 0.3s;
	object-fit: cover; 
}


/* ====== Footer ====== */
footer {
    width: 100%;
    background-color:#E3DFCE;
    padding:0px 10px 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    color:black;  
    font-size: 20px;
	position: fixed; 
	bottom: 0;        
    left: 0;
	line-height: 1.2;
}

footer h2 {
    margin: 0 0 10px;
    font-size: 35px;
	color:black;
	font-weight:bold;
}

.social-links {
    display: flex;
    gap: 15px;
    margin-bottom: 10px;
	font-weight:bold;
}

.social-links a {
    color: black;
    font-size: 25px;
    text-decoration: none;
    transition: opacity 0.3s;
}

.social-links a:hover {
text-decoration: underline;
}

.social-links .whatsapp {
  color: #25D366; 
  font-size: 28px;
text-decoration: underline;  
}
.social-links .instagram {
  color: #C13584; 
  font-size: 28px;
  text-decoration: underline;
}



.email-line {
    display: flex;
    align-items: center;
    gap:10px;
    font-weight: bold;
    font-size:25px;
	justify-content: center;

}

.email-line a {
    color:black;
    text-decoration: none;
}

.email-line a:hover {
    text-decoration: underline;
}
.email-line i {
  color: #0078D4; 
  font-size: 28px;
}

/* ====== Figure & Caption ====== */
.image-item {
    text-align: center;
}

figcaption {
    margin-top: 10px;
    font-size:30px;
    font-weight: bold;
    color:black;
}
 /* ====== Centered Button ====== */
    .center-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      padding: 0;
    }

    .order-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin: 0;
      padding: 15px 30px;
      background-color:  #BAB7AE;
      color:black;
      font-size: 25px;
      font-weight: bold;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      text-decoration: none;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
	  margin-bottom:10%;
    }

  </style>
</head>
<body>
  <header>
  <div class="logo" >AROMA FOR CATERING</div>
  <nav class="TFK">
<a href="h1.php">Home</a>
  <a href="ab.php">About Us</a>
  <a href="pa.php">Packages</a>
  <a href="he.php">Help</a>
  <a href="ga.php">Gallery</a>
  </nav>
</header>

  <section >
    <h1>WELCOME TO AROMA FOR CATERING</h1>
    <h2>
	<p> Enjoy traditional Omani hospitality with warm welcomes,
	cultural experiences, and local cuisine. Perfect for families<br>
	and travelers seeking an authentic cultural journey.</p></h2>
  </section>
  <br><br>
 <section>
    <div class="image-row">
	<figure class="image-item">
	<img src="img/s74.JPG" class="section-image" > 
	<figcaption>Experience Traditional Omani Culture and Hospitality</figcaption></figure>
  </section>

   <!-- Book Now Button -->
  <div class="center-container">
  <a href="b1.php" class="order-btn">
    <i class="fas fa-calendar-check" ></i> &nbsp;
    Book Now
  </a>
</div>

<footer>
  <div class="fooS">
    <div class="footer-content">
      <h2>CONTACT :</h2>

      <div class="social-links">
        <a href="https://wa.me/968XXXXXXXX" target="_blank">
          <i class="fab fa-whatsapp whatsapp"></i> +968 9333 5120
        </a>
        <a href="https://www.instagram.com/" target="_blank">
          <i class="fab fa-instagram instagram"></i> Aroma.om
        </a>
      </div>

      <div class="email-line">
        <i class="fas fa-envelope"></i>
        <a href="mailto:folk@gmail.com">AROMA@gmail.com</a>
      </div>

    </div>
  </div>
</footer>
</body>
</html>
