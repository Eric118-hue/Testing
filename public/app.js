



function dropdown(){
   
    let colis = document.getElementById("colis");
    
    console.log(colis)
    if(colis.style.display ==="none"){
        colis.style.display = "contents";
    
        
    }else{
        colis.style.display = "none"
    }
}

// $(function(){
//     $(document).on('click', '#confirm_search', function(e){
//         e.preventDefault();

//         var nUld = $('#nUld').val();
//         var _token = $('input[type="hidden"]').attr('value');

      
//        $.ajax({
//         url: "/searchNuld",
//         data: {
//             nUld,
//             _token
//         },
//         method: "post",
//         success: function(data){
            
               
//             for(let i = 0; i<data.length; i++){
                
//               $('#results').append(
                
//                 '<tr><th>'+data[i].date+'<th></tr>'
//               )

//             }
//         }
//        })
//     })
// })