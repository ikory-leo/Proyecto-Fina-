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
#Flecha {
  position: relative;
  width: 0;
  height: 0;
  border-top: 9px solid transparent;
  border-right: 9px solid red;
  -webkit-transform: rotate(10deg);
  -moz-transform: rotate(10deg);
  -ms-transform: rotate(10deg);
  -o-transform: rotate(10deg);
}
#Flecha:after {
  content: "";
  position: absolute;
  border: 0 solid transparent;
  border-top: 3px solid red;
  border-radius: 20px 0 0 0;
  top: -12px;
  left: -9px;
  width: 12px;
  height: 12px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}
#Elipse {
  width: 100px;
  height: 50px;
  -moz-border-radius: 100px / 50px;
  -webkit-border-radius: 100px / 50px;
  border-radius: 100px / 50px;
  background:-webkit-radial-gradient(center,red 0%,darkred 100%);
     background:-moz-radial-gradient(center,red 0%,darkred 100%);
      background:-ms-radial-gradient(center,red 0%,darkred 100%);
       background:-o-radial-gradient(center,red 0%,darkred 100%);
          background:radial-gradient(center,red 0%,darkred 100%);
}
#Huevo {
  display:block;
  width: 70px;
  height: 100px;
  -webkit-border-radius: 63px 63px 63px 63px / 108px 108px 72px 72px;
  border-radius: 50%  50%  50%  50%  / 60%   60%   40%  40%;
  background:-webkit-linear-gradient(top,red 0%,darkred 100%);
     background:-moz-linear-gradient(top,red 0%,darkred 100%);
      background:-ms-linear-gradient(top,red 0%,darkred 100%);
       background:-o-linear-gradient(top,red 0%,darkred 100%);
          background:linear-gradient(top,red 0%,darkred 100%);
}
#Esfera {
  width: 100px;
  height: 100px;
  background: red;
  -moz-border-radius: 50px;
  -webkit-border-radius: 50px;
  border-radius: 50px;
  -webkit-box-shadow:0 0 25px black inset;
     -moz-box-shadow:0 0 25px black inset;
      -ms-box-shadow:0 0 25px black inset;
       -o-box-shadow:0 0 25px black inset;
          box-shadow:0 0 25px black inset;
}

</style>
    <div id="Flecha">            
    </div>    
    </body><br>
        <div id="Elipse">            
    </div>   
        </body><br>
        <div id="Huevo">            
    </div>
            </body><br>
        <div id="Esfera">            
    </div>
    </body>
</html>