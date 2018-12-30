// Udemy : learning es6 (part 2)
// Symbols
// ....................
// const symA = Symbol();
// const symB = Symbol();

// symA;
// symB;
// console.log(symA == symB);
// ------------------------------------
// generators
// ....................
// function * gen(){
//     var name = 'mehul';
//     var flag = yield name;
//     console.log(flag);
// }
// var iter = gen();
// console.log(iter);
// var name = iter.next();
// console.log(name);
// var finished = iter.next(false);
// console.log(finished);
// ------------------------------------
// Promises
// ....................
// function getName(){
//     return new Promise((resolve, reject)=>{
//         setTimeout(()=>{
//             resolve('mehul');
//         }, 5000);
//     });
// }
// function getAge() {
//     return new Promise((resolve, reject) => {
//         setTimeout(() => {
//             resolve(24);
//         }, 2000);
//     });
// }
// var myPromise = getName()
//     .then((name) => {
//         console.log(name);
//         return getAge();
//     })
//     .then((age) => {
//         console.log(age);
//     })
// ....................
// function getName() {
//     return new Promise((resolve, reject) => {
//         setTimeout(() => {
//             resolve('mehul');
//         }, 5000);
//     });
// }
// function getAge() {
//     return new Promise((resolve, reject) => {
//         setTimeout(() => {
//             resolve(24);
//         }, 2000);
//     });
// }
//     Promise.all([getName(), getAge()])
//         .then((name, age) => {
//             console.log(name);
//             console.log(age);
//         });
// ------------------------------------
// async/await
// ....................
// function getName(){
//     return new Promise(function(resolve, reject){
//         resolve('mehul');
//     });
// }
// async function main(){
//     var name = await getName();
//     name;
// }
// main();
// ------------------------------------
// Additional methods
// ....................
// assign objects or copy objects
// copies the properties of obj2 into obj1
// var obj1 = {};
// var obj2 = {
//     name : 'mehul',
//     age : 24
// };
// Object.assign(obj1, obj2);
// obj1;
// ....................
// string repeat
// var str = '*'.repeat(10);
// str;
// ....................
// starts with
// var str1 = 'hello world'.startsWith('hello');
// str1;
// // ends with
// var str2 = 'hello world'.endsWith('world');
// str2;
// // includes
// var str3 = 'hello world'.includes('world');
// str3;
// ....................
// array find()
// return the first element that matches the condition
// var arr = [1, 2, 40, 50 , 60];
// var x = arr.find(function(value){
//     return value > 10;
// });
// x;
// ....................
// array findIndex()
// return the index of the first element that matches the condition
// var arr = [1, 2, 40, 50, 60];
// var x = arr.findIndex(function (value) {
//     return value > 10;
// });
// x;
// ....................
// Math.trunc()
// var no = Math.trunc(234.34);
// no;
// ------------------------------------
// sets
// let set = new Set([1, 2, 3, 4, 4, 4, 4]);
// set;
// set.add(10);
// set;
// set.clear();
// set;
// set.add(10);
// set;
// set.delete(10);
// set;
// var entries = set.entries();
// entries;
// set.has(20);
// ....................
// maps...
// weak sets & weak maps...
// ------------------------------------