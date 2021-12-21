var input = document.querySelector('.input_text');
var main = document.querySelector('#name');
var temp = document.querySelector('.temp');
var desc = document.querySelector('.desc');
var clouds = document.querySelector('.clouds');
var button= document.querySelector('.submit');


button.addEventListener('click', function(name){
fetch('https://api.openweathermap.org/data/2.5/weather?q='+input.value+'&appid=9d55e7517830413832eae5c8dd831952')
.then(response => response.json())
.then(data => {
  var tempValue = data['main']['temp'];
  var temcel = (tempValue - 273);
  var nameValue = data['name'];
  var descValue = data['weather'][0]['description'];

  main.innerHTML = nameValue;
  desc.innerHTML = "Desc - "+descValue;
  temp.innerHTML = "Temp - "+Math.round(temcel) +'  celcius ';

  input.value ="";

})

.catch(err => alert("Wrong city name!"));
})