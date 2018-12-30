x // undefined
var x = 5;
x;
// ------------------
y // error
const y = 10;
y;
// ------------------
const x;
x = 1;
x; // error. runtime exception. cannont assign it later.
// ------------------
var x = 19;
if(true){
    var x = 20;
    x; // 20
}
x; // 20
// ------------------
var a = 1;
var a = 111;
// no error. var can be redeclared.
// ------------------
let a = 1;
let a = 111; // error. cannot redeclare let variables. runtime exception.
// ------------------
// temporal dead zone : not able to access variable before its declaration.
// the problem in var occurs because of hoisting.
// the same problem occurs when declaring functions.

// ------------------

