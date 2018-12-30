// Skillenza
// SellerPrime Front-End Developer Online Hiring Challenge
// to execute the program ::
// node sellerprime_frontend.js < sellerprime_frontend.txt

// Scare-quotient of Jack
// Jack is a bully at his school and everyone is scared of him. He collects chocolates from each person he sees. However in the last few days, he is losing his scariness
// and his fellow students do not take him as seriously as they used to.
// So he has decided to analyze his scare-quotient for each day. The scare-quotient on a particular day, i, is the maximum number of consecutive days (up to and including day i)
// in which the number of chocolates collected has been less than or equal to the number of chocolates collected on day i.
//
// Jack is not good with numbers and needs help with the calculations.
// Help Jack calculate his scare quotient for each day when he gives you the number of chocolates he collected on each day.
//
// Input Format
// The first line of input is an integer t which is the number of test cases. t test cases follow each of which contains two lines:
//
// One line with n representing the number of days.
// Next line containing n space separated numbers representing the number of chocolates collected on each day.
// Output Format
//
// The output should contain t lines, each with n space separated numbers that denote the scare-quotient for each day.
//
// Constraints
// 1<=n<=1000
// 0<=number of chocolates on each day<=100

// Sample input
// 6
// 12
// 5 5 4 10 4 3 5 5 10 8 3 9
// 7
// 2 9 7 8 8 8 7
// 17
// 7 8 0 10 0 4 8 4 9 0 5 1 5 9 5 9 5
// 12
// 6 3 4 2 4 8 10 1 4 3 6 2
// 18
// 1 5 3 4 7 9 7 5 10 9 8 4 9 1 1 4 4 9
// 5
// 8 8 3 6 8

// Sample Output
//
// 1 2 1 4 1 1 3 4 9 1 1 3
// 1 2 1 2 3 4 1
// 1 2 1 4 1 2 3 1 5 1 2 1 4 10 1 12 1
// 1 1 2 1 4 6 7 1 2 1 4 1
// 1 2 1 2 5 6 1 1 9 1 1 1 4 1 2 3 4 9
// 1 2 1 2 5
//
// Explanation
//
// For the first test case, there are 12 days. For the first day, Jack collects 5 chocolates.
// Therefore the number of consecutive days on for which the number of chocolates is less than or equal to 5 is 1.
//
// Similarly, for 2nd day, number of chocolates is 5 and there are two consecutive days for which the number of chocolates is less than or equal to 5.
// Similarly,
// 3rd day - 1
// 4th day - 4
// 5th day - 1
// and so on.

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
  for(let i = 1; i < arr.length - 1; i+=2){
  processInput(arr[i], arr[i+1]);
  }
}
function processInput(n, ch){
  // process.stdout.write(n + " --> " +ch + "\n");
  let score = 0;
  ch = ch.split(" ");
  if(ch.length == n){
    for(let i = 0; i < ch.length; i++){
      score = 0;
      let previous = i;
      while(parseInt(ch[i]) >= parseInt(ch[previous]) && previous >=0){
        score++;
        previous--;
      }
      process.stdout.write(score + " ");
    }
  }
  process.stdout.write("\n");
}
