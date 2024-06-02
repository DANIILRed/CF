let a = [50, 4, 12, 1,  ,7 ,6];

for (let i = 0; i < a.length; i++) {
  for (let j = i; j < a.length; j++) {
    if (a[i] > a[j]) {
        let temp = a[i];
        a[i] = a[j];
        a[j] = temp;
     }
     console.log(a);
  }
}

//let nav = document.querySelector('#nav'); 
//replacedNode = nav.replaceChild(nav.children[1], nav.children[0]);

document.querySelector('#sort-asc').onclick = function(){
 mySort('data-price');
}

document.querySelector('#sort-desc').onclick = function(){
   mySortDesc('data-price');
}
document.querySelector('#sort-color').onclick = function(){
  mySortDesc('data-price');
}


function mySort(sortType){
  let nav = document.querySelector('.Jersey__Catalog'); 
  for (let i = 0; i < nav.children.length; i++) {
    for (let j = i; j < nav.children.length; j++) {
         if (+nav.children[i].getAttribute(sortType) > +nav.children[j].getAttribute(sortType)){
             replacedNode = nav.replaceChild(nav.children[j], nav.children[i]);
             insertAfter(replacedNode, nav.children[i]);
         }
        }
      }

}


function mySortDesc(sortType){
  let nav = document.querySelector('.Jersey__Catalog'); 
  for (let i = 0; i < nav.children.length; i++) {
    for (let j = i; j < nav.children.length; j++) {
         if (+nav.children[i].getAttribute(sortType) < +nav.children[j].getAttribute(sortType)){
             replacedNode = nav.replaceChild(nav.children[j], nav.children[i]);
             insertAfter(replacedNode, nav.children[i]);
         }
        }
      }

}

function insertAfter(elem, refElem){
 return refElem.parentNode.insertBefore(elem, refElem.nextSibling);
}