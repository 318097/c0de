// Expense handler
// A group of friends decide to go for an outing.
// The outing contains several kinds of activities.
// For each activity, each person spends a certain amount.
// At the end of each activity, a single person foots the bill while the others owe him money according to how much they spent.
// After all activities are done, find out who needs to pay whom, and the closing balance in each account.

// Input Format :
// The first line of input consists of an integer N where N is the total number of people in the group.
// The maximum number of people in the group is 26.
// Then N lines follow each consisting of a single non - negative integer Xk where k runs from 1 to N.
// Here the integer Xk represents the balance in the account of the kth person in the group.
// The next line of input contains an integer A which is the number of activities the group takes part in.

// For each activity, there will be N lines containing a single non - negative integer Yi where i runs from 1 to N.
// Here the integer Yi represents the amount spent by the ith person in the group.
// After this, another line follows containing a string Sj where the string contains a single uppercase letter of the English alphabet.
// This represents the person paying the bill for the particular activity at hand.
// That is, if the string is A, the first person pays the bill and so on.For each activity, the input is in a similar format.

// Example

// For example, suppose there are two people A and B in the group.
// Initially let A have a bank balance of 100 and B a balance of 150.
// Also suppose that they take part in two activities.
// In the first activity, A’s cost comes to 40, while B comes to 10.
// A pays the bill in this case.In the second activity, A spends 40 while B also spends 40, and B pays for the bill.
// This information will be encoded as

// 2
// 100
// 150
// 2
// 40
// 10
// A
// 40
// 40
// B

// Output Format :

// If the number of people in the group is N, there will N ^ 2 lines of output.
// Each of the first N(N - 1) lines contains a string in the form PQ – C,
// where C is a non - negative integer,
// and P and Q are upper case letters of the English alphabet.This means that P owes Q an amount of C.
// That is suppose the string is AB – 10. This would mean that A owes B an amount of 10.
// Note also if A owes B an amount of 10, then B owes A an amount of 0.
// That is if AB – 10 then BA – 0.
// The next N lines of output contain a single integer that represents the balance in the account of each of the people in the group.

// For the input given above, the output would be

// AB – 30
// BA – 0
// A – 20
// B – 100

// Explanation

// 2 is the total number of persons in the group. 100, 150 are the opening balances of A, B.
// They perform two activities costing 50(A - 40 & B - 10), paid by A and 80(A - 40 & B - 40), paid by B.
// For settlement
// In Activity 1 A paid 10 rs on behalf of B and in Activity 2 B paid 40 rs on behalf of A, hence the settlement as follows
// A -> B = 40 - 10 = 30
// B -> A = 0

// Current balance of both the individuals would be as follows:

// A = 100 – 40 – 40 = 20
// B = 150 – 10 – 40 = 100

function main(input) {
    // process.stdout.write(sum.toString());
    let data = input.split("\n");
    let noPerson = input[0];
    let balance = [];
    for (let i = 0; i < noPerson; i++) {
        balance[i] = input[i + 1];
    }
    let noActivities = input[noPerson + 1];

    let activities = [];
    for (let i = 0; i < noActivities; i++) {
        activities[i] = {

        };
    }


}

process.stdin.resume();
process.stdin.setEncoding("utf-8");
var stdin_input = "";

process.stdin.on("data", function (input) {
    // console.log(input);
    stdin_input += input;
});

process.stdin.on("end", function () {
    main(stdin_input);
});