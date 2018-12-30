// Udemy : learning es6 (part 2)
// ....................
// rest operator
// ....................
// function print(name, ...arr){
//     name;
//     arr;
// }
// print('mehul', 23, 'developer', 'male');
// the rest operator '...' is used to combine multible values into an array.
// ------------------------------------
// spread operator
// ....................
// function print( ...arr){
//     var result = ['start', ...arr, 'end'];
//     result;
// }
// print(1, 2, 3, 4, 5);
// spread operator can also be used for strings
// var str = 'mehul';
// var chars = [...str];
// chars;
// ------------------------------------
// string interpolation
// ....................
// var name = 'mehul';
// msg = `my name is ${name}`;
// msg;
// ....................
// watch tagged & raw string literals
// video number 13 & 14
// ------------------------------------
// computed property names
// ....................
// var name = 'mehul';
// var key = 'age';
// var obj = {
//     name,
//     [key] : 20,
//     ['role']: 'developer'
// };
// obj;
// -----------------------------------
// modules
// ....................
// es6 modules are import & export
// to support es6 features in node like modules, a package has to be installed : @std/esm
// a module must be first exported, only then it can be imported.
// -----------------------------------
// classes
// ....................
// old way of defining classes & prototyping functions
// var Person = function(name, age){
//     this.name = name;
//     this.age = age;
// };
// Person.prototype.greet = function(){
//     console.log("hello, " + this.name);
// }
// const obj1 = new Person('mehul', 23);
// obj1.greet();
// ....................
// es6 supports the class keyword : 
// class Person{
//     constructor(name, age){
//         this.name = name;
//         this.age = age;
//     }
//      jump(){
//          console.log("jump");
//      }
// }
// const obj1 = new Person('mehul', 32);
// obj1;
// ....................
// es6 classes, static members, extends, getters, setters
// class Person{
//     constructor(name, age){
//         this._name = name;
//         this._age = age;
//     }
//     jump(){
//         console.log("jump");
//     }
//     get name(){
//         return this._name + '!';
//     }
//     set name(name){
//         this._name = name;
//     }
// }
// class Employee extends Person{
//     constructor(name, age, role){
//         super(name, age);
//         this.role = role;
//     }
// }
// const obj1 = new Person('mehul', 32);
// obj1;
// const emp = new Employee('mehulx', 25, 'developer');
// emp;
// --------------------------------
// array matching
// ....................
// var arr = [1, 2, 3, 4];
// var [, b, c, d] = arr;
// b;
// c;
// d;
// ....................
// function getConfig(){
//     return [
//         true,
//         10,
//         1,
//         2,
//         3,
//         4,
//         5
//     ];
// }
// let[isOn, port, ...rest] = getConfig();
// isOn;
// port;
// rest;
// ....................
// object matching
// function getConfig(){
//     return {
//         isOn : true,
//         port : 10
//     };
// }
// let{isOn, port} = getConfig();
// isOn;
// port;
// ....................
// default values (arrays)
// const arr = [1, 2];
// var[a, b, c = 100] = arr; // the default value of 100 is given to c if there is no 3rd element present in the array.
// a;
// b;
// c;
// ....................
// default values (objects)
// const arr = {a: 1, b: 2};
// var{a, b = 'bye', c = 'hello'} = arr; // the default value of 100 is given to c if there is no 3rd element present in the array.
// a;
// b;
// c;
// --------------------------------