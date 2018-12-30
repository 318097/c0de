process.stdin.resume();
process.stdin.setEncoding("utf-8");
var stdin_input = "";

process.stdin.on("data", function (input) {
    stdin_input += input;
});

process.stdin.on("end", function () {
    main(stdin_input);
});

function main(input) {
    input = input.split("\n");
    const tc = Number(input[0]);
    for (let i = 1; i <= tc; i++) {
        let [N, p, q, r] = input[i].split(" ").map(el => Number(el));
        let count = 0;
        for (let j = 1; j <= Number(N); j++) {
            if (
                (j % p === 0 && j % q !== 0 && j % r !== 0) ||
                (j % q === 0 && j % p !== 0 && j % r !== 0) ||
                (j % r === 0 && j % p !== 0 && j % q !== 0)
            ) {
                count++;
            }
        }
        console.log(count);
    }
}
