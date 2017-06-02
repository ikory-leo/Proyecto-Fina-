<!DOCTYPE html>
<!--
http//jqueryui.com/download/
https://jquery.com/download/
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>

    <head>

        <meta charset="UTF-8">
        <title>ModiIn</title>

    </head>
    <body style="background-color:#3db9a9;">
        <style>
            #Cubo {
  width: 100px;
  height: 100px;
  background: red;
  position: relative;
  -webkit-box-shadow:0 0 5px black inset;
     -moz-box-shadow:0 0 5px black inset;
      -ms-box-shadow:0 0 5px black inset;
       -o-box-shadow:0 0 5px black inset;
          box-shadow:0 0 5px black inset;
}
#Cubo:before {
  content: "";
  position: absolute;
  top: -40px;
  left: 25px;
  width: 100px;
  height: 40px;
  background: green;
  -webkit-transform: skew(130deg,0deg);
     -moz-transform: skew(130deg,0deg);
       -o-transform: skew(130deg,0deg);
  -webkit-box-shadow:0 0 5px black inset;
     -moz-box-shadow:0 0 5px black inset;
      -ms-box-shadow:0 0 5px black inset;
       -o-box-shadow:0 0 5px black inset;
          box-shadow:0 0 5px black inset;
}
#Cubo:after {
  content: "";
  position: absolute;
  top: -20px;
  left: 100px;
  width: 50px;
  height: 100px;
  background: orange;
  -webkit-transform: skew(0deg,-40deg);
     -moz-transform: skew(0deg,-40deg);
       -o-transform: skew(0deg,-40deg);
  -webkit-box-shadow:0 0 5px black inset;
     -moz-box-shadow:0 0 5px black inset;
      -ms-box-shadow:0 0 5px black inset;
       -o-box-shadow:0 0 5px black inset;
          box-shadow:0 0 5px black inset;
}
#Marcianito{
  box-shadow:
    0 0 0 16px red,
    0 16px 0 16px red,
    -40px 24px 0 8px red,
    40px 24px 0 8px red,
    -48px -48px 0 0 red,
    48px -48px 0 0 red,
    -32px -32px 0 0 red,
    32px -32px 0 0 red,
    -48px -16px 0 0 red,
    -32px -16px 0 0 red,
    32px -16px 0 0 red,
    48px -16px 0 0 red,
    -64px 0 0 0 red,
    -48px 0 0 0 red,
    48px 0 0 0 red,
    64px 0 0 0 red,
    -80px 16px 0 0 red,
    -64px 16px 0 0 red,
    64px 16px 0 0 red,
    80px 16px 0 0 red,
    -80px 32px 0 0 red,
    80px 32px 0 0 red,
    -80px 48px 0 0 red,
    -48px 48px 0 0 red,
    48px 48px 0 0 red,
    80px 48px 0 0 red,
    -32px 64px 0 0 red,
    -16px 64px 0 0 red,
    16px 64px 0 0 red,
    32px 64px 0 0 red;
    background: red;
    width: 16px;
    height: 16px;
    overflow: hidden;
    margin: 50px 0 70px 65px;
}
#Infinito {
    position: relative;
    width: 150px;
    height: 100px;
}
#Infinito:before,
#Infinito:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 48px;
    height: 48px;
    border: 10px solid red;
    -moz-border-radius: 50px 50px 0 50px;
         border-radius: 50px 50px 0 50px;
    -webkit-transform: rotate(-45deg);
       -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
}
#Infinito:after {
    left: auto;
    right: 0;
    -moz-border-radius: 50px 50px 50px 0;
         border-radius: 50px 50px 50px 0;
    -webkit-transform: rotate(45deg);
       -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
            transform: rotate(45deg);
}
#Lupa {
 position: relative;
 display: inline-block;
 width: 30px;
 height: 30px;
 border: 5px solid red;
 border-radius: 50px;
}
#Lupa:before {
 position: absolute;
 content: "";
 width: 30px;
 height: 5px;
 right: -20px;
 bottom: -10px;
 background: red;
 -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
     -ms-transform: rotate(45deg);
      -o-transform: rotate(45deg);
}
#YinYang {
  width: 96px;
  height: 48px;
  background: white;
  border-color: red;
  border-style: solid;
  border-width: 2px 2px 50px 2px;
  border-radius: 100%;
  position: relative;
}
#YinYang:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 0;
  background: white;
  border: 18px solid red;
  border-radius: 100%;
  width: 12px;
  height: 12px;
}
#YinYang:after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  background: red;
  border: 18px solid white;
  border-radius:100%;
  width: 12px;
  height: 12px;
}
#Corazon {
    position: relative;
    width: 100px;
    height: 90px;
}
#Corazon:before,
#Corazon:after {
    position: absolute;
    content: "";
    left: 50px;
    top: 0;
    width: 50px;
    height: 80px;
    background: red;
    -moz-border-radius: 50px 50px 0 0;
    border-radius: 50px 50px 0 0;
    -webkit-transform: rotate(-45deg);
       -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
    -webkit-transform-origin: 0 100%;
       -moz-transform-origin: 0 100%;
        -ms-transform-origin: 0 100%;
         -o-transform-origin: 0 100%;
            transform-origin: 0 100%;
}
#Corazon:after {
    left: 0;
    -webkit-transform: rotate(45deg);
       -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
            transform: rotate(45deg);
    -webkit-transform-origin: 100% 100%;
       -moz-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
         -o-transform-origin: 100% 100%;
            transform-origin :100% 100%;
}
#FlechaAbajo {
  position: relative;
  left:40px;
  width: 20px;
  height: 70px;
  background: red;
}
#FlechaAbajo:after {
  content: '';
  position: absolute;
  left:-40px;
  top: 70px;
  width: 0;
  height: 0;
  border: 50px solid transparent;
  border-top: 70px solid red;
}
#Linea45 {
  width: 100px;
  height: 10px;
  background: red;
  -webkit-transform: rotate(45deg);
     -moz-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
       -o-transform: rotate(45deg);
          transform: rotate(45deg);
}
#Estrella12 {
    background: red;
    width: 80px;
    height: 80px;
    position: relative;
    text-align: center;
}
#Estrella12:before, #Estrella12:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 80px;
    width: 80px;
    background: red;
}
#Estrella12:before {
    -webkit-transform: rotate(30deg);
       -moz-transform: rotate(30deg);
        -ms-transform: rotate(30deg);
         -o-transform: rotate(30deg);
}
#Estrella12:after {
    -webkit-transform: rotate(60deg);
       -moz-transform: rotate(60deg);
        -ms-transform: rotate(60deg);
         -o-transform: rotate(60deg);
}
#Estrella8 {
    background: red;
    width: 80px;
    height: 80px;
    position: relative;
    text-align: center;
    -webkit-transform: rotate(20deg);
       -moz-transform: rotate(20deg);
        -ms-transform: rotate(20deg);
         -o-transform: rotate(20eg);
}
#Estrella8:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 80px;
    width: 80px;
    background: red;
    -webkit-transform: rotate(135deg);
       -moz-transform: rotate(135deg);
        -ms-transform: rotate(135deg);
         -o-transform: rotate(135deg);
}
#Estrella6 {
  width: 0;
  height: 0;
  border-left: 60px solid transparent;
  border-right: 60px solid transparent;
  border-bottom: 100px solid red;
  position: relative;
}
#Estrella6:after {
  width: 0;
  height: 0;
  top: 30px;
  left: -60px;
  border-left: 60px solid transparent;
  border-right: 60px solid transparent;
  border-top: 100px solid red;
  position: absolute;
  content: "";
}
#Estrella5 {
   position: relative;
   display: block;
   color: red;
   width: 0px;
   height: 0px;
   border-right: 50px solid transparent;
   border-bottom: 35px  solid red;
   border-left:   50px solid transparent;
   -moz-transform:    rotate(35deg);
   -webkit-transform: rotate(35deg);
   -ms-transform:     rotate(35deg);
   -o-transform:      rotate(35deg);
}
#Estrella5:before {
   border-bottom: 30px solid red;
   border-left: 15px solid transparent;
   border-right: 15px solid transparent;
   position: absolute;
   height: 0;
   width: 0;
   top: -20px;
   left: -30px;
   display: block;
   content: '';
   -webkit-transform: rotate(-35deg);
   -moz-transform:    rotate(-35deg);
   -ms-transform:     rotate(-35deg);
   -o-transform:      rotate(-35deg);
}
#Estrella5:after {
   position: absolute;
   display: block;
   color: red;
   top: 0px;
   left: -50px;
   width: 0px;
   height: 0px;
   border-right: 50px solid transparent;
   border-bottom: 35px solid red;
   border-left: 50px solid transparent;
   -webkit-transform: rotate(-70deg);
   -moz-transform:    rotate(-70deg);
   -ms-transform:     rotate(-70deg);
   -o-transform:      rotate(-70deg);
   content: '';
}
#Diamante2 {
    border-style: solid;
    border-color: transparent transparent red transparent;
    border-width: 0 25px 25px 25px;
    height: 0;
    width: 50px;
    position: relative;
    margin: 20px 0 50px 0;
}
#Diamante2:after {
    content: "";
    position: absolute;
    top: 25px;
    left: -25px;
    width: 0;
    height: 0;
    border-style: solid;
    border-color: red transparent transparent transparent;
    border-width: 70px 50px 0 50px;
}
        </style>


<div id="Cubo">            
    </div>    
    <br>
<div id="Marcianito">            
    </div>    
    <br>
    <div id="Infinito">            
    </div>    
    <br>
    <div id="Lupa">            
    </div>    
    <br>
    <div id="YinYang">            
    </div>    
    <br>
    <div id="Corazon">            
    </div>    
   <br>
    <div id="FlechaAbajo">            
    </div>    
  <br>
    <div id="Linea45">            
    </div>    
    <br>
    <div id="Estrella12">            
    </div>    
    <br>
    <div id="Estrella8">            
    </div>    
    <br>
        <div id="Estrella6">            
    </div>    
   <br>
        <div id="Estrella5">            
    </div>    
    <br>
        <div id="Diamante">            
    </div>    
    <br>
</html>