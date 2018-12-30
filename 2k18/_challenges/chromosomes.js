
// process.stdin.resume();

// var stdin_input = "";

// process.stdin.on("data", function (input) {
//     stdin_input += input;
// });

// process.stdin.on("end", function () {
//    main(stdin_input);
// });

// function main(input) {
//   let arr = input.split("\n");
//   let tc = arr[0];
//   let count = 0;
//   for(let i = 1; i < arr.length - 1; i+=2){

//     if(count < parseInt(tc)){
//     processInput(arr[i], arr[i+1]);
//     count++;
//   }
//   }
// }
// function processInput(c, genes){
//     // process.stdout.write(`\n${c}\n${genes}\n--------`);
//     genes = genes.split('');
//     genes = '.*' + genes.join('.*') + '.*';
//     // console.log(new RegExp(genes));
//     process.stdout.write(new RegExp(genes).test(c) ? 'YES' : 'NO');
//     // process.stdout.write(max + "\n");
// }


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

    if(count < parseInt(tc) && tc >=1 && tc <= 10000 && arr[i].length >= 1 && arr[i].length <= 100 && arr[i+1].length >= 1 && arr[i+1].length < arr[i].length){
    processInput(arr[i], arr[i+1]);
    count++;
  }
  }
}
function processInput(c, genes){
    // process.stdout.write(`\n${c}\n${genes}\n--------`);
    genes = genes.split('');
    genes = '.*' + genes.join('.*') + '.*';
    // console.log(new RegExp(genes));
    console.log(new RegExp(genes).test(c) ? 'YES' : 'NO');
    // process.stdout.write(max + "\n");
}
