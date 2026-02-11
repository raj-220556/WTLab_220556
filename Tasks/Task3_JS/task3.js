

// variables
let x = 30;
var y = 20;
const pi = 3.147;
var y =40;

console.log(x,y,pi);
// document.write(pi,y,x);

// Normal declaration
function add(a,b){
    return a+b;
}
// Anonymous function declaration
const sub1 = function sub(a,b){
    return a-b;
}
console.log(sub1);

// Arrow Funtions

const mul = (a,b) => {
    return a*b;
};

// IIFE (Imediate Invoked Function Expression)
(function divs(){console.log(10/5);})();

console.log(add(2,3));
console.log(sub1(3,2));
console.log(mul(2,3));


// If else conditions

if(x>y){
    console.log(`${x} is greather than ${y}`);
}else if(y>x){
    console.log(`${y} is greather than ${x}`);
}else{
    console.log(`${x} and ${y} are Equal.`);
}

switch (x){
    case 10: console.log(x);
    default: console.log(y);
}


// Loops
// for -> for in(objects),for of(arrays) 
// for(let i=0; i<5; i++){
//     console.log(i);
// }
let list =[1,2,3,4,5]
for(l of list){
    console.log(l);
}

// while
let i =3;
while(i!=0){
    console.log(i);
    i--;
}
// do while
do{
    console.log(i);
}while(i!=0)

function add2(...nums){
    let sum=0;
    for(num of nums){
        sum += num;
    }
    console.log(sum);
}

add2(1,2,3,4,5,6);

let name2 = "string";

let n = [...name2];
console.log(n);
console.log(name2.length);

// Pop up boxs
// alert : just display msg
// window.alert(`hi hello`)
// prompt : it takes user input
// let names = window.prompt("enter name:");
// console.log(names);
// let z ="s";
// z= Number(z);

// console.log(z);
// confirm : yes or no
// if(window.confirm("hi")){
//     console.log("true");
// }else{object
//     console.log("false");
// }

// window.print() or clt+p :
// window.print();


// DOM
const newh1 = document.createElement("h1");

newh1.style.backgroundColor = "tomato";
newh1.style.width = "100px";
newh1.style.height = "100px";
newh1.textContent = `h1`;


document.body.append(newh1);
document.body.prepend(newh1);

const box = document.getElementById("box");
box.style.display = "none";
console.log();