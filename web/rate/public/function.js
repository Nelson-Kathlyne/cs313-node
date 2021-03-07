// function calculateRate(getWeight, getMailType){
    
// }

// function getWeight(){
//     const weight = document.getElementById('weight').value;
//     return weight;
// }
// function getRadioValue(){
//     document.getElementsByName('mailType')
//     .forEach(radio => {
//         if (radio.checked){
//             console.log(radio.value);
//         }
//     })

// }



function mailValues(){
 let weight = document.getElementById('weight');
 let mailType =   document.getElementsByName('mailType')
    .forEach(radio => {
        if (radio.checked){
            console.log(radio.value);
        }
    })
    return weight, mailType;
    }

function calculateRate(mailValues){
    let cost = weight * 2.50;
    console.log(cost);
    return cost;
    
    
}

