// scopes ::
// const MAX = 5;
// The first loop will actually only ever print out 5 because of the nature of the async callback only executing once i is set to 5. 
// We'd need to use an IIFE for the first for loop, or simply use "let i" instead of "var i"
// for (var i = 0; i < MAX; i++) {
//   setTimeout(function() {
//     console.log(i);
//   });
// }
// for (let i = 0; i < MAX; i++) {
//   setTimeout(function() {
//     console.log(i);
//   });
// }

// IIFE stands for self executing anonymous functions or Immediately-Invoked Function Expression.
// ----------------------------------
// arrow funcitons ::

// The fat arrow will bind the update function's scope to the global scope in this case; 
// therefore, this.x and this.y will refer to the global variables at the top
// x = 10;
// y = 10;
// vx = 20;
// vy = 20;
// var obj = {
//     x: 0,
//     y: 0,
//     vx: 5,
//     vy: 5,
//     update: () => {
//         this.x += this.vx;
//         this.y += this.vy;
//     },
//     getPosition: function () {
//         return [this.x, this.y];
//     }
// }
// obj.update();
// console.log(obj.getPosition());
// console.log([x, y]);
// ----------------------------------
// the IIFE inside the updateName function has it's own scope; 
// therefore, name is not referring to the name of the person object.
// const person = {
//     name: 'bob',
//     updateName: function () {
//         (function () {
//             this.name = 'suzy'
//         })();
//     }
// }
// person.updateName()
// console.log(person.name);
// ----------------------------------
// by using the arrow function, the internal IIFE is bound to the person objects scope
// const person = {
//     name: 'bob',
//     updateName: function () {
//         (() => {
//             this.name = 'suzy'
//         })();
//     }
// }
// person.updateName()
// console.log(person.name);
// ----------------------------------
// This is a good example as to when you should have probably used a fat arrow when passing the callback into fetchAgeFromDb.
// This is because we needed access to that setAge member when the age is returned from the database, 
// but we do not have access to it when using a normal function unless we use bind or var that = this.
// const person = {
//     age: 10,
//     setAge: function (newAge) {
//         this.age = newAge;
//     },
//     refreshAge: function () {
//         fetchAgeFromDb(function (newAge) {
//             this.setAge(newAge);
//         })
//     }
// }
// function fetchAgeFromDb(cb) { cb(20); }
// person.refreshAge();
// console.log(person.age);
// ----------------------------------
// this.prefix will not reference the expected variable in the first applyPrefix function call.
// This is an example of when we'd want to use a fat arrow to get that reference.
// function ListPrefixer(list, prefix) {
//     this.list = list;
//     this.prefix = prefix;
// }
// ListPrefixer.prototype.transform = function (cb) {
//     console.log(this);
//     this.list = this.list.map(cb);
// }
// ListPrefixer.prototype.applyPrefix = function () {
//     this.transform(function (number) {
//         console.log(number);
//         return this.prefix + number;
//     })
// }
// ListPrefixer.prototype.applyPrefixArrow = function () {
//     this.transform((number) => {
//         return this.prefix + number;
//     })
// }
// const request = new ListPrefixer([1, 2, 3], '*');
// request.applyPrefix();
// console.log(request.list);
// request.applyPrefixArrow();
// console.log(request.list);
// ----------------------------------


// ----------------------------------
