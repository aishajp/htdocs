/*Hacer un programa mediante una función que reciba tres valores y devuelva el mayor de ellos */

function findMax(a, b, c) {
    if (a > b && a > c) {
        return a;
    } else if (b > a && b > c) {
        return b;
    } else {
        return c;
    }
}