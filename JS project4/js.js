var a = prompt("");
var b = prompt("");

function searcher(a, b) 
{
var y; var x;
for(var i = 0; i<a.length; i++)
{
var b1 = b[0];
var a1 = a[i];
    x = i;

if(b1 == a1)
{
for(var z = 0; z<b.length; z++)
{
b1 = b[z];
a1 = a[x];
    x++;
if(b1 != a1)
{
break;
}
else
{
if(z == b.length-1){return y = "true";}
}
}
}
else
if(i == a.length-1)
{
return f = false;
}
}
}
var f = searcher(a, b);
alert(f);