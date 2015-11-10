// QUESTION #1
// ---------------------------------------------------------
var youngHuman = {};
youngHuman.Baby = function(babyName, age, gender, race, species) {
	this.babyName = babyName;
	this.age = age;
	this.gender = gender;
	this.race = race;
	this.species = 'human';
};
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
};

youngHuman.Toddler.prototype =  new youngHuman.Baby;

youngHuman.riley = new youngHuman.Baby('Riley', '5 months', 'male', 'asian');

console.log(youngHuman.riley.babyName + ' is a ' + youngHuman.riley.species);

youngHuman.riley.cry();

youngHuman.melani = new youngHuman.Baby('Melani', '1yr', 'female', 'asian');

console.log(youngHuman.melani.babyName + ' is a ' + youngHuman.melani.species);

youngHuman.melani.cry();

youngHuman.kennedy = new youngHuman.Toddler('Kennedy', '3yr', 'female', 'asian', true, true);

console.log(youngHuman.kennedy.babyName + ' is a ' + youngHuman.kennedy.species);

youngHuman.kennedy.cry();