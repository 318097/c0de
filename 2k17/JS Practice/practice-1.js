// Udemy : learning es6 (part 1)
// ....................
// function changeValue(x){
//     number = x;
// }
// let number = 5;
// number;
// changeValue(19);
// number;
// -----------------------
// function setValue(){
//     let score = 5;
// }
// score;
// -----------------------
// function sayHi(){
//     let name = 'mehul';
// }
// sayHi();
// name;
// -----------------------------
// {
//     let z = 5;
//     var zz = 10;
//     z;
//     zz;
// }
// zz;
// z;
// -----------------------------
// var abc = 1;
// abc;
// if(true){
//     var abc = 2;
//     abc;
//     {
//         var abc = 3;
//         abc;
//     }
// }
// abc;
// ------------------
// var m = 5;
// function funcOne(){
//     var m = 10;
//     m;
//     function funcTwo(){
//         m;
//         var m = 15;
//         m;
//         function funcThree(){
//             m;
//         }
//         funcThree();
//     }
//     funcTwo();
// }
// m;
// funcOne();
// -------------------------------
// const name = 'me';
// function fun(name){
//     console.log(this.name);
// }
// fun('hello');
// ------------------------------------
// {
//     let x = 1;
//     x;
//     {
//         let x = 2;
//         x;
//     }
//     x;
// }
// x;
// ....................
// var fn = function() { return 1; }
// var fn = function() { return 1; }
// using var, functions can be declared twice.
// ....................
// let func = function(){ return 1; }
// let func = function(){ return 1; }
// but using let, functions cannot be redeclared in the same scope.
// ------------------------------------------------------
// Arrow Functions
// ....................
// const arr = [1, 2, 3, 4];
// const byTwo = arr.map(function(number){ // map() is used to iterate through every array element.
//     return number * 2;
// });
// arr;
// byTwo;

// converting the above code in arrow function

// const arr2 = [1, 2, 3, 4];
// if there is only one parameter, the parentheses can be removed, & if there is one line in the function body, the curly braces & return can be eliminated.
// Therefore, it becomes :
// const byTwo2 = arr.map(number => number * 2);
// const byTwo2 = arr.map((number) => {return number * 2;});
// arr2;
// byTwo2;
// ....................
// arrow functions are used to eliminate the problems caused by 'this'
// var obj = {
//     value : 0,
//     increment : function(){
//         setTimeout(function(){
//             this.value++;
//             console.log(this.value);
//         }, 1000);
//     }
// };
// obj.increment();
// in the above code this.value refers to the anonymous functions value & not the value in 'obj'
// to over come the problem use arrow functions
// when arrow functions are used the 'this' refers to parents 'this'
// it is shown as given below :
// var obj = {
//     value : 0,
//     increment : function(){
//         setTimeout(() => {
//             this.value++;
//             console.log(this.value);
//         }, 1000);
//     }
// };
// obj.increment();
// ....................
// The fat arrow will bind the update function's scope to the global scope in this case.
// therefore, this.x and this.y will refer to the global variables at the top

// x = 10;
// y = 10;
// vx = 20;
// vy = 20;
 
// var obj = {
//   x: 0,
//   y: 0,
//   vx: 5,
//   vy: 5,
//   update: () => {
//     this.x += this.vx;
//     this.y += this.vy;
//   },
//   getPosition: function () {
//     return [this.x, this.y];
//   }
// }
 
// obj.update();
 
// console.log(obj.getPosition());
// console.log([x, y]);
// ------------------------------------------------------