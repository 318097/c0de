/* Format Date */
/* Input : DD-MM-YYYY */
/* Output : Mon,YYYY */
formatDate(d) {
    if (new RegExp(/[0-9]{2}-[0-9]{2}-[0-9]{4}/).test(d)) {
        d = d.split('-');
        return `${this.getMonth(d[1])}, ${d[2]}`;
    } else {
        return d;
    }
}

getMonth(m) {
    m = m + '';
    console.log(m, typeof m);
    switch (m) {
        case '1':
        case '01':
            return 'Jan';
        case '2':
        case '02':
            return 'Feb';
        case '3':
        case '03':
            return 'Mar';
        case '4':
        case '04':
            return 'Apr';
        case '5':
        case '05':
            return 'May';
        case '6':
        case '06':
            return 'Jun';
        case '7':
        case '07':
            return 'Jul';
        case '8':
        case '08':
            return 'Aug';
        case '9':
        case '09':
            return 'Sep';
        case '10':
            return 'Oct';
        case '11':
            return 'Nov';
        case '12':
            return 'Dec';
    }
}
formatMobileNo(m) {
    m = m + '';
    if (m.length === 10) {
        return `(+91) ${m.substr(0, 3)}-${m.substr(3, 3)}-${m.substr(6, 4)}`;
    } else {
        return m;
    }
}
formatDOB(dob) {
    dob = dob.split('-');
    return `${parseInt(dob[0], 10)} ${this.getMonth(
        dob[1]
    )} '${dob[2].toString().substr(2, 2)}`;
}

function convertToBinary(n) {
    let binary = '';
    while (n > 0) {
        binary = (n % 2) + binary;
        n = parseInt(n / 2);
    }
    return binary;
}