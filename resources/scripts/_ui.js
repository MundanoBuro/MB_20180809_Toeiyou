export function openCard(id){
    
    // Scroll to Card
    $('html,body').animate({
        scrollTop: $(id).offset().top - 60
    }, 1500,function(){
        
    });

}