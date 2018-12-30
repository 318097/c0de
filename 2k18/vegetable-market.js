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

    let n = parseInt(input[0]);
    let quantity = input[1].split(" ");
    let arrSum = quantity.reduce((a,b)=>{
        return a + parseInt(b)
    }, 0);
    let q = input[2];
    let query;
    let avgQ;
    let totalVeg;
    let count = 0;
    for(let i = 3; i < parseInt(q) + 3; i++){
        query = parseInt(input[i]);
        // console.log("quantity required: ", query);
        avgQ = Math.floor(query / n) - 1;
        // console.log("initial avgQ required: ", avgQ);

        while(count < query && avgQ >= 0 && query <= arrSum){
            avgQ++;
          
            totalVeg = 0;
            // console.log("while loop with avgQ :", avgQ);
            for(let j = 0; j < quantity.length; j++){
                if(avgQ <= parseInt(quantity[j])){
                    totalVeg += avgQ;
                }else{
                    totalVeg += parseInt(quantity[j]);
                }
            }
            //  console.log("while loop with totalVeg:", totalVeg);
             count = totalVeg;
            //  console.log(`${count}<${query}?${count<query}`);
        }
    //    console.log("AvgQ ::: ",query < n ? 1 : query <= arrSum ?avgQ: -1); 
       console.log(query < n ? 1 : query <= arrSum ?avgQ: -1); 
    //    console.log("----------------------");
    }
}
