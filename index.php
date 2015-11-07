<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Coding exercise</title>
<script>
// QUESTION #1
var Baby = function(babyName, age, gender, race, species) {
	this.babyName = babyName;
	this.age = age;
	this.gender = gender;
	this.race = race;
	this.species = 'human';
}
Baby.prototype.cry = function() {
	console.log(this.babyName + " is crying!");
};

var riley = new Baby('Riley', '5 months', 'male', 'asian');
console.log(riley.babyName + ' is a ' + riley.species);
riley.cry();

var melani = new Baby('Melani', '1yr', 'female', 'asian');
console.log(melani.babyName + ' is a ' + melani.species);
melani.cry();

var Toddler = function(babyName, age, gender, race, walk, solidFood) {
	this.babyName = babyName;
	this.age = age;
	this.gender = gender;
	this.race = race;
	this.walk = walk;
	this.solidFood = solidFood;
}

Toddler.prototype =  new Baby();

var kennedy = new Toddler('Kennedy', '3yr', 'female', 'asian', true, true);
console.log(kennedy.babyName + ' is a ' + kennedy.species);
kennedy.cry();



</script>
</head>

<body>
Content of the document......
</body>

</html>