process.stdin.resume();
process.stdin.setEncoding('utf-8');
var stdin_input = '';

process.stdin.on('data', function(input) {
  stdin_input += input;
});

process.stdin.on('end', function() {
  main(stdin_input);
});

function main(input) {
  input = input.split('\n');
  let len = +input[0];
  let arr = input[1].split(' ').map(e => +e);
  let count = 0;
  let sum = 0;
  let str = '';
  for (let i = 0; i < len; i++) {
    sum = 0;
    for (let j = i; j < len - 1; j++) {
      sum += arr[j];
      if (sum % 2 === 0) {
        console.log(sum);
        count++;
      } else {
        break;
      }
    }
  }
  console.log(count);
}
