<!DOCTYPE html>
<html land="en">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--stles-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <script type="text/javascript">
            function countDown(secs, elem)
            {
                var element = document.getElementById(elem);
                element.innerHTML = "<h2></h2>";
                if(secs < 1) {
                    document.quiz.submit();
                }
                else
                {
                    secs--;
                    setTimeout('countDown('+secs+',"'+elem+'")',1500);
                }
            }

            function validate() {
                return true;
            }
            </script> 
            <div id="status"></div>
            <script type="text/javascript">countDown(3,"status");</script>
            <title>Water</title>
            <style type="text/css"> 
            span { 
                color: #FF00CC;
            }
            </style>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <form name="quiz" method="post" id="myquiz" onsubmit="return validate()" action="water_upd.php">
 <input type="text" id="cha" name="chaid">
 <input type="text" id="f1" name="distance">
 <input type="number" id="f2" name="total">
 <input type="text" id="f3" name="liter">
 <input type="text" id="f4" name="time">
 <input type="text" id="f5" name="flow">
 <input type="text" id="las" name="last">
 <input type="text" id="id1" name="ent">
 <input type="submit" name="submitbutton" value="Go">
 </form>
 
 
<script>
var myObj, myJSON, text, obj;

//Storing data:
//myObj = {"channel":{"id":417010,"name":"wa","description":"water levvel","latitude":"0.0","longitude":"0.0","field1":"SEBNSOR","field2":"flow rate","created_at":"2018-02-01T17:53:34Z","updated_at":"2018-04-14T18:59:37Z","last_entry_id":606},"feeds":[{"created_at":"2018-04-14T18:59:20Z","entry_id":605,"field1":"100","field2":"100"},{"created_at":"2018-04-14T18:59:37Z","entry_id":606,"field1":"100","field2":"100"}]}
//myObj = JSONRequest.get("https://api.thingspeak.com/channels/417010/feeds.json?results=2");
//alert(myObj);

    $.getJSON("https://api.thingspeak.com/channels/417010/feeds.json?results=2", function(data) {
        
        var myObj = data;
        console.log(myObj);
		
myJSON = JSON.stringify(myObj);
localStorage.setItem("testJSON", myJSON);

//Retrieving data:
text = localStorage.getItem("testJSON");
obj = JSON.parse(text);
t1=obj.feeds[1].field1/100;
if (obj.feeds[1].field5!=0)
{
document.getElementById("f2").value=obj.feeds[1].field5;
}
else
{
document.getElementById("f2").value="0";
}
document.getElementById("cha").value=obj.channel.id;
document.getElementById("f1").value =t1;
document.getElementById("f3").value=obj.feeds[1].field3;
document.getElementById("f5").value=obj.feeds[1].field5;
document.getElementById("f4").value=obj.feeds[1].field4;
document.getElementById("id1").value=obj.feeds[1].entry_id;
document.getElementById("las").value=obj.feeds[1].created_at;

    });

</script>
</html>