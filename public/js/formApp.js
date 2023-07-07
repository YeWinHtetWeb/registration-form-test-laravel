const form = document.querySelector("form"),
    nextBtn = form.querySelector(".nextBtn"),
    backBtn = form.querySelector(".backBtn"),
    allInput = form.querySelectorAll(".first input");

// console.log(allInput);
let otherInput = form.querySelector('#other3');
let otherText = form.querySelector('#other4');
// console.log(otherInput.value);
console.log(otherText.getAttribute('value'));

// function other(){
//     function hidden(){
//         otherText.type = 'hidden';
//     }
//     if(otherInput.getAttribute('value') == 'other'){
//         otherText.type = 'text';
//     }else{
//         hidden();
//     }
//
//     // if(otherInput.value != 'other'){
//     //     otherText.type = 'hidden';
//     // }else{
//     //     otherText.type = 'text';
//     //
//     // }
// }

// otherInput.addEventListener('click', other);

nextBtn.addEventListener("click", (e) => {
    e.preventDefault();
    allInput.forEach((input) => {
        if (input.value == "") {
            form.classList.add("secActive");
        }
        //  else {
        //     form.classList.remove("secActive");
        // }
    });
});

backBtn.addEventListener("click", () => form.classList.remove("secActive"));