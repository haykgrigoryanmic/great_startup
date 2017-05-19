var x, y, z;
x = 5;
y = 6;
z = x + y;
document.getElementById("demo").innerHTML = z;


var text = $("div.text");
 for (var i = 0; i < text.length; i++)
 text.get(i).style.color = "red";
 setTimeout("$('p.text').get(0).style.color = 'orange'", 2000);

