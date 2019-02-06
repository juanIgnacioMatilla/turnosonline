window.addEventListener('load',function () {
    $(document)
    .one('focus.autoExpand', 'textarea.autoExpand', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.autoExpand', 'textarea.autoExpand', function(){
        var minRows = this.getAttribute('data-min-rows')|0, rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
        this.rows = minRows + rows;
    });
    var selectDoctor = document.getElementById('selectDoctor');

    selectDoctor.onchange = function () {
        pLopez = document.getElementById("pLopez");
        pRamirez = document.getElementById("pRamirez");
        pPerez = document.getElementById("pPerez");
        pDetal = document.getElementById("pDetal");
        if (selectDoctor.value == "Dr. Lopez") {
            pLopez.style.display = "inline"
            pRamirez.style.display = "none"
            pPerez.style.display = "none"
            pDetal.style.display = "none"
        }else if(selectDoctor.value == "Dr. Ramirez"){
            pLopez.style.display = "none"
            pRamirez.style.display = "inline"
            pPerez.style.display = "none"
            pDetal.style.display = "none"
        }else if(selectDoctor.value == "Dr. Perez"){
            pLopez.style.display = "none"
            pRamirez.style.display = "none"
            pPerez.style.display = "inline"
            pDetal.style.display = "none"
        }else{
            pLopez.style.display = "none"
            pRamirez.style.display = "none"
            pPerez.style.display = "none"
            pDetal.style.display = "inline"        }

    }  
});

