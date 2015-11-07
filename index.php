<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Coding exercise</title>
<script>
// QUESTION #1
var youngHuman = {};
youngHuman.Baby = function(babyName, age, gender, race, species) {
	this.babyName = babyName;
	this.age = age;
	this.gender = gender;
	this.race = race;
	this.species = 'human';
}
youngHuman.Baby.prototype.cry = function() {
	console.log(this.babyName + " is crying!");
};

youngHuman.Toddler = function(babyName, age, gender, race, walk, solidFood) {
	this.babyName = babyName;
	this.age = age;
	this.gender = gender;
	this.race = race;
	this.walk = walk;
	this.solidFood = solidFood;
}

youngHuman.Toddler.prototype =  new youngHuman.Baby;

var riley = new youngHuman.Baby('Riley', '5 months', 'male', 'asian');
console.log(riley.babyName + ' is a ' + riley.species);
riley.cry();

var melani = new youngHuman.Baby('Melani', '1yr', 'female', 'asian');
console.log(melani.babyName + ' is a ' + melani.species);
melani.cry();

var kennedy = new youngHuman.Toddler('Kennedy', '3yr', 'female', 'asian', true, true);
console.log(kennedy.babyName + ' is a ' + kennedy.species);
kennedy.cry();



</script>
</head>

<body>
Content of the document......
</body>

</html>