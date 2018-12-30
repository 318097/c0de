// Shawn and Arrays - Skillenza
// Uptycs Frontend Developer Online Challenge

let std_input = '';
process.stdin.resume();
process.stdin.on('data', (input) => {
    std_input += input;
});
process.stdin.on('end', () => main(std_input));

function main(input) {
    input = input.split('\n');
    let tc = Number(input[0]);
    for (let i = 0; i < tc; i++) {
        let arrLength = input[i * 3 + 1];
        let arr1 = input[i * 3 + 2].split(' ');
        let arr2 = input[i * 3 + 3].split(' ');
        // console.log(`tc ${i} => arrsize: ${arrLength}, arr1: ${arr1}, arr2: ${arr2}`);
        let output;
        let count = 0;
        for (let j = 0; j < arrLength; j++) {
            if (arr2.includes(arr1[j])) {
                arr2[arr2.indexOf(arr1[j])] = -1;
                arr1[j] = -1;
            } else {
                count++;
            }
        }
        if (count === 0) {
            output = 'Yes';
        } else if (count === 1) {
            arr1.sort();
            arr2.sort();
            let diff = Number(arr1[arrLength - 1]) - Number(arr2[arrLength - 1]);
            let arrNo = diff < 0 ? 1 : 2;
            output = `${Math.abs(diff)} ${arrNo}`;
        } else {
            output = 'No';
        }
        console.log(output);
    }
}   