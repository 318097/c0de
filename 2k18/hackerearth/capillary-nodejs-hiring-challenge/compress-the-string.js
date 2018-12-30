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
    const tc = input[0];
    for(let x = 0; x < tc; x++){
        const len = Number(input[x * 2 + 1]);
        const str = input[x * 2 + 2];
        let result = str[0].toUpperCase();
        
        for(let i = 1; i < len; i++){
            if(isVowel(str[i])){
                let temp = str[i];
                do{
                    i++;
                }while(isVowel(str[i]) && str[i] === temp && i < len);
                i--;
                result += temp;
            }else{
                let count = 0;
                while(!isVowel(str[i]) && i < len){
                    count++;
                    i++;
                }
                i--;
                result += count;
            }
            
        }
        console.log(result);
    }
}

function isVowel(c){
    return c === 'a' || c === 'e' || c === 'i' || c === 'o' || c === 'u';
}

