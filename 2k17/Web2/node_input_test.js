process.stdin.resume();
process.stdin.setEncoding("utf-8");
var stdin_input = "";

process.stdin.on("data", function (input) {
    stdin_input = input;
 
});

function main(input) {
    process.stdout.write(input);  
}