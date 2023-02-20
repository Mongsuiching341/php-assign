let text = "The rain in SPAIN stays mainly in the plain";
let result = text.match(/s/gi);

let ar = ['dhaka','newyork','Newjercy','delhi'];

let ok = ar.filter((item)=>{
    return item.match(/new/gi);
})

console.log(ok)