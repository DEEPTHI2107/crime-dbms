<html>
<head>
<link rel="icon" href="favicon.ico">
<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');




input[type="text"], input[type="email"], input[type="password"] , input[type="tel"],input[type="date"] {
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 94.5%;
  display: block;
  border: none;
  padding: 0.8em;
  border: solid 1px rgba(255, 255, 255, 0.37);
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
  font-family: 'Roboto', sans-serif;
}
.text:focus, .text:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}

.text:focus::-webkit-input-placeholder, .text:valid::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
  font-size: .9em;
  -webkit-transform: translateY(-30px);
  -moz-transform: translateY(-30px);
  -o-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  transform: translateY(-30px);
  visibility: visible !important;
}

::-webkit-input-placeholder {
  color: #fff;
  font-weight: 100;
}

:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}

:-ms-input-placeholder {
  color: #fff;
}

input[type="submit"] {
  font-size: .9em;
  color: #fff;
  background: #76b852;
  outline: none;
  border: 1px solid #76b852;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 100%;
  margin: 2em 0;
  letter-spacing: 4px;

    border-bottom-width: 8px;
    border-left-width: 8px;
    border-right-width: 8px;
    border-top-width: 8px;

}

input[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: #e6e6fa;
}

.agileits-top p {
  font-size: 1em;
  color: #fff;
  text-align: center;
  letter-spacing: 1px;
  font-weight: 300;
}

.agileits-top p a {
  color: #fff;
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  transition: .5s all;
  font-weight: 400;
}

.agileits-top p a:hover {
  color: #76b852;
}


*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  //display: flex;
  //position: left;
}

.wrapper .sidebar{
  width: 300px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #594f8d;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}

@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}


  input[type="text"], input[type="email"], input[type="password"], input[type="tel"], input[type="radio"] ,input[type="date"]
{ {
    width: 93%;
  }
}

img{
opacity:0.6;
 position: fixed; 
  top: 0; 
  left: 0; 
	
  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
}

.text:focus, .text:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}

.text:focus::-webkit-input-placeholder, .text:valid::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
  font-size: .9em;
  -webkit-transform: translateY(-30px);
  -moz-transform: translateY(-30px);
  -o-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  transform: translateY(-30px);
  visibility: visible !important;
}

::-webkit-input-placeholder {
  color: #fff;
  font-weight: 100;
}

:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}

:-ms-input-placeholder {
  color: #fff;
}

input[type="submit"] {
  font-size: .9em;
  color: #fff;
  background: #76b852;
  outline: none;
  border: 1px solid #76b852;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 50%;
  margin: 2em 0;
  letter-spacing: 4px;

    border-bottom-width: 8px;
    border-left-width: 8px;
    border-right-width: 8px;
    border-top-width: 8px;

}

input[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: #e6e6fa;
}

.agileits-top p {
  font-size: 1em;
  color: #fff;
  text-align: center;
  letter-spacing: 1px;
  font-weight: 300;
}

.agileits-top p a {
  color: #fff;
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  transition: .5s all;
  font-weight: 400;
}

.agileits-top p a:hover {
  color: #76b852;
}

/*-- //main --*/
/*-- checkbox --*/
.wthree-text label {
  font-size: 0.9em;
  color: #fff;
  font-weight: 200;
  cursor: pointer;
  position: relative;
}




@keyframes rippling {
  50% {
    border-left-color: #fff;
  }

  100% {
    border-bottom-color: #fff;
    border-left-color: #fff;
  }
}



.colorlibcopy-agile p {
  font-size: .9em;
  color: #fff;
  line-height: 1.8em;
  letter-spacing: 1px;
  font-weight: 100;
}

.colorlibcopy-agile p a {
  color: #fff;
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -ms-transition: 0.5s all;
}

.colorlibcopy-agile p a:hover {
  color: #000;
}

/*-- //copyright --*/
.wrapper {
  position: relative;
  overflow: hidden;
}

