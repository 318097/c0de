process.stdin.resume();
process.stdin.on('data', (d) => process.stdout.write('data => ' + d));
process.stdin.on('end', () => process.stdout.write('End.'));

console.log('process #', process.pid);