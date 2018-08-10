<div class="wrapper">


    <img src="ico/loader.gif">


</div>

<script>
document.body.onload = function(){
  setTimeout(function() {

    var preload = document.getElementsByClassName("preload")[0];
    var loaded = document.getElementsByClassName("loaded")[0];

    preload.style.display = "none";
    loaded.style.display = "inherit";
  }, 1000)
}
</script>