.colorlib-bubbles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.colorlib-bubbles li {
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.15);
  bottom: -160px;
  -webkit-animation: square 20s infinite;
  -moz-animation: square 250s infinite;
  -o-animation: square 20s infinite;
  -ms-animation: square 20s infinite;
  animation: square 20s infinite;
  -webkit-transition-timing-function: linear;
  -moz-transition-timing-function: linear;
  -o-transition-timing-function: linear;
  -ms-transition-timing-function: linear;
  transition-timing-function: linear;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

.colorlib-bubbles li:nth-child(1) {
  left: 10%;
}

.colorlib-bubbles li:nth-child(2) {
  left: 20%;
  width: 80px;
  height: 80px;
  -webkit-animation-delay: 2s;
  -moz-animation-delay: 2s;
  -o-animation-delay: 2s;
  -ms-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 17s;
  -moz-animation-duration: 17s;
  -o-animation-duration: 17s;
  animation-duration: 17s;
}

.colorlib-bubbles li:nth-child(3) {
  left: 25%;
  -webkit-animation-delay: 4s;
  -moz-animation-delay: 4s;
  -o-animation-delay: 4s;
  -ms-animation-delay: 4s;
  animation-delay: 4s;
}

.colorlib-bubbles li:nth-child(4) {
  left: 40%;
  width: 60px;
  height: 60px;
  -webkit-animation-duration: 22s;
  -moz-animation-duration: 22s;
  -o-animation-duration: 22s;
  -ms-animation-duration: 22s;
  animation-duration: 22s;
  background-color: rgba(255, 255, 255, 0.25);
}

.colorlib-bubbles li:nth-child(5) {
  left: 70%;
}

.colorlib-bubbles li:nth-child(6) {
  left: 80%;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 3s;
  -moz-animation-delay: 3s;
  -o-animation-delay: 3s;
  -ms-animation-delay: 3s;
  animation-delay: 3s;
  background-color: rgba(255, 255, 255, 0.2);
}

.colorlib-bubbles li:nth-child(7) {
  left: 32%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 7s;
  -moz-animation-delay: 7s;
  -o-animation-delay: 7s;
  -ms-animation-delay: 7s;
  animation-delay: 7s;
}

.colorlib-bubbles li:nth-child(8) {
  left: 55%;
  width: 20px;
  height: 20px;
  -webkit-animation-delay: 15s;
  -moz-animation-delay: 15s;
  animation-delay: 15s;
  -webkit-animation-duration: 40s;
  -moz-animation-duration: 40s;
  animation-duration: 40s;
}

.colorlib-bubbles li:nth-child(9) {
  left: 25%;
  width: 10px;
  height: 10px;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 40s;
  animation-duration: 40s;
  background-color: rgba(255, 255, 255, 0.3);
}

.colorlib-bubbles li:nth-child(10) {
  left: 90%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 11s;
  animation-delay: 11s;
}

@-webkit-keyframes square {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    -moz-transform: translateY(-700px) rotate(600deg);
    -o-transform: translateY(-700px) rotate(600deg);
    -ms-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
  }
}

@keyframes square {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    -moz-transform: translateY(-700px) rotate(600deg);
    -o-transform: translateY(-700px) rotate(600deg);
    -ms-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
  }
}

