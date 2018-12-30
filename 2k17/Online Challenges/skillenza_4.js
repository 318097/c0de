function main(input) {
    var lines = input.split("\n");
    var t = Number(lines[0]);
    var arr;
    for (var i = 1; i <= t - 2; i++) {
        // console.log(lines[i].split("").reverse().join(""));
        arr[i - 1] = lines[i + 2].split(" ");
    }
    console.log(arr);
}

process.stdin.resume();
process.stdin.setEncoding("utf-8");
var stdin_input = "";

process.stdin.on("data", function(input) {
    stdin_input += input;
});

process.stdin.on("end", function() {
    main(stdin_input);
});