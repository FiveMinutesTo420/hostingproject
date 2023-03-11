let firstB = document.getElementById('firstB');
let secondB = document.getElementById('secondB');
let thirdB = document.getElementById('thirdB');

let firstEl = document.getElementById('firstEl');
let secondEl = document.getElementById('secondEl');
let thirdEl = document.getElementById('thirdEl');
let buy = document.getElementById('buy');
let item_modal = document.getElementById('item_modal');
let back_item_modal_btn = document.getElementById('back_item_modal_btn');
let count_item_modal = document.getElementById('count_item_modal');
firstEl.classList.remove('hidden')
firstB.addEventListener('click',function(){
    secondEl.classList.add('hidden');
    thirdEl.classList.add('hidden');
    firstEl.classList.remove('hidden');
})
secondB.addEventListener('click',function(){
    thirdEl.classList.add('hidden');
    firstEl.classList.add('hidden');
    secondEl.classList.remove('hidden');
})
thirdB.addEventListener('click',function(){
    secondEl.classList.add('hidden');
    firstEl.classList.add('hidden');
    thirdEl.classList.remove('hidden');
})
buy.addEventListener('click',function(){
    item_modal.classList.remove('hidden');
    count_item_modal.innerHTML = "x" + document.getElementById('count').value;
    
})
back_item_modal_btn.addEventListener('click',function(){
    item_modal.classList.add('hidden');
})