/*-- responsive-design --*/
@media(max-width:1440px) {
  input[type="text"], input[type="email"], input[type="password"] input[type="tel"]  input[type="radio"] 
{{
    width: 94%;
  }
}

@media(max-width:1366px) {
  h1 {
    font-size: 2.6em;
  }

  .agileits-top {
    padding: 2.5em;
  }

  .main-agileinfo {
    margin: 2em auto;
  }

  .main-agileinfo {
    width: 36%;
  }
}

@media(max-width:1280px) {
  .main-agileinfo {
    width: 40%;
  }
}

@media(max-width:1080px) {
  .main-agileinfo {
    width: 46%;
  }
}

@media(max-width:1024px) {
  .main-agileinfo {
    width: 49%;
  }
}

@media(max-width:991px) {
  h1 {
    font-size: 2.4em;
  }

  .main-w3layouts {
    padding: 2em 0 1em;
  }
}

@media(max-width:900px) {
  .main-agileinfo {
    width: 58%;
  }

  input[type="text"], input[type="email"], input[type="password"] input[type="tel"] input[type="radio"] 
{ {
    width: 93%;
  }
}

@media(max-width:800px) {
  h1 {
    font-size: 2.2em;
  }
}

@media(max-width:736px) {
  .main-agileinfo {
    width: 62%;
  }
}

@media(max-width:667px) {
  .main-agileinfo {
    width: 67%;
  }
}

@media(max-width:600px) {
  .agileits-top {
    padding: 2.2em;
  }

  input.email, input.text.w3lpass {
    margin: 1.5em 0;
  }

  input[type="submit"] {
    margin: 2em 0;
  }

  h1 {
    font-size: 2em;
    letter-spacing: 3px;
  }
}

@media(max-width:568px) {
  .main-agileinfo {
    width: 75%;
  }

  .colorlibcopy-agile p {
    padding: 0 2em;
  }
}

@media(max-width:480px) {
  h1 {
    font-size: 1.8em;
    letter-spacing: 3px;
  }

  .agileits-top {
    padding: 1.8em;
  }

  input[type="text"], input[type="email"], input[type="password"] input[type="tel"] input[type="radio"] 
{
{
    width: 91%;
  }

  .agileits-top p {
    font-size: 0.9em;
  }
}

@media(max-width:414px) {
  h1 {
    font-size: 1.8em;
    letter-spacing: 2px;
  }

  .main-agileinfo {
    width: 85%;
    margin: 1.5em auto;
  }

  .text:focus, .text:valid {
    background-position: 0 0px;
  }

  .wthree-text ul li, .wthree-text ul li:nth-child(2) {
    display: block;
    float: none;
  }

  .wthree-text ul li:nth-child(2) {
    margin-top: 1.5em;
  }

  input[type="submit"] {
    margin: 2em 0 1.5em;
    letter-spacing: 3px;
border:0.5px;
  }

  input[type="submit"] {
    margin: 2em 0 1.5em;
  }

  .colorlibcopy-agile {
    margin: 1em 0 1em;
  }
}

@media(max-width:384px) {
  .main-agileinfo {
    width: 88%;
  }

  .colorlibcopy-agile p {
    padding: 0 1em;
  }
}

@media(max-width:375px) {
  .agileits-top p {
    letter-spacing: 0px;
  }
}

@media(max-width:320px) {
  .main-w3layouts {
    padding: 1.5em 0 0;
  }

  .agileits-top {
    padding: 1.2em;
  }

  .colorlibcopy-agile {
    margin: 0 0 1em;
  }

  input[type="text"], input[type="email"], input[type="password"]  input[type="tel"]  input[type="radio"] {
    width: 89.5%;
    font-size: 0.85em;
  }

  h1 {
    font-size: 1.7em;
    letter-spacing: 0px;
  }

  .main-agileinfo {
    width: 92%;
    margin: 1em auto;
  }

  .text:focus, .text:valid {
    background-position: 0 0px;
  }

  input[type="submit"] {
    margin: 1.5em 0;
    padding: 0.8em;
    font-size: .85em;

  }

  .colorlibcopy-agile p {
    font-size: .85em;
  }

  .wthree-text label {
    font-size: 0.85em;
  }

  .main-w3layouts {
    padding: 1em 0 0;
  }
}



</style>
</head>
<body>

<img src="abo.jpg" >



    <div class="main_content">
        <div class="header"><h1><center><strong>CRIME PORTAL</strong></center></h1></div>  <br>
      <br>
<br>
<br>  

<div class="main-w3layouts wrapper">

<center><h2>SELECT YOUR LOGIN</h2></center>
<br>
<br>
<form action="userloginregister.php" method="post">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="USER">
</form>
<br>
<form action="policeloginregister.php" method="post">


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="CRIME BUREAU">
</form>
<br>
<form action="adminloginregister.php" method="post">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="ADMINISTRATOR">
</form>

<br>
</div>
</div>

 

  
  
</table>
 </div>


</body>
</html>