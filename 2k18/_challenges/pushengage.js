// Skillenza - Pushengage Frontend Code Challenge
// Pyramid
// This is a twist on the classic pyramid with asterisks. 
// Instead of using asterisks * you’ve to use the word ‘pushengage’ in a repeated fashion.

// For height 4 and tip pointing upwards (pyramid upright)
//    p
//   hsu
//  engag
// nehsupe
// For height 8 and tip pointing downwards (pyramid inverted)
// pushengagepushe
//  agnehsupegagn
//   gepushengag
//    agnehsupe
//     gepushe
//      egagn
//       pus
//        h
// The direction of movement alternates between left to right and right to left at every new line in output.
// Input :
// The first line is the no of test cases
// The following lines contains 2 parameters : h (height of the pyramid) & d (direction of the pyramid - u for upward & d for downward)

let std_input = '';

process.stdin.resume();
process.stdin.on('data', (input)=> {
    std_input += input;
});
process.stdin.on('end', ()=> main(std_input));

function main(input){
    input = input.split('\n');
    let tc = Number(input[0]);
    for(let i = 1; i <= (tc); i++){
        let x = input[i].split(' ');
        pyramid(x[0], x[1]);
    }
}   

function pyramid(h, direction){
    h = Number(h);
    let str = 'pushengage';
    let index = 0;
    let maxChar = h + (h -1);
    let rowCount;
    let output = '';
    let temp = '';
    let spaces = '';
    for(let i = 1; i <= h; i++){
        rowCount = getRowCharCount(direction, h, i);
        temp = '';
        spaces = '';
        for(let j = 1; j <= maxChar; j++){
            if(index === str.length){
                index = 0;
            }
            if(j <= (maxChar - rowCount) / 2){
                spaces += ' ';
            }else if(j <= ((maxChar - rowCount) / 2) + rowCount){ 
                if(i % 2 === 0){
                    temp = str[index] + temp;
                }else{
                    temp += str[index];
                }
                index++;
            }
        }
        output += spaces + temp + '\n';
    }
    console.log(output.substr(0, output.length - 1));
}

function getRowCharCount(direction,h, i){
    return direction === 'u' ? i + (i -1) : h - i + 1 + (h - i) ;
}