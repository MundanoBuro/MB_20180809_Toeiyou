export function preloading() {
  setTimeout(function() {
    var preload = document.getElementsByClassName("preload")[0];
    var loaded = document.getElementsByClassName("loaded")[0];

    preload.style.display = "none";
    loaded.style.display = "inherit";
  }, 0);
}
