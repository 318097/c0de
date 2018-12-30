// Udacity : ES6 (practice)

// Let & const
// Hoisting : In the below code, the output should be 'reference error - freezing is not defined.'
// Due to hoisting, it prints out 'undefined'

// function getClothing(isCold) {
//     if (isCold) {
//         var freezing = 'Grab a jacket!';
//     } else {
//         var hot = 'It’s a shorts kind of day.';
//         console.log(freezing);
//     }
// }
// getClothing(false);

// Variables declared with let and const eliminate this specific issue of hoisting because they’re scoped to the block, not to the function.
// If a variable is declared using let or const inside a block of code (denoted by curly braces { }), 
// then the variable is stuck in what is known as the temporal dead zone until the variable’s declaration is processed. 
// This behavior prevents variables from being accessed only until after they’ve been declared.
// Variables declared with let and const are only available within the block they're declared.
// -----------------------------------
// Template literals
// let name = 'mehul';
// let str = `hello, ${name}`;
// str;
// -----------------------------------
// Destructuring (array)
// let arr = [1, 2, 3];
// let [a, b, c] = arr;
// a;
// b;
// c;

// Destructuring (object)
// let obj = {name : 'mehul', age : 24};
// let {name, age} = obj;
// name;
// age;
// -----------------------------------
// Object literal shorthand
// let type = 'quartz';
// let color = 'rose';
// let carat = 21.29;

// const gemstone = {
//     type,
//     color,
//     carat,
//     calculateWorth() {
//         // will calculate worth of gemstone based on type, color, and carat
//     }
// };
// -----------------------------------
// Spread Operator
// The spread operator, written with three consecutive dots ( ... ), 
// is new in ES6 and gives you the ability to expand, or spread, iterable objects into multiple elements.
// const books = ["Don Quixote", "The Hobbit", "Alice in Wonderland", "Tale of Two Cities"];
// console.log(...books);
// -----------------------------------
// Rest Parameter
// The rest parameter, also written with three consecutive dots ( ... ), 
// allows you to represent an indefinite number of elements as an array.
// const order = [20.17, 18.67, 1.50, "cheese", "eggs", "milk", "bread"];
// const [total, subtotal, tax, ...items] = order;
// console.log(total, subtotal, tax, items);
// -----------------------------------
// 'this' in regular functions
// function IceCream() {
//     this.scoops = 0;
// }
// IceCream.prototype.addScoop = function () {
//     setTimeout(function () {
//         this.scoops++;
//         console.log('scoop added!');
//     }, 500);
// };
// const dessert = new IceCream();
// dessert.addScoop();
// console.log(dessert.scoops);

// Inspite of calling addScoop(), the value of scoops remain the same.
// The function passed to setTimeout() is called without new, without call(), without apply(), and without a context object. 
// That means the value of this inside the function is the global object and NOT the dessert object. 
// So what actually happened was that a new scoops variable was created (with a default value of undefined) 
// and was then incremented (undefined + 1 results in NaN)
// ----------
// The problem can be overcome in 2 ways : closure or arrow functions
// * closures
// function IceCream() {
//     this.scoops = 0;
// }
// IceCream.prototype.addScoop = function () {
       // closure is being used here.
//     const cone = this; // sets `this` to the `cone` variable
//     setTimeout(function () {
//         cone.scoops++; // references the `cone` variable
//         console.log('scoop added!');
//     }, 0.5);
// };
// const dessert = new IceCream();
// dessert.addScoop();
// ----------
// ** arrow functions
// function IceCream() {
//     this.scoops = 0;
// }
// IceCream.prototype.addScoop = function () {
//     setTimeout(() => { // an arrow function is passed to setTimeout
//         this.scoops++;
//         console.log('scoop added!');
//     }, 0.5);
// };
// const dessert = new IceCream();
// dessert.addScoop();

// Since arrow functions inherit their this value from the surrounding context, this code works!
// It works with arrow functions because, the value of this inside arrow funcitons is the same as the value of this 
// outside the arrow function.
// -----------------------------------