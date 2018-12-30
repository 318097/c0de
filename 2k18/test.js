process.stdin.resume();
process.stdin.setEncoding("utf-8");
var stdin_input = "";

process.stdin.on("data", function (input) {
    if (Number(input) === 42) {
        process.exit();
    } else {
        console.log('--', input);
    }                       // Reading input from STDIN
});

