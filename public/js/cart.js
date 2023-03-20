async function changeAmount(amount,id,url){
    let data = {
        amount:amount.value,
        id:id,
    }
    
    let response = await fetch(url,{
        method:'POST',
        headers:{
            'X-CSRF-TOKEN':document.getElementById('ctoken').getAttribute('content'),
            'Content-Type':'application/json;charset=utf-8'
        },
        body: JSON.stringify(data)
    })
    let result = await response.json()
    if(result.all == "good"){
        let get = document.querySelectorAll('#error');
            get.forEach(element => {
            element.remove();
        });

    }else{
        if("remove_id" in result){
            document.getElementById(result.remove_id).remove();
        }
     
        const el = document.querySelector('.ifhaserror');
        el.innerHTML = "<div class='flex w-full p-4 text-xs bg-[#F8D7DA] mt-4 rounded text-center justify-center drop-shadow' id='error'>Товары отмеченные *** отсутствуют в нужном количестве или их нет на складе!</div>"
        if("add_error" in result){
            if(document.getElementById(result.add_error).querySelector("#error") == null){
                document.getElementById(result.add_error).innerHTML += "<div id='error'><div class='text-red-500' id='"+result.add_error_class+"'>***</div></div>";
            }
            
        }
        
    }
    
}