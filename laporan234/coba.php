<!DOCTYPE html>
<html>
<head>
<title>Date Input and History</title>
<script type="text/javascript">
function displayHistory() {
 var inputDate = new Date(document.getElementById("dateInput").value);
 var history = ["Event 1 on " + new Date(2023, 0, 1),
 "Event 2 on " + new Date(2023, 2, 14),
 "Event 3 on " + new Date(2023, 5, 25)];

 document.getElementById("history").innerHTML = "";
 for (var i = 0; i < history.length; i++) {
 var eventDate = new Date(history[i].split("on ")[1]);
 if (eventDate.getFullYear() === inputDate.getFullYear() &&
 eventDate.getMonth() === inputDate.getMonth() &&
 eventDate.getDate() === inputDate.getDate()) {
 document.getElementById("history").innerHTML += "<p>" + history[i] + "</p>";
 }
 }
}
</script>
</head>
<body>

<h2>Enter a Date:</h2>
<input type="date" id="dateInput">
<button onclick="displayHistory()">Show History</button>

<h2>History:</h2>
<div id="history"></div>

</body>
</html>