
let btns = document.querySelectorAll('.btn');
btns.forEach(btn => {
    btn.onclick = function(event){
        let id = event.target.parentElement.id;
        // console.log(id);
        $.ajax({
            url:'store_data.php' ,
            method: 'post',
            data:{id:id} ,
            success: function(response){
                console.log(response)
            }
        })
    }
})


