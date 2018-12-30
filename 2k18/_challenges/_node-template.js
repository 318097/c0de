let std_input = '';
process.stdin.resume();
process.stdin.on('data', (input) => {
    std_input += input;
});
process.stdin.on('end', () => main(std_input));

function main(input) {
    input = input.split('\n');
    let tc = Number(input[0]);
    for (let i = 1; i <= tc; i++) {
        let x = input[i].split(' ');
    }
}   
