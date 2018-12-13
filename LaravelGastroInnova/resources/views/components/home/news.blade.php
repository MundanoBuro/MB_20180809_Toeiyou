


<div class="grid">
    @for ($i = 1; $i <= 7; $i++)
    <div class="grid-item">
        <div class="new card">
            <div class="new-cover" style="background-image:url('images/news/n1.jpeg')"></div>
            <div class="new-content">
                <div class="new-category">CATEGORY</div>
                <div class="new-title">TITULO DE LA NOTICIA</div>
            </div>
            <div class="new-footer">
                <div class="new-date">28 Junio, 2018</div>  
                <div class="new-button"> ver mas</div>  
            </div>
        </div>
        
    </div>
 @endfor
</div>




<script>
    setTimeout(function(){
        $('.grid').isotope({
        itemSelector: '.grid-item',
          layoutMode: 'fitRows'
        });
    },200)

    function sort(){
        $('.grid').isotope({
  filter: '.metal',
    layoutMode: 'fitRows'
});
    }
</script>