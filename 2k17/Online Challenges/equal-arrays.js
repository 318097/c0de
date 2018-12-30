function main(input) {
    var lines = input.split("\n");
    var t = Number(lines[0]);
    console.log("===========");
    console.log(t);

    for (var i = 1; i <= t * 4; i = i + 4) {
    	let arrALength = lines[i];
    	let arrA = lines[i + 1].split(" ");
    	let arrBLength = lines[i + 2];
    	let arrB = lines[i + 3].split(" ");

    	let status = "Not Equal";
    	if(arrALength == arrBLength){
    		status = "Partially Equal";
    	}
    	

    	let flag;
    	for(let j = 0; j < arrALength; j++){
    		flag = true;
    		if(arrA[j] !== arrB[j]){
    			// console.log(arrA[j] + " != " + arrB[j]);
    			// console.log("^^^^^");
    			flag = false;
    			break;
    		}
    	}
    	// console.log("flag :: " + flag );
    	if(flag){
    		status = "Equal";
    	}

        console.log(status);
        console.log(arrA);
    	console.log(arrB);
    	console.log("+++++++");
    }

}

process.stdin.resume();
process.stdin.setEncoding("utf-8");
var stdin_input = "";

process.stdin.on("data", function(input) {
	console.log(input);
    stdin_input += input;
});

process.stdin.on("end", function() {
    main(stdin_input);
});