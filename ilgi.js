/*var data=fetch('http://hp-api.herokuapp.com/api/characters') ;

document.getElementById('demo').innerHTML = data.name+" "+data.house;*/

let url = 'http://hp-api.herokuapp.com/api/characters';
let client = document.getElementById('demo');
let resim=document.getElementById('resim');
var i=0;
fetch(url)
.then(res => res.json())
.then((out) => {
    out.forEach(element => {
       if(i<50)
       { 
           //client.innerHTML += `<p>${element.name}</p>`;
        //resim.innerHTML += `<img height="350" width="400" style="margin-left:10px;" src="${element.image}"/>`
       resim.innerHTML+= `<div class="row" style="margin:50px;">
        <div class="col-sm-4 mx-auto " style="background-color:bisque;">
        <img height="350" width="400" style="margin-left:10px;" src="${element.image}">
        </div>
        <div class="col-sm-4 " style="background-color:bisque;">
        <br>
        <p>Name: ${element.name}</p><br>
        <p>House: ${element.house}</p><br>
        <p>Date of Birth: ${element.dateOfBirth}</p><br>
        <p>Hogwarts Student: ${element.hogwartsStudent}</p><br>
        <p>Hogwarts Staff: ${element.hogwartsStaff}</p><br>
        </div>
        <div class="col-sm-4 " style="background-color:bisque;">
        <br>
        <p>Wizard: ${element.wizard}</p><br>
        <p>Patronus: ${element.patronus}</p><br>
        <p>Eye Colour: ${element.eyeColour}</p><br>
        <p>Hair Colour: ${element.hairColour}</p><br>
        <p>Actor: ${element.actor}</p><br>
        </div>
        <br>`
    }
        i++;
    });
})
.catch(err => { throw err });






