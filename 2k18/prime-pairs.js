process.stdin.resume();
process.stdin.setEncoding("utf-8");
var stdin_input = "";

process.stdin.on("data", function (input) {
    stdin_input += input;                               // Reading input from STDIN
});

process.stdin.on("end", function () {
   main(stdin_input);
});

function main(input) {
    input = input.split("\n");
    let tc = input[0];
    prime = [];
    for(let i = 1; i <= parseInt(tc); i++){
        let [min, max] = input[i].split(" ");
        let counter;
        let isPrime;
        for(let j = parseInt(min); j <= parseInt(max); j++){
            isPrime = false;
            counter = 2;
            while(counter < j){
                if(j % counter === 0){
                    isPrime = false;
                    break;
                }
                isPrime = true;
                counter++;
            }
            if(isPrime || j == 2){
                prime.push(j);
            }
        }
        
    } 
    let len = prime.length;
    let count = len / 2;
    console.log('p', prime);
    console.log('c', count);
    for(let j = 0; j < count; j++){
        console.log(prime[j] + ' ' + prime[len - j - 1]);
    }
}
