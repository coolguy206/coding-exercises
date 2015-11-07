<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Coding exercise</title>
<script>
// QUESTION #1
var baby = function(babyName, age, gender, race) {
	this.babyName = babyName;
	this.age = age;
	this.gender = gender;
	this.race = race;
}
baby.prototype.cry = function() {
	console.log("I'm crying!");
};

var riley = new baby('Riley', '5 months', 'male', 'asian');
riley.cry();

var melani = new baby('Melani', '1yr', 'female', 'asian');
melani.cry();
</script>
</head>

<body>
Content of the document......
</body>

</html>