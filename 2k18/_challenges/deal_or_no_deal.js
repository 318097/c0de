
process.stdin.resume();

var stdin_input = "";

process.stdin.on("data", function (input) {
    stdin_input += input;
});

process.stdin.on("end", function () {
   main(stdin_input);
});

function main(input) {
  let arr = input.split("\n");
  let tc = arr[0];
  let count = 0;
  for(let i = 1; i < arr.length - 1; i+=2){

    [n,c] = arr[i].split(' ');
    if(count < parseInt(tc)){
    processInput(n, c, arr[i+1]);
    count++;
  }
  }
}
function processInput(n, c, price){
  // process.stdout.write(`\n${n} ${c} \n ${price} \n --------`);
  let profit = 0;
  let max = 0;
  price = price.split(' ');
  if(price.length == n){
    for(let i = 0; i < price.length; i++){
      profit = 0;
      let next = i;
      while(parseInt(price[next]) <= parseInt(c) && next <=price.length){
        profit+= parseInt(c) - parseInt(price[next]);
        next++;
      }
      max = profit > max ? profit : max;
    }
  }
  process.stdout.write(max + "\n");
}
