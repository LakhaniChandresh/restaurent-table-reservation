<!-- 
<footer class="footer" id="footer">
 <div class="container"><br>
  <div class="row">
    <div class="col-sm-12 text-center">
      <div class="social-icon">
        <a href="index.php"><i class="fa fa-facebook"></i></a>
        <a href="index.php"><i class="fa fa-twitter"></i></a>
        <a href="index.php"><i class="fa fa-pinterest"></i></a>
        <a href="index.php"><i class="fa fa-rss"></i></a>
      </div>
      <div class="copyright">
        <p class="white"> copyright &copy; <b>HaveMoer</b></p>
        <p><i class="fa fa-phone"></i> +919625341627 &nbsp;<i class="fa fa-envelope-o"></i> lakhanichandresh2005@gmail.com</p>
      </div>
    </div>
  </div>
 </div>
</footer> -->
<style>
   .footer{
	width: 100%;
	position: relative;
	bottom: 0;
	background: linear-gradient(to right, #000522,#162938);
	color: #fff;
	padding: 100px 0 30px;
	border-top-left-radius: 125px;
	font-size: 13px;
	line-height: 20px;
	margin-top: 25px;
  }
  .rows .colu img{
	width: 70px;
	height: 74px;
	border-radius: 50%;
	margin-bottom: 20px;
  }
  .rows{
	width: 85%;
	margin: auto;
	display: flex;
	flex-wrap: wrap;
	align-items: flex-start;
	justify-content: space-between;
  }
  .colu{
	flex-basis: 25%;
	padding: 10px;
  }
  .colu:nth-child(2),.colu:nth-child(3){
	flex-basis: 15%;
  }
  .colu h3{
	width: fit-content;
	margin-bottom: 40px;
	position: relative;
  }
  .email-id{
	width: fit-content;
	border-bottom: 1px solid #ccc;
	margin: 20px 0;
  }
  .footer ul li{
	list-style: none;
	margin-bottom: 12px;
  
  }
  .footer ul li a{
	text-decoration: none;
	color: #fff; 
  }
  .footer ul li a:hover{
	color: #aaa7a7;
  }
  .colu form{
	padding-bottom: 0px;
	display: flex;
	align-items: center;
	justify-content: space-between;
	border-bottom: 1px solid #ccc;
	margin-bottom: 50px;
  }
  .colu form .far{
	font-size: 18px;
	margin-right: 10px;
  }
  .colu form input{
  width: 100%;
  background: transparent;
  color: #ccc;
  border: 0;
  outline: none;
  }
  .colu form button{
	background: transparent;
	border: 0;
	outline: none;
	cursor: pointer;
  }
  .colu form button{
  font-size: 16px;
  color: #ccc;
  }
  .colu .social-icons .fab{
  width: 40px;
  height:40px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  font-size: 20px;
  color: #000;
  background: #fff;
  margin-right: 15px;
  cursor: pointer;
  }
  .colu .social-icons .fab:hover{
	background: #ccc;
  }
  hr{
  width:90%;
  border: 0;
  border-bottom: 1px solid #ccc;
  margin: 20px auto;
  }
  .copyright{
  text-align: center;
  }
  .underline{
  margin-top:10px;
  width: 100%;
  height: 5px;
  background: #767676;
  border-radius: 3px;
  position: absolute;
  top: 25px;
  left: 0;
  overflow: hidden;
  }
  .underline span{
  width: 15px;
  height: 100%;
  background-color: #fff;
  border-radius: 3px;
  position: absolute;
  top: 0;
  left: 10px;
  animation: moving 2s linear infinite;
  }
  @keyframes moving {
  0%{
	left:-20px;
  }
  100%{
	left:100%;
  }
  } 
</style>
<footer class="footer">
        <div class="rows">
            <div class="colu">
                <img src="img/logomain.png" alt="Logo">
                <p>The restaurant HaveMoer, first opened in 2024 in “surat”, one of the oldest districts of gujarat in the historical center of the city. In 2010 , the restaurant was awarded its first Michelin star and has retained it since.<br><br></p>
            </div>
            <div class="colu">
                <h3>Office <div class="underline"><span></span></div></h3>
                <p>G-1 Shivalik Western complex</p>
                <p>Subhash Chandra Bose Marg, Bangalore</p>
                <p>Gujrat, PIN 395009, India</p>
                <p class="email-id">22it072@charusat.edu.in</p>
                <h4>+919365232524</h4>
            </div>
            <div class="colu">
                <h3>Links <div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Gallary</a></li>
                    <li><a href="">Reservation</a></li>
                    <li><a href="">Find us</a></li>
                </ul>
            </div>
            <div class="colu">
                <h3>Newsletter <div class="underline"><span></span></div></h3>
                <form action="">
                    <i class="far fa-envelope"></i>
                    <input type="email" placeholder="Enter your email id" required>
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-whatsapp"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright © 2024 HaveMoer Restaurant. All rights reserved.</p>
    </footer>

                                          <!-- new footer  -->

<!--end of footer-->
</body>
<!---end of body-->
</html>