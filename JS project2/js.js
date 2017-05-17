var arr = prompt("");

if(arr.lengthW%2==0)
{
    for(var a = 0; a < arr.length/2; a++)
    {
    var b = arr[a];
    var c = arr[(arr.length-1) - a];
    if(b != c)
    {
        alert("Не полиндром");
        break;
    }
    }
    if(a == arr.length/2){
        alert("Полиндром");
    }
}
else
 {
    for(var a = 0; a < (arr.length-1)/2; a++)
    {
    var b = arr[a];
    var c = arr[(arr.length-1) - a];
    if(b != c)
    {
        alert("Не полиндром");
        break;
    }
    }
     if(a == (arr.length-1)/2){
         alert("Полиндром");
     }
 }
