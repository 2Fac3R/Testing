var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");

//  Line
ctx.moveTo(0, 0);
ctx.lineTo(200, 100);
ctx.stroke();

//  Circle
ctx.beginPath();
ctx.arc(95, 50, 40, 0, 2 * Math.PI);
ctx.stroke();

// Text
ctx.font = "30px Arial";
ctx.fillText("Hello World!", 10, 50);

// Draw Image
var img = document.getElementById("myImg");
ctx.drawImage(img, 10, 10, 170, 170);
