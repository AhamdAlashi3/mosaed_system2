var listDay= document.getElementById('Day');
var Day=[];
var checkbox = document.querySelectorAll('.Day');

for(var checkbox of checkboxes ){
    checkbox.addEventListener('click',function(){
        if(this.checked == true){
            Day.push(this.value);
            listDay.innerHTML = Day.join('Day');
        }else{
            //
        }
    })
